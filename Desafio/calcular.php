<?php
$palpite = $_POST['palpite'];
$sorteado = $_POST['sorteado'];
$tentativas = $_POST['tentativas'];

if ($palpite == $sorteado) {
    header("Location: resultado.php?sorteado=$sorteado&tentativas=$tentativas");
    exit();
} else {
    $mensagem = $palpite > $sorteado ? "O número é menor!" : "O número é maior!";
    $tentativas++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>errou, tenta de novo</title>
</head>
<body>
    <h2><?= $mensagem ?></h2>
    <form action="verifica.php" method="post">
        <input type="number" name="palpite" required>
        <input type="hidden" name="sorteado" value="<?= $sorteado ?>">
        <input type="hidden" name="tentativas" value="<?= $tentativas ?>">
        <button type="submit">Tentar novamente</button>
    </form>
</body>
</html>
