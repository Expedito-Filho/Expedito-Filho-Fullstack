<?php

$nome = $_POST["nome"];
$curso = $_POST["curso"];
$sexo = $_POST["sexo"];
$idade = $_POST["idade"];

echo "Nome: $nome <br>
      Curso: $curso <br>
      Sexo: $sexo<br>
      Idade: $idade";


//CONEXÃO COM BANCO DE DADOS
//$conn = new MySQli('localhost', 'root', 'password', 'testes');

$conn = new MySQli('localhost', 'root', '', 'cadastro_de_alunos');

if($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
}else{//CADASTRAR NO BANCO DE DADOS
      $sql = "INSERT INTO alunos (nome, curso, sexo, idade) 
      VALUE ('$nome', '$curso', '$sexo', '$idade')";

mysqli_query($conn,$sql);

}

?>