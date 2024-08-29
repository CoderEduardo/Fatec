<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas com índices ímpares</title>
</head>

<body>

    <h2>Frutas com índices ímpares</h2>

    <?php

        $frutas = array("Maça", "Banana", "Morango", "Abacaxi", "Uva", "Cereja","Laranja");

        for ($i=0; $i < 7; $i++) { 
            
            if($i % 2 != 0){
                echo("<p>$frutas[$i]</p>");
            }

        }

    ?>

</body>

</html>