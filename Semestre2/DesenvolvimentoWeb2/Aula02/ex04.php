<?php

$num = $_POST['num'];
if ($num >= 10) {
    echo ("<h2>Você está apto para participar da excursão</h2>");
} 
else {
    echo ("<h2>Programa encerrado</h2>");
}

?>