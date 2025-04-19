
# Projeto PHP - Consulta de Clima

Este projeto em PHP permite consultar o clima atual de uma cidade utilizando a API do OpenWeather. O usuário informa a cidade e o estado, e a aplicação retorna informações como temperatura, sensação térmica, umidade e vento.

---

## 🌎 Requisitos

- PHP (recomendado: 7.4 ou superior)
- Servidor local como [XAMPP](https://www.apachefriends.org/pt_br/index.html)
- Acesso à internet (para chamadas à API)

---

## ⚙️ Como executar localmente com XAMPP

1. **Instale o XAMPP**  
   Baixe e instale a partir de: [https://www.apachefriends.org](https://www.apachefriends.org)

2. **Inicie o Apache**  
   Abra o painel de controle do XAMPP e clique em **Start** no módulo **Apache**.

3. **Coloque o projeto na pasta certa**  
   Copie esta estrutura de pastas para dentro do diretório `htdocs` do XAMPP:
   
   Exemplo:
   ```
   C:\xampp\htdocs\projeto_php
   ```

4. **Acesse via navegador**  
   Abra o navegador e acesse:
   ```
   http://localhost/projeto_php
   ```

---

## 🗂️ Estrutura

```
/projeto_php            ← Pasta principal
│
├── index.php           ← Página com o formulário de busca
├── clima.php           ← Página que exibe o clima após a busca
│
├── api/                ← Pasta com lógica de comunicação com a API
│   └── openweather.php
│
├── includes/           ← Cabeçalho, rodapé e funções auxiliares
│   ├── header.php
│   ├── footer.php
│   └── helpers.php
│
├── assets/             ← Pasta para arquivos estáticos (CSS, imagens)
│   └── css/
│       └── style.css
```

---

## 🔐 Sobre a API

- Este projeto utiliza a [OpenWeather API](https://openweathermap.org/api).
- Você deve obter uma chave gratuita no site e colocá-la nos arquivos:
  - `api/openweather.php`

---

## 💡 Melhorias Futuras

- Exibir previsão para os próximos dias
- Responsividade com CSS
- Suporte para múltiplas cidades favoritas

---

## 📄 Licença

Este projeto é livre para fins educativos.
