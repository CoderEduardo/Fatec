<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Países Ímpares</title>
</head>
<body>
    
    <h2>Array Países Ímpares</h2>    
    <?php 
    
        $paises = array("Brasil","Chile","Equador","Guatemala","México","Moçambique","Uruguai");

        for($i = 0; $i < 7; $i++){
            if($i % 2 != 0){
                echo("<p>$paises[$i]</p>");
            }
        };

    ?>

</body>
</html>