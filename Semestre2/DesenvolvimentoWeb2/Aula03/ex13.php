<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Países</title>
</head>
<body>
    
    <h2>Array Países</h2>    
    <?php 
    
        $paises = array("Brasil","Chile","Equador","Guatemala","México","Moçambique","Uruguai");

        for($i = 0; $i < 7; $i++){
            echo("<p>$paises[$i]</p>");
        };

    ?>

</body>
</html>