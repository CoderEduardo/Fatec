<?php 

    $partida1 = $_POST['partida1'];
    $partida2 = $_POST['partida2'];

    $pontuacao = ($partida1 * $partida2);

    if($pontuacao >= 50){
        echo("<p>Pontuação total da equipe: $pontuacao</p>");
    }else{
        echo("<p>Pontuação total da equipe: $pontuacao <br> 
        Precisamos intensificar nossos treinos para alcançar um desempenho melhor nos próximos jogos</p>");
    }

?>