<?php 

    $destino = $_POST['destino'];
    $peso = $_POST['peso'];

    if($destino == "São Paulo" && $peso == 2){
        echo("O valor do frete é de R$ 20.00");
    }

?>