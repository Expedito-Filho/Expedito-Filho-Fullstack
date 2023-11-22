<?php
// Faça um script que peça o tamanho de um arquivo para download (em MB) e
// a velocidadede um link de internet em (Mbps), 
// calcule e informe o tempo aproximado do download do arquivo usando esse link (em segundos).

$tamanho = 100;
$velocidade = 10;

$tempo = $tamanho / $velocidade;

echo "Tempo estimado: ". $tempo. " segundos.";

?>