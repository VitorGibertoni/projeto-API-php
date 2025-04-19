
<?php
include 'includes/header.php';
include 'includes/helpers.php';
require_once 'api/openweather.php';

$cidade = sanitize($_GET['cidade'] ?? '');
$estado = sanitize($_GET['estado'] ?? '');

$coordenadas = getCoordinates($cidade, $estado);

if ($coordenadas) {
    $clima = getWeather($coordenadas['lat'], $coordenadas['lon']);
    if ($clima) {
        echo "<h2>Clima em {$clima['name']}</h2>";
        echo "<p>{$clima['weather'][0]['description']}</p>";
        echo "<p>Temperatura: {$clima['main']['temp']}°C</p>";
        echo "<p>Sensação térmica: {$clima['main']['feels_like']}°C</p>";
        echo "<p>Umidade: {$clima['main']['humidity']}%</p>";
        echo "<p>Vento: {$clima['wind']['speed']} m/s</p>";
    } else {
        echo "<p>Não foi possível obter os dados do clima.</p>";
    }
} else {
    echo "<p>Localização não encontrada.</p>";
}

include 'includes/footer.php';
?>
