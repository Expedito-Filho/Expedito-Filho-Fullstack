<?php

//TABUADA

$num = $_POST['num'];
$cont = 1;
while($cont<=10){
    echo "$num x $cont = ". $num * $cont ."<br>";
    $cont++;
}
?>