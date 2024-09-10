<?php
session_start();

if (!isset($_SESSION['transacoes'])) {
    $_SESSION['transacoes'] = [];
}

// Função para registrar uma nova transação
function registrarTransacao($descricao, $valor, $categoria) {
    $transacao = [
        'descricao' => $descricao,
        'valor' => $valor,
        'categoria' => $categoria,
        'data' => date('Y-m-d H:i:s')
    ];
    $_SESSION['transacoes'][] = $transacao;
}

// Função para calcular o saldo atual
function calcularSaldo() {
    $saldo = 0;
    foreach ($_SESSION['transacoes'] as $transacao) {
        $saldo += $transacao['valor'];
    }
    return $saldo;
}

// Função para gerar o relatório por categoria
function relatorioPorCategoria() {
    $relatorio = [];
    foreach ($_SESSION['transacoes'] as $transacao) {
        $categoria = $transacao['categoria'];
        if (!isset($relatorio[$categoria])) {
            $relatorio[$categoria] = 0;
        }
        $relatorio[$categoria] += $transacao['valor'];
    }
    return $relatorio;
}

// Processar o formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao = $_POST['descricao'];
    $valor = (float)$_POST['valor'];
    $categoria = $_POST['categoria'];

    registrarTransacao($descricao, $valor, $categoria);
    header('Location: index.php'); // Redirecionar para evitar reenvio do formulário
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Controle de Finanças Pessoais</title>
</head>
<body>
    <h1>Sistema de Controle de Finanças Pessoais</h1>

    <h2>Registrar Receita ou Despesa</h2>
    <form method="POST">
        <label>Descrição:</label>
        <input type="text" name="descricao" required><br><br>

        <label>Valor:</label>
        <input type="number" step="0.01" name="valor" required><br><br>

        <label>Categoria:</label>
        <input type="text" name="categoria" required><br><br>

        <button type="submit">Registrar</button>
    </form>

    <h2>Saldo Atual: R$ <?php echo number_format(calcularSaldo(), 2, ',', '.'); ?></h2>

    <h2>Transações</h2>
    <table border="1">
        <tr>
            <th>Data</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Categoria</th>
        </tr>
        <?php foreach ($_SESSION['transacoes'] as $transacao): ?>
        <tr>
            <td><?php echo $transacao['data']; ?></td>
            <td><?php echo $transacao['descricao']; ?></td>
            <td><?php echo number_format($transacao['valor'], 2, ',', '.'); ?></td>
            <td><?php echo $transacao['categoria']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Relatório por Categoria</h2>
    <table border="1">
        <tr>
            <th>Categoria</th>
            <th>Total</th>
        </tr>
        <?php foreach (relatorioPorCategoria() as $categoria => $total): ?>
        <tr>
            <td><?php echo $categoria; ?></td>
            <td><?php echo number_format($total, 2, ',', '.'); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
