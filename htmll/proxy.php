<?php

$apiUrl = 'https://www.freetogame.com/api/games?platform=pc&sort-by=popularity';

// CORS ve içerik başlıkları
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Veriyi çek
$response = @file_get_contents($apiUrl);

// Hata kontrolü
if ($response === FALSE) {
    http_response_code(500);
    echo json_encode(["error" => "API'den veri alınamadı."]);
} else {
    echo $response;
}
?>
