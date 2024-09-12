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

    <section class="container">
        <h2 style="color: red;">Seja bem vindo ao MyBank</h2>
        <div class="formulario">
            <h3>Simulador de Empréstimo</h3>
            <form action="calcular.php" method="post">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome"><br>
                <label for="cliente">Já é nosso cliente: </label>
                <input type="radio" name="cliente" value="s" id="sim">SIM
                <input type="radio" name="cliente" value="n" id="nao">NÃO <br><br>
                <label for="score">Digite seu Serasa Score: </label>
                <input type="number" name="score" id="score" value="100"><br><br>
                <label for="valor">Valor Empréstimo</label>
                <input type="number" name="valor" id="valor" value="0"><br><br>
                <label for="parcela">Quantidade de parcelas: </label>
                <select name="parcela" id="parcela">
                    <option value="1">Selecione parcela</option>
                    <option value="3">3</option>
                    <option value="6">6</option>
                    <option value="12">12</option>
                    <option value="18">18</option>
                    <option value="24">24</option>
                </select><br>
                <input type="checkbox" name="seguro" id="seguro">
                <label for="seguro">Desejo incluir seguro desemprego no valor de R$ 49,90</label><br><br>
                <input type="submit" value="Simular Empréstimo">
        </div>

        </form>
    </section>

</body>

</html>