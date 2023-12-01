function V_nome(campo){
    if (campo.value.trim() == ''){
        document.getElementById("alertaNome").innerHTML = '*Campo Obrigatório';
        document.getElementById("alertaNome").style.color = 'red';
    }
    else{
        document.getElementById("alertaNome").innerHTML = '';
    }
}

function V_curso(campo){
    if (campo.value.trim() == ''){
        document.getElementById("alertaCurso").innerHTML = '*Campo Obrigatório';
        document.getElementById("alertaCurso").style.color = 'red';
    }
    else{
        document.getElementById("alertaCurso").innerHTML = '';
    }
}
function V_sexo(campo){
    if (campo.value.trim() == ''){
        document.getElementById("alertaSexo").innerHTML = '*Campo Obrigatório';
        document.getElementById("alertaSexo").style.color = 'red';
    }else{
        document.getElementById("alertaSexo").innerHTML = '';
    }
}
function V_idade(campo){
    if (campo.value.trim() == ''){
        document.getElementById("alertaIdade").innerHTML = '*Campo Obrigatório';
        document.getElementById("alertaIdade").style.color = 'red';
    }
    else{
        document.getElementById("alertaIdade").innerHTML = '';
    }
}
function V_cadastrar() {
    n = document.getElementById("nome")
    c = document.getElementById("curso")
    s = document.getElementById("sexo")
    i = document.getElementById("idade")

    V_nome(n);
    V_curso(c);
    V_sexo(s);
    V_idade(i);
}
function V_pesquisa(campo){
    if (campo.value.trim() == ''){
        document.getElementById("alertaPesquisa").innerHTML = '* Campo obrigatório';
        document.getElementById("alertaPesquisa").style.color = 'red';
    }else {
        document.getElementById("alertaPesquisa").innerHTML = '';
    }
    }