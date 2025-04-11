<?php
$valor = $_POST['valor'];

$notas = [100, 50, 20, 10, 5, 2, 1];

echo "<h2>Nota necessaria para compor R$ $valor,00:</h2>";

foreach ($notas as $nota) {
    $quantidade = intdiv($valor, $nota);
    if ($quantidade > 0) {
        echo "$quantidade notas de R$ $nota,00<br>";
        $valor = $valor % $nota;
    }
}
?>