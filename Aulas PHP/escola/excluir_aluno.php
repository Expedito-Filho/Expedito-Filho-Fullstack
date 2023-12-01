<?php
include_once("conexao.php");

$id = $_POST['id'];

$sql = "DELETE FROM alunos WHERE id = '$id'";

mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    
    echo "Cadastro DELETADO com sucesso!";
    
}else{
    
    echo "NENHUM cadastro DELETADO!";
    
}
?>