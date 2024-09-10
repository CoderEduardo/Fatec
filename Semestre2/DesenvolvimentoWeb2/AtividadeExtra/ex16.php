<?php 

// Texto que será convertido em QR Code
$texto = $_POST['texto'];

// URL para gerar o QR Code usando a API do Google Charts
$urlQRCode = "https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=" . urlencode($texto);

// Exibindo o QR Code como uma imagem
echo "<img src='{$urlQRCode}' alt='QR Code' chs=300x300 />";

?>