<?php include 'includes/header.php'; ?>
<!-- Inclui o arquivo 'header.php', que contém o cabeçalho da página, como a estrutura do HTML e o menu de navegação -->

<h2>Consulta do Clima</h2>
<!-- Título da página que descreve a função da página, que é a consulta do clima -->

<form method="GET" action="clima.php">
  <!-- Formulário que envia dados para a página 'clima.php' usando o método GET -->
  
  <input type="text" name="cidade" placeholder="Cidade" required>
  <!-- Campo de entrada de texto para o nome da cidade. O 'name' será utilizado para identificar o dado enviado, 
       e o atributo 'required' garante que o campo não será enviado vazio -->
  
  <input type="text" name="estado" placeholder="Estado" required>
  <!-- Campo de entrada de texto para o nome do estado, com a mesma lógica do campo 'cidade' -->
  
  <button type="submit">Buscar</button>
  <!-- Botão para submeter o formulário e buscar o clima -->
</form>

<?php include 'includes/footer.php'; ?>
<!-- Inclui o arquivo 'footer.php', que contém o rodapé da página -->
