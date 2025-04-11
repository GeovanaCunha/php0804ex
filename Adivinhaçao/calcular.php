<?php
$base = rand(0, 100);
$tentativas = 0;
$numeros = ""; 

do {
    $gerado = rand(0, 100);
    $tentativas++;
    $numeros = $numeros . $gerado . " ";
} while ($gerado != $base);

echo "<h2>Resultado:</h2>";
echo "Número base: $base<br>";
echo "Tentativas: $tentativas<br>";
echo "Números gerados: $numeros";
?>
