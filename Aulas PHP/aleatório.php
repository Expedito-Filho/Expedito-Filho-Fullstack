<?php
$cand_1 = 0;
$cand_2 = 0;
$cont = 1;
while($cont <= 110  ){
    $n = rand(1,2);
    
    $cont++;
     if($n==1){
        $cand_1++;
    } else if($n==2){
        $cand_2++;
    }
}
echo "<br>O candidato 1 recebeu ".$cand_1." votos.";
echo "<br>O candidato 2 recebeu ".$cand_2." votos.<br><br><hr>";
    if($cand_1>$cand_2){
        echo "<h1>O candidato 1 é o vencedor!</h1>";
    }
    elseif($cand_2>$cand_1){
        echo "<h1>O candidato 2 é o vencedor!</h1>";
    }
    else{
        echo "<h1>Não houve vencedor nesse turno!</h1>";
    }
?>