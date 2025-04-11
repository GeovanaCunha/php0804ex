<?php
$sorteado = $_GET['sorteado'];
$tentativas = $_GET['tentativas'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>VOCE ACERTOU :D</title>
</head>
<body>
    <p>Número sorteado: <?= $sorteado ?></p>
    <p>Tentativas: <?= $tentativas ?></p>
</body>
</html>
