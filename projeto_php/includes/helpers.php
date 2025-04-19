<?php
// Função para sanitizar a entrada do usuário
function sanitize($input) {
    // trim() remove espaços em branco no início e no final da string
    // htmlspecialchars() converte caracteres especiais em HTML para evitar vulnerabilidades como XSS (Cross-Site Scripting)
    return htmlspecialchars(trim($input)); 
}
?>