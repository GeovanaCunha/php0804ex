<?php
$sorteado = rand(1, 100);
?>

<h2>Adivinhe o número</h2>
<form action="../resultado/resultado.php" method="post">
  <input type="number" name="palpite" required>
  <input type="hidden" name="sorteado" value="<?php echo $sorteado; ?>">
  <input type="hidden" name="tentativas" value="1">
  <button type="submit">Tentar</button>
</form>