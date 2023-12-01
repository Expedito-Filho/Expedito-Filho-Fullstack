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
$sql = "SELECT * FROM alunos WHERE id = $id";

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
    <h1 style='text-align: center;' class='mt-0'>Pesquisa de Aluno</h1>
        <form action='modificar.php' method='POST' class='shadow p-3'>
            <div class='mb-3 mt-4'>
                <label class='form-label'>Nome*</label>
                <input type='text' class='form-control' id='nome' name='nome' value='$linha[nome]' onblur='V_nome(this)' required>
                <div id='alertaNome' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Curso*</label>
                <input type='text' class='form-control' id='curso' name='curso' value='$linha[curso]' onblur='V_curso(this)' required>
                <div id='alertaCurso' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Sexo*</label>
                <input type='text' class='form-control' id='sexo' name='sexo' value='$linha[sexo]' onblur='V_sexo(this)' required>
                <div id='alertaSexo' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Idade*</label>
                <input type='number' min='1' class='form-control' id='idade' name='idade' value='$linha[idade]' onblur='V_idade(this)' required>
                <div id='alertaIdade' class='form-text'></div>
            </div>
            <input type='hidden' name='id' value='$linha[id]' />
                <div class='mb-3'>                    
                    <input type='submit' class='btn btn-primary' value='Atualizar' onclick='V_cadastrar()'>
                </div>          
        </form>
</div>
</body>";

    }else{
    echo "Cadastro inesxistente!";
}
?>