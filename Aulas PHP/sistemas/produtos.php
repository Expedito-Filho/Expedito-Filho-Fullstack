<?php

$produto = $_POST["produto"];
$valor = $_POST["valor"];
$quantidade = $_POST["quantidade"];
$validade = $_POST["validade"];

echo "Produto: $produto <br>
      Valor: $valor <br>
      Quantidade: $quantidade<br>
      Validade: $validade";


//CONEXÃO COM BANCO DE DADOS
//$conn = new MySQli('localhost', 'root', 'password', 'testes');

$conn = new MySQli('localhost', 'root', '', 'produtos_full');

if($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
}else{//CADASTRAR NO BANCO DE DADOS
      $sql = "INSERT INTO produtos (produto, valor, quantidade, validade) 
      VALUE ('$produto', '$valor', '$quantidade', '$validade')";

if(mysqli_query($conn,$sql)){
      if(mysqli_affected_rows($conn)){
            header('location:./gerenciarProdutos.php');
      }else{
            header('location:./gerenciarProdutos.php');
      }
}else{
      echo " Falha no comando SQL.";
}

}

?>