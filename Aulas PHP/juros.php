<?php
//JUROS SIMPLES
//j = c * i * t

$c=100;  //capital
$i=0.1;  //taxa de juros mensal
$t= 1;  //tempo decorrido
while ($t <= 10) {
    echo "<br>Rendimento do mês ".$t."= ".number_format($m= $c + ($c * $i),2);
    $t++;
    $c= $m;
}
?>