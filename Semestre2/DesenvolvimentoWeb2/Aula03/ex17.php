<?php 

    echo("<h2>Calcula Desconto:</h2>");

    $preco1 = $_POST['preco1'];
    $preco2 = $_POST['preco2'];
    $desconto1 = $_POST['desconto1'];
    $desconto2 = $_POST['desconto2'];

    $calculo1 = $preco1 - ($preco1 * ($desconto1 / 100));
    $calculo2 = $preco2 - ($preco2 * ($desconto2 / 100));
    echo("
    
        <p>O valor do primeiro produto com desconto é $calculo1</p>
         <p>O valor do segundo produto com desconto é $calculo2</p>

    ")

?>