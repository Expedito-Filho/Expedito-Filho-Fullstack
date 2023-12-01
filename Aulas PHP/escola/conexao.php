<?php
$conn = new MySQli('localhost', 'root', '', 'cadastro_de_alunos');

if($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
}

?>