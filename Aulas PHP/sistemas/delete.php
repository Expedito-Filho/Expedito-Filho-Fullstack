<?php
include_once("conexao.php");

$id = $_POST['id'];

$sql = "DELETE FROM produtos WHERE id = '$id'";

mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    
    echo "Produto DELETADO com sucesso!";
    
}else{
    
    echo "NENHUM produto DELETADO!";
    
}

?>