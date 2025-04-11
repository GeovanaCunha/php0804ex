<?php
$numero = $_POST['numero'];
$vezes = 0;

echo "<h2>Processo de Subtração:</h2>";

do {
    $aleatorio = rand(1, 10);
    $numero -= $aleatorio;
    $vezes++;

    echo "Subtraiu $aleatorio, valor atual: $numero<br>";

} while ($numero > 0);

echo "<br>Repetiu $vezes vezes até o valor ser menor ou igual a zero";
?>