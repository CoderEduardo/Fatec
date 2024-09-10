<?php

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = number_format(($peso / ($altura * $altura)),2);
    echo ("
        <h2>Cálculo IMC</h2>
        <p>O seu imc é de: $imc</p>
        ");
