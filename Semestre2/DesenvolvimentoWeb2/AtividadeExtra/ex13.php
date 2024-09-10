<?php

    $num = $_POST['num'];
    $random = random_int(1,100);
    echo("<h2>Jogo de advinhação</h2>");
    if($num == $random){
        echo("<p>Você acertou o número, parabéns ($random)</p>");
    }else{
        echo("<p>Você errou o número, tente novamente. Número correto($random)</p>");
    }

?>