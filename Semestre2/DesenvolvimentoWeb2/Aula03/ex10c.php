<?php

    $num = $_POST['num'];

    $anterior = 0;
    $posterior = 1;
    $piso = 0;

    echo("<h2>Sequência de Fibinacci para $num etapas: </h2>");

    for ($i=0; $i < $num; $i++) { 

        echo("$anterior, ");
        $temporario = $anterior + $posterior;
        $anterior = $posterior;
        $posterior = $temporario;
        $piso += $anterior**2;
    }

    echo ($piso - ($anterior**2));

?>