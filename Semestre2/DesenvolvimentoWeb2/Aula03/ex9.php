<?php

    $num = $_POST['num'];

    echo"<h2>Gerador de números</h2>";

    for ($i=0; $i <= $num ; $i++ ) { 
         echo "<p>$i</p>";
    }

    echo "<p>Sequência encerrada</p>";

?>