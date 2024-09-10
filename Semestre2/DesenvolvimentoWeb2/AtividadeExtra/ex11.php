<?php 

    $celsius = $_POST['celsius'];
    $fahrenheit = (1.8 * $celsius) + 32;
    
    echo("
    
        <h2>Colversor de celsius para fahrenheit</h2>
        <p>Fahrenheit: $fahrenheit</p>

    ");

?>