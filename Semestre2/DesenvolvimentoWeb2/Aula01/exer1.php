<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a área de um triângulo</title>
</head>
<body>
    
    <?php 
    
        $base = 10;
        $altura = 5;
        $area = ($base * $altura) / 2;
    
        echo("
            <p>Base do triângulo: $base</p>
            <p>Altura do triângulo: $altura</p>
            <p>Área do triângulo: $area</p>
        ")

    ?>

</body>
</html>