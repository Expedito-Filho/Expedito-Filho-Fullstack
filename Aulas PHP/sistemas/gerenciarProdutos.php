<?php

include_once("conexao.php");
include_once("head.php");

$sql = "SELECT * FROM produtos";
$result = mysqli_query($conn, $sql);

if($result){
    echo "<div class='container card mt-2'>
    <h2 style='text-align: center;' class='m-2'> Lista de Produtos </h2>
    <a href='./produtos.html' class='btn btn-primary mt-2 mb-2'>Cadastrar</a>
    <table class='table table-striped table-sm' id='tabelaPrincipal'>
    <tr>
    <th>ID</th>
    <th>Produto</th>
    <th>Valor</th>
    <th>Quantidade</th>
    <th>Validade</th>
    <th>Editar</th>
    <th>Deletar</th>
    </tr>";
        while($linha = mysqli_fetch_array($result)){
            echo"<tr id='trCadastro'>
            <form action='pesquisa.php' method='POST'>
            <td data-label='ID'>$linha[id]</td>
            <td data-label='Produto'>$linha[produto]</td>
            <td data-label='Valor'>$linha[valor]</td>
            <td data-label='Quantidade'>$linha[quantidade]</td>
            <td data-label='Validade'>$linha[validade]</td>
            
            <input type='hidden' name='id' value=$linha[id]>
            <td><button type='submit' class='btn btn-warning' name='botao1' onclick=\"return confirm('')\">Editar</button></td>
            </form>
            
            <form action='delete.php' method='POST'>
            <input type='hidden' name='id' value=$linha[id]>
            <td><button type='submit' class='btn btn-danger' name='botao2' onclick=\"return confirm('Deseja deletar esse registro? (Essa ação não pode ser desfeita)')\">Deletar</button></td>
            </form>
            ";
        }
    echo "</table>";
}else{
    echo "0 resultado";
}
?>