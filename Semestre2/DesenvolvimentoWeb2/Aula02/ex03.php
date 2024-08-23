<?php 

    $valor = $_POST['valor']; //alocando o valor de uma variável
    $porcentagem = $_POST['porcentagem'];

    $resultado = ($valor * ($porcentagem / 100));   // formando a porcentagem

    //mostrando a porcentagem
    echo("
    
        <h3>Calculando Porcentagem</h3>
        <p>$porcentagem% de $valor é: $resultado</p>

    ");

?>