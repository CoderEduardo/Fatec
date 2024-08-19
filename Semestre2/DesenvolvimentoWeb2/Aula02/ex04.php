<?php

    $media = $_POST['media'];
    if($media>=6){
        echo "Você foi aprovado";
    }else{
        echo("Você foi reprovado");
    }

?>