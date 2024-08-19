<?php

    $num = $_POST['num'];
    $porcentagem = ($num * 0.15);

    echo("
    
        <h3>Resultado da porcentagem</h3>
        <p>15% de $num é: $porcentagem</p>

    ")

?>