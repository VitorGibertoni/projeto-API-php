<?php
// Função para obter as coordenadas de uma cidade e estado
function getCoordinates($cidade, $estado) {
    // Chave da API do OpenWeatherMap
    $apiKey = '75f15a5d221e6ee6cf87149409d5861b';
    $country = 'br'; // Código do país (Brasil)
    
    // Codifica a cidade e o estado para garantir que os valores sejam válidos na URL
    $cidade = urlencode($cidade);
    $estado = urlencode($estado);
    
    // Monta a URL da API com os parâmetros necessários
    $url = "https://api.openweathermap.org/geo/1.0/direct?q={$cidade},{$estado},{$country}&limit=1&appid={$apiKey}";
    
    // Faz a requisição para a API e obtém a resposta
    $response = file_get_contents($url);
    
    // Converte a resposta JSON para um array associativo
    $data = json_decode($response, true);
    
    // Retorna as coordenadas (latitude e longitude) ou null caso não encontre
    return $data[0] ?? null;
}

// Função para obter as informações climáticas com base na latitude e longitude
function getWeather($lat, $lon) {
    // Chave da API do OpenWeatherMap
    $apiKey = '75f15a5d221e6ee6cf87149409d5861b';
    
    // Monta a URL da API com os parâmetros necessários
    $url = "https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric&lang=pt_br";
    
    // Faz a requisição para a API e obtém a resposta
    $response = file_get_contents($url);
    
    // Converte a resposta JSON para um array associativo e retorna os dados
    return json_decode($response, true);
}
?>

