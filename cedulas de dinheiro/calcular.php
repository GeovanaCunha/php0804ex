<?php

$valor = intval($_POST["valor"]);

$cedulas = [100, 50, 20, 10, 5, 2, 1];

foreach ($cedulas as $cedula) {

$qtd = intdiv($valor, $cedula);

if ($qtd > 0) {

echo "$qtd nota(s) de R$$cedula, 00<br>";

$valor %= $cedula;

}

}

?>
