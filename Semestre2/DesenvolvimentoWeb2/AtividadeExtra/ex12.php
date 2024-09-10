<?php
function buscarCep($cep) {
    // Remove caracteres especiais do CEP
    $cep = preg_replace('/[^0-9]/', '', $cep);

    // URL da API do ViaCEP
    $url = "https://viacep.com.br/ws/{$cep}/json/";

    // Faz a requisição à API
    $response = file_get_contents($url);

    // Verifica se obteve uma resposta válida
    if ($response) {
        // Converte a resposta JSON em um array
        $dadosCep = json_decode($response, true);

        // Verifica se houve algum erro
        if (isset($dadosCep['erro'])) {
            return "CEP inválido.";
        }

        return $dadosCep;
    } else {
        return "Erro ao buscar o CEP.";
    }
}

$cep = $_POST['cep']; // CEP que deseja buscar
$endereco = buscarCep($cep);

// Exibindo os dados do endereço
if (is_array($endereco)) {
    echo("<h2>Busca de cep</h2>");
    echo "Logradouro: " . $endereco['logradouro'] . "<br>";
    echo "Bairro: " . $endereco['bairro'] . "<br>";
    echo "Cidade: " . $endereco['localidade'] . "<br>";
    echo "Estado: " . $endereco['uf'] . "<br>";
} else {
    echo $endereco; // Exibe o erro caso ocorra
}
?>