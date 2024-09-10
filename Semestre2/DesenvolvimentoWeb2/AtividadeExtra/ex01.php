<?php

    $conta = $_POST['conta'];
    $porcentagem = $_POST['porcentagem'];

    $valor = ($conta * ($porcentagem / 100));

    echo("
    
        <h2>Calculadora de Gorjetas: </h2>
        <p>Valor total: $conta</p>
        <p>O valor a ser pago em gorjetas é de $valor</p>

    ")

?>