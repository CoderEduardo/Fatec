<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Simulador de Empréstimo</title>
</head>

<body>

    <?php
    $cliente = $_POST['cliente'];   //recebe o sim ou não
    $valor = $_POST['valor'];       //valor empréstimo
    $score = $_POST['score'];       //score do serasa
    $parcela = $_POST['parcela'];   //número de parcelas
    //$seguro = $_POST['seguro'];     //se quer seguro desemprego

    if (isset($_POST['seguro'])) {
        $seguro = 49.90;
    } else {
        $seguro = 0;
    }

    if ($cliente == 's') {
        $juros = 0.03;
        $valor = $valor + $valor * ($juros * $parcela);
        $valor_total = $valor + $valor * 0.0038;
        $valor_parcela = $valor_total / $parcela;
    } else {
        switch ($score) {
            case $score <= 299:
                $juros = 0.2;
                break;
            case $score <= 499:
                $juros = 0.15;
            case $score <= 699:
                $juros = 0.1;
            default:
                $juros = 0.05;
                break;
        }
        $valor = ($valor + $valor * ($juros * $parcela)) + 35 + $seguro;
        $valor_total = $valor + $valor * 0.0038;
        $valor_parcela = $valor_total / $parcela;
    }
    ?>

    <section class="container">

        <h2 style="color: red;">Seja bem vindo ao MyBank</h2>
        <div class="formulario">
            <h3>Simulador de Empréstimo</h3>
            <p>Valor das parcelas: <?= number_format($valor_parcela, 2, ',', '.') ?></p>
            <p>Quantidade de parcelas: <?= $parcela ?></p>
            <p>Juros: <?= $juros * 100 ?> %</p>
            <p>Valor total CET R$ <?= number_format($valor_total, 2, ',', '.') ?></p>
        </div>
    </section>
</body>

</html>