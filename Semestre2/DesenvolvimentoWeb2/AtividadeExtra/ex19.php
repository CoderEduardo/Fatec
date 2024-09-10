<?php 

    $distancia = $_POST['distancia'];
    $velocidade_media = $_POST['velocidade_media'];

    $tempo = $distancia / $velocidade_media;

    echo("
    
        <h2>Calculadora de tempo de viagem</h2>
        <p>A viagem vai durar $tempo horas em média.</p>    

    ")

?>