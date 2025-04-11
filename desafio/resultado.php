<?php
$sorteado = $_POST['sorteado'];
$palpite = $_POST['palpite'];
$tentativas = $_POST['tentativas'];

if ($palpite == $sorteado) {
  echo "<h2>Você acertou!</h2>";
  echo "<form action='http://localhost/php0804ex-1/desafio/calcular.php' method='get'>
          <input type='hidden' name='sorteado' value='$sorteado'>
          <input type='hidden' name='tentativas' value='$tentativas'>
          <button type='submit'>Ver resultado</button>
        </form>";
} else {
  $tentativas++;
  echo "<h2>Errou!</h2>";
  echo "<p>Dica: o número é " . ($palpite < $sorteado ? "maior" : "menor") . ".</p>";

  echo "<form action='http://localhost/php0804ex-1/desafio/resultado.php' method='post'>
          <input type='number' name='palpite' required>
          <input type='hidden' name='sorteado' value='$sorteado'>
          <input type='hidden' name='tentativas' value='$tentativas'>
          <button type='submit'>Tentar de novo</button>
        </form>";
}