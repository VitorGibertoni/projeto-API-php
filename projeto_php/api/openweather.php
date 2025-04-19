
<?php
function getCoordinates($cidade, $estado) {
    $apiKey = '75f15a5d221e6ee6cf87149409d5861b';
    $country = 'br';
    $cidade = urlencode($cidade);
    $estado = urlencode($estado);
    $url = "https://api.openweathermap.org/geo/1.0/direct?q={$cidade},{$estado},{$country}&limit=1&appid={$apiKey}";

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    return $data[0] ?? null;
}

function getWeather($lat, $lon) {
    $apiKey = '75f15a5d221e6ee6cf87149409d5861b';
    $url = "https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric&lang=pt_br";

    $response = file_get_contents($url);
    return json_decode($response, true);
}
?>
