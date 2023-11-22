<?php

$x = 2;
$y = 4;
$z = 1.5;

$v = $x * $y * $z;
$l = $v*1000;

echo "Caixa d'água de medidas<br>";
echo "largura= ".$x. ".00m, comprimento= ".$y.".00m, altura= ".$z."0m<br>";
echo "Capacidade ". $v. "m³ ou " . $l ." litros<br><br><br><br><br>";

// Para uma caixa d'água de 1.5m de diâmetro e 3m de altura, calcule o seu volume.

$altura = 3;
$diametro = 1.5;
$raio = $diametro/2;
$pi = pi();

$volume = ($pi * $raio**2)*$altura;

echo "Caixa d'água redonda, 1,5m de diâmetro e 3m de altura<br>
capacidade: ".round($volume,3)."m³ ou ". round($volume*1000,1) ." litros.";

?>