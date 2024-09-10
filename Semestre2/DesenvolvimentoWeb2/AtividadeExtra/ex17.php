<?php

// Função para verificar a disponibilidade de um domínio
function verificarDominio($dominio) {
    // Verifica se o domínio tem algum registro DNS associado
    if (checkdnsrr($dominio, "ANY")) {
        return "O domínio $dominio já está registrado.";
    } else {
        return "O domínio $dominio está disponível.";
    }
}

// Verifique o domínio
$dominio = $_POST['dominio']; // Substitua pelo domínio que você deseja verificar
$resultado = verificarDominio($dominio);

// Exibe o resultado
echo $resultado;

?>
