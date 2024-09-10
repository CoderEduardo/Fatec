<?php

$data = $_POST['data'];

//Pega a data de nascimento e cria um date time
$dataNascimento = new DateTime($data);


//Pega a data atual e converte em date time
$dataAtual =  date('d/m/Y');
$dateAtual = new DateTime($dataAtual);

//Pega o intervalo das datas
$intervalo = $dataNascimento->diff($dateAtual);

echo ("<h2>Verificador de idade</h2>");

if ($intervalo->y <= 17) {
    echo ("<p>Você não é maior de idade $intervalo->y</p>");
} else {
    echo ("<p>Você é maior de idade</p>");
}
