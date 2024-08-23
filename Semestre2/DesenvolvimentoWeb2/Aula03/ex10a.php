<?php

    $num = $_POST['num'];
    $a = 1;

    while ($a <= $num) {
        echo "<p>$a</p>";
        $a += 2;
    }

?>
<p>Sequência encerrada</p>