<?php

    $cpf = $_POST['cpf'];
    function validarCPF($cpf) {
        // Remove caracteres não numéricos
        $cpf = preg_replace('/\D/', '', $cpf);
    
        // Verifica se o CPF tem 11 dígitos e não é uma sequência repetitiva
        if (strlen($cpf) != 11 || preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
    
        // Calcula o primeiro dígito verificador
        $soma = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma += $cpf[$i] * (10 - $i);
        }
        $resto = $soma % 11;
        $digito1 = ($resto < 2) ? 0 : 11 - $resto;
    
        // Calcula o segundo dígito verificador
        $soma = 0;
        for ($i = 0; $i < 10; $i++) {
            $soma += $cpf[$i] * (11 - $i);
        }
        $resto = $soma % 11;
        $digito2 = ($resto < 2) ? 0 : 11 - $resto;
    
        // Verifica se os dígitos verificadores são válidos
        return $cpf[9] == $digito1 && $cpf[10] == $digito2;
    }
    if (validarCPF($cpf)) {
        echo ("
        <h2>Validador de CPF</h2>
        <p>CPF válido.</p>        
        ");
    } else {
        echo ("
        <h2>Validador de CPF</h2>
        <p>CPF inválido.</p>        
        ");
    }


?>