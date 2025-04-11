<?php
$sorteado = $_GET['sorteado'];
$tentativas = $_GET['tentativas'];
?>

<h2>Resultado Final</h2>
<p>Você acertou o número <strong><?php echo $sorteado; ?></strong></p>
<p>errou <strong><?php echo $tentativas; ?></strong> <?php if ($tentativas == 1) { echo "vez"; } else { echo "vezes"; } ?></p>
