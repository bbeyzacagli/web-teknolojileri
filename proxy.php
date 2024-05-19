<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$apiKey = '23e16abd'; // OMDB API anahtarınızı buraya ekleyin
$searchTerm = isset($_GET['s']) ? urlencode($_GET['s']) : '';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$movieId = isset($_GET['i']) ? urlencode($_GET['i']) : '';

if ($searchTerm) {
    $url = "https://omdbapi.com/?s=$searchTerm&page=$page&apikey=$apiKey";
} elseif ($movieId) {
    $url = "https://omdbapi.com/?i=$movieId&apikey=$apiKey";
} else {
    echo json_encode(['Response' => 'False', 'Error' => 'Invalid parameters']);
    exit;
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

header('Content-Type: application/json');
echo $response;
?>
