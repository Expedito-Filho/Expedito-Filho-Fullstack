<?php

$id = $_POST["id"];

include_once("head.php");
include_once("conexao.php");

/*if (isset($_SESSION["result"]))
if($_SESSION["result"] == "1"){
    //unset($_SESSION["result"]);
    echo "<script>alert('Produto atualizado com sucesso!');</script>";
}
else if ($_SESSION["result"] == "2"){
    //unset($_SESSION["result"]);
    echo "<script>alert('Erro ao atualizar produto!');</script>";
}*/

//Comando "SELECT" para retornar todas as colunas da tabela "produtos" onde o id for igual a variável "$id"
$sql = "SELECT * FROM produtos WHERE id = $id";

//Realizar a pesquisa no banco de dados e salvar na variável "$pesquisa"
$pesquisa = mysqli_query($conn,$sql);

//Organizar od dados que estão na variável "$pesquisa" para o formato de vetor e atribuir ao vetor "$linha"
$linha = mysqli_fetch_array($pesquisa);

//Escrever cada linha do vetor "$linha" com estilo de bootstrap
if($linha){
echo   "<body>
<br><br>

<hr>

<div class='card container mt-5 pb-5' style='border: none;'>
    <h1 style='text-align: center;' class='mt-0'>Pesquisa de Produtos</h1>
        <form action='atualizar.php' method='POST' class='shadow p-3'>
            <div class='mb-3 mt-4'>
                <label class='form-label'>Produto*</label>
                <input type='text' class='form-control' id='produto' name='produto' value='$linha[produto]' onblur='V_produto(this)' required>
                <div id='alertaProduto' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Valor*</label>
                <input type='number' class='form-control' id='valor' name='valor'  step='0.010' value='$linha[valor]' onblur='V_valor(this)' required>
                <div id='alertaValor' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Quantidade*</label>
                <input type='number' class='form-control' id='quantidade' name='quantidade' value='$linha[quantidade]' onblur='V_quantidade(this)' required>
                <div id='alertaQuantidade' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Validade*</label>
                <input type='date' class='form-control' id='validade' name='validade' value='$linha[validade]' onblur='V_validade(this)' required>
                <div id='alertaValidade' class='form-text'></div>
            </div>
            <input type='hidden' name='id' value='$linha[id]' />
                <div class='mb-3'>                    
                    <input type='submit' class='btn btn-primary' value='Atualizar' onclick='if(V_cadastrar()'>
                </div>          
        </form>
</div>
</body>";

    }else{
    echo "Produto não cadastrado.";
}
?>