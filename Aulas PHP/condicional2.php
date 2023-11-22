<?php
//Faça um sistema que gerecie o estoque de uma empresa.
//Sabendo a quantidade estocada de um produto, verifique o tipo de movimentação(entrada ou saída) e 
//Realize o cálculo para atuaçizar o estoque.

/*$estoque = 100;
$tipoMovimentacao = "Saída";
$quantidadeMovimentada = 10;
$estoqueAtualizado = 0;

if ($tipoMovimentacao == "Entrada") {
    $estoqueAtualizado = $estoque + $quantidadeMovimentada;
} else if ($tipoMovimentacao == "Saída") {
    $estoqueAtualizado = $estoque - $quantidadeMovimentada;
}
echo "Estoque inicial: $estoque <hr>
      Movimento: $tipoMovimentacao<hr>
      Quantidade movimentada: $quantidadeMovimentada <hr>
      Estoque atualizado: $estoqueAtualizado <hr>";*/

$estoque = 100;
$tipoMovimentacao = "Entrada";
$quantidadeMovimentada = 10;
$estoqueAtualizado = 0;
/*Operador ternário => TESTE LÓGICO ? VALOR SE VERDADEIRO : VALOR SE FALSO*/


echo "Estoque inicial: $estoque <hr>
    Movimento: $tipoMovimentacao<hr>
    Quantidade movimentada: $quantidadeMovimentada <hr>
    Estoque atualizado: ".$estoqueAtualizado = $tipoMovimentacao == "Entrada" ?
    $estoque + $quantidadeMovimentada   :  $estoque - $quantidadeMovimentada; echo "<hr>";

?>