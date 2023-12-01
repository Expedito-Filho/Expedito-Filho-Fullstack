<?php
include_once("conexao.php");

$id = $_POST['id'];
$produto = $_POST['produto'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$validade = $_POST['validade'];

$sql = "UPDATE produtos SET produto = '$produto', valor = '$valor', quantidade = '$quantidade', validade = '$validade' WHERE id = '$id'";

mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    
    echo "<script>alert('Produto alterado com sucesso!');</script>";
    header('Location:./gerenciarProdutos.php');
}else{
    
    echo "<script>alert('Erro ao editar o produto!');</script>";
    header('Location:./gerenciarProdutos.php');
}
?>