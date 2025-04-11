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
    <p>Número sorteado: <strong><?= $sorteado ?></strong></p>
    <p>Tentativas: <strong><?= $tentativas ?></strong></p>
</body>
</html>
