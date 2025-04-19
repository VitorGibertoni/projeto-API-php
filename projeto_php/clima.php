<?php
// Inclui o cabeçalho da página
include 'includes/header.php';
// Inclui funções auxiliares, como sanitização de dados
include 'includes/helpers.php';
// Inclui o arquivo que contém as funções para consultar a API do OpenWeather
require_once 'api/openweather.php';

// Função para retornar o ícone de acordo com a descrição do clima
function getWeatherIcon($descricao) {
    $descricao = strtolower($descricao); // Converte a descrição para minúsculas para garantir que a correspondência seja consistente
    return match($descricao) {
        'clear' => 'sol.png', // Para tempo claro
        'clouds' => 'nublado.png', // Para tempo nublado
        'rain', 'drizzle' => 'chuva.png', // Para chuva ou garoa
        'thunderstorm' => 'tempestade.png', // Para tempestade
        'snow' => 'neve.png', // Para neve
        default => 'default.svg' // Para outros tipos de clima não especificados
    };
}

// Obtém o nome da cidade e do estado a partir da URL, com sanitização para evitar código malicioso
$cidade = sanitize($_GET['cidade'] ?? ''); 
$estado = sanitize($_GET['estado'] ?? ''); 

// Obtém as coordenadas da cidade e estado
$coordenadas = getCoordinates($cidade, $estado);

// Verifica se as coordenadas foram encontradas
if ($coordenadas) {
    // Se as coordenadas existirem, busca o clima para essas coordenadas
    $clima = getWeather($coordenadas['lat'], $coordenadas['lon']);
    
    // Se os dados do clima foram obtidos com sucesso
    if ($clima) {
        // Extrai a descrição do clima e usa a função para obter o ícone correspondente
        $descricao = $clima['weather'][0]['main'];
        $icone = getWeatherIcon($descricao);

        // Exibe as informações do clima de forma organizada
        echo "<div class='clima-container'>";
        echo "<img src='icons/{$icone}' alt='{$descricao}' class='clima-icon'>"; // Exibe o ícone do clima
        echo "<h2>Clima em {$clima['name']}</h2>"; // Nome da cidade
        echo "<p>{$clima['weather'][0]['description']}</p>"; // Descrição do clima
        echo "<p>Temperatura: {$clima['main']['temp']}°C</p>"; // Temperatura atual
        echo "<p>Sensação térmica: {$clima['main']['feels_like']}°C</p>"; // Sensação térmica
        echo "<p>Umidade: {$clima['main']['humidity']}%</p>"; // Umidade do ar
        echo "<p>Vento: {$clima['wind']['speed']} m/s</p>"; // Velocidade do vento
        echo "</div>";
    } else {
        // Caso o clima não seja encontrado
        echo "<p>Não foi possível obter os dados do clima.</p>";
    }
} else {
    // Caso as coordenadas não sejam encontradas
    echo "<p>Localização não encontrada.</p>";
}

// Inclui o rodapé da página
include 'includes/footer.php';
?>
