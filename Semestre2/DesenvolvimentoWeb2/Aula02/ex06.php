<?php

    $idade = $_POST['idade'];
    echo("<h3>Clube de Conhecimento!!</h3>");
    if($idade >= 60){
        echo "<p>Receba a pulseira vip para Idoso!</p>";
    }
    elseif($idade >= 18){
        echo "<p>Receba a pulseira normal!</p>";
    }
    else{
        echo "<p>Receba a pulseira vip para menores!</p>";
    }
    echo("<h3>Programa encerrado!!</h3>");

?>