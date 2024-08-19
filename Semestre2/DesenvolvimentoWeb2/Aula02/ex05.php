<?php

    $idade = $_POST['idade'];
    echo("<h3>Exercício 05</h3>");
    if($idade < 10){
        echo("<p>Desculpe, apenas alunos com 10 anos ou mais podem entrar na festa</p>");
    }
    else
    {
        echo "<p>Bem-vindo a festa</p>";
    }
    echo("<p>Programa encerrado</p>");
?>