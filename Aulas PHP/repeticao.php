<?php
$n = 1;
while($n <= 10){
    echo "$n <br>";
    $n++;
}
echo "<br><br>"
?>

<?php
$n = 1;
$continua = true;
while($continua){
    echo "$n <br>";
    $n++;
    if ($n > 10)
        $continua = false;
}
echo "<br><br>"

//TABUADA
?>

<?php
$num = 6;
$cont = 1;
while($num*$cont<=60){
    echo "$num x $cont = ".$num*$cont."<br>";
    $cont++;
}