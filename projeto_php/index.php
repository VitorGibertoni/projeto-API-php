
<?php include 'includes/header.php'; ?>
<h2>Consulta do Clima</h2>
<form method="GET" action="clima.php">
  <input type="text" name="cidade" placeholder="Cidade" required>
  <input type="text" name="estado" placeholder="Estado" required>
  <button type="submit">Buscar</button>
</form>
<?php include 'includes/footer.php'; ?>
