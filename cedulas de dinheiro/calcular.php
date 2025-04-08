<?php

$notas = [100, 50, 20, 10, 5, 2, 1];
if ($notas)
{
    $quantidade = intdiv ($valor, $nota);
    $valor %= $nota;
    echo "R$ $nota,00: $quantidade /n";
}
?>