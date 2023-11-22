<?php
$chico = 1.5;
$ze = 1.1;
$cresc1 = .02;
$cresc2 = .03;
$cont = 0;
while($ze<$chico){
    $cont++;
    $chico += $cresc1;
    $ze += $cresc2;
}
echo "Tempo: $cont anos, Zé terá $ze m, Chico terá $chico m";
?>