<?php

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $media = number_format(($nota1 + $nota2 + $nota3) / 3, 2);
    if($media < 7){
        echo("<p>Você ficou com a média de $media, e foi reprovado</p>");
    }else{
        echo("<p>Você ficou com a média de $media, e foi aprovado</p>");
    }

?>