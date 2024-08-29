<?php 

    echo("<h2>Geração de números Sequências</h2>");
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    for ($num1; $num1 <= $num2 ; $num1++) { 
        echo("<p>$num1</p>");
    }

?>