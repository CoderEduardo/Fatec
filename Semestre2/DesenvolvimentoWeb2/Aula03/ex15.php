<?php

    $letra = $_POST['letra'];
    $letras = array("A","B","C","D","E");

    for ($i=0; $i < 5; $i++) { 
        if($letra == $letras[$i]){
            $letras[$i] = "X";
        }
    }

    for ($i=0; $i < 5; $i++) { 
        echo("<p>$letras[$i]</p>");
    }

?>