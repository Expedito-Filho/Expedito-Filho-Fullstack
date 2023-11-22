<?php
/* Verificar a data de validade de 10 produtos,
utilizando estrutura de repetição (for),
estrutura condicional (ano, mês, dia)
escrever se os produtos estão dentro do prazo de validade. */

$diaAtual = date("d");
$mesAtual = date("m");
$anoAtual = date("Y");

echo"<h3>Hoje é ".date("d/m/Y").".</h3>";

for($i=1; $i<=10; $i++){
    $anoProduto = rand(2020,2030);
    $mesProduto = rand(1,12);
    if($mesProduto == 1 || $mesProduto == 3 || $mesProduto == 5 || $mesProduto == 7 || $mesProduto == 8 || $mesProduto == 10 || $mesProduto == 12){
        $diaProduto = rand(1,31);
    }elseif($mesProduto == 2){
        $diaProduto = rand(1,28);
    }else {
        $diaProduto = rand(1,30);
    }
        
        if ($anoProduto>$anoAtual){
            echo "O produto ". $i ." com a validade para $diaProduto/$mesProduto/$anoProduto está dentro do prazo de validade.<br>";
        }else if($anoProduto==$anoAtual){
            if($mesProduto > $mesAtual){
                echo "O produto ". $i ." com a validade para $diaProduto/$mesProduto/$anoProduto está dentro do prazo de validade.<br>";
            }else if($mesProduto == $mesAtual){
                if($diaProduto >= $diaAtual){
                    echo "O produto ". $i ." com a validade para $diaProduto/$mesProduto/$anoProduto está dentro do prazo de validade.<br>";}
                    else{
                        echo "O produto ". $i ." com a validade para $diaProduto/$mesProduto/$anoProduto está Vencido! Vencimento: $diaProduto/$mesProduto/$anoProduto<br>";}
            }else{
                echo "O produto ". $i ." com a validade para $diaProduto/$mesProduto/$anoProduto está Vencido! Vencimento: $diaProduto/$mesProduto/$anoProduto<br>";}
        }else{
            echo "O produto ". $i ." com a validade para $diaProduto/$mesProduto/$anoProduto está Vencido! Vencimento: $diaProduto/$mesProduto/$anoProduto<br>";}
}

?>


