<!DOCTYPE html>
<html>
<head>
    <title>Jogo do Número</title>
</head>
<body>
    <h2>Digite algum numero</h2>
    <?php $sorteado = rand(0, 100); ?>
    <form action="verifica.php" method="post">
        <input type="number" name="palpite" required>
        <input type="hidden" name="sorteado" value="<?= $sorteado ?>">
        <input type="hidden" name="tentativas" value="1">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>