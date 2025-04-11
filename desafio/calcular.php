<?php
$sorteado = $_GET['sorteado'];
$tentativas = $_GET['tentativas'];
?>

<h2>Resultado Final</h2>
<p>Você acertou o número <strong><?php echo $sorteado; ?></strong></p>
<p>Você tentou <strong><?php echo $tentativas; ?></strong> 
<?php echo ($tentativas == 1) ? "vez" : "vezes"; ?></p>