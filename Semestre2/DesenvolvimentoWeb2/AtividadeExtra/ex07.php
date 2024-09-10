<?php 

    $frase = $_POST['frase'];
    $lista = explode(" ", $frase);
    $quantidade = count($lista);

    echo("
    
        <h2>Contador de palavras</h2>
        <p>A quantidade de palavras é de $quantidade</p>

    ")

?>