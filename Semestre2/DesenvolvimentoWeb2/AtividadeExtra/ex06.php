<?php
function gerarSenhaAleatoria($tamanho = 8, $incluirNumeros = true, $incluirLetras = true, $incluirEspeciais = false)
{
    // Define as opções de caracteres
    $numeros = '0123456789';
    $letras = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $especiais = '!@#$%^&*()-_=+{}[]|;:,.<>?';

    $caracteres = '';

    // Inclui números na senha se o usuário escolher
    if ($incluirNumeros) {
        $caracteres .= $numeros;
    }

    // Inclui letras na senha se o usuário escolher
    if ($incluirLetras) {
        $caracteres .= $letras;
    }

    // Inclui caracteres especiais na senha se o usuário escolher
    if ($incluirEspeciais) {
        $caracteres .= $especiais;
    }

    // Verifica se o usuário selecionou pelo menos uma opção
    if ($caracteres === '') {
        return 'Por favor, selecione ao menos uma opção de caracteres.';
    }

    // Gera a senha aleatória
    $senha = '';
    $tamanhoMax = strlen($caracteres) - 1;

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, $tamanhoMax)];
    }

    return $senha;
}

// Exemplo de uso
$incluirNumeros = true;
$incluirLetras = true;
$incluirEspeciais = true;

$tamanhoSenha = $_POST['tamanho'];
$letras = $_POST['letras'];
$numeros = $_POST['numeros'];
$especiais = $_POST['especiais'];

//Verifica o valor recebido do front end
if ($letras == "sim") {
    $incluirLetras = true;
} else {
    $incluirLetras = false;
}

if ($numeros == "sim") {
    $incluirNumeros = true;
} else {
    $incluirNumeros = false;
}

if ($especiais == "sim") {
    $incluirEspeciais = true;
} else {
    $incluirEspeciais = false;
}

$senha =  gerarSenhaAleatoria($tamanhoSenha, $incluirNumeros, $incluirLetras, $incluirEspeciais);

echo("

    <h2>Sua senha: </h2>
    <p>$senha</p>
");


