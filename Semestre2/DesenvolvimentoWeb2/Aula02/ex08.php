<?php

$temperatura = $_POST['temperatura'];

if ($temperatura == 0) {
    echo ("<p>Temperatura neutra</p>");
} elseif ($temperatura < 0) {
    echo ("<p>Frio intenso detectado</p>");
} else {
    echo("<p>Clima ameno e agradável!</p>");
}

?>