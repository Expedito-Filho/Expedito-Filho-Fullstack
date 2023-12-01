<?php
include_once("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$curso = $_POST['curso'];
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];

$sql = "UPDATE alunos SET nome = '$nome', curso = '$curso', sexo = '$sexo', idade = '$idade' WHERE id = '$id'";

mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)){
    //$_SESSION["result"] = "1";
    echo "Cadastro alterado com sucesso!";
    //header('Location:./produtos.html');
}else{
    //$_SESSION["result"] = "2";
    echo "Erro ao editar o cadastro!";
    //header('Location:./produtos.html');
}
?>