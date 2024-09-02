<?php 

    $termo = $_POST['termo'];
    $quantidade = $_POST['quantidade'];
    $razao = $_POST['razao'];

    for ($i = 1; $i < $quantidade ; $i++) { 
        echo("<p>a $i ... $termo </p>");
        $termo = $termo * $razao;

    }

?>