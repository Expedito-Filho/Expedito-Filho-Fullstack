//Construir um sistema de informacao, declare as variáveis 
//para o algoritmo de cadastramento de alunos, cujos dados são:
//nome, sexo, endereço, cidade, estado, CEP, telefone, data de nascimento, RG, 
//nome do pai, nome da mãe e grau de escolaridade.

programa
{
	funcao inicio ()
	{
		cadeia nome
    cadeia sexo
    cadeia endereco
    cadeia cidade
    cadeia estado
    cadeia telefone
    cadeia nomeDoPai
    cadeia nomeDaMae
    cadeia grauDeEscolaridade
    inteiro cep
    inteiro dataNascimento
    inteiro rg 

		escreva("Digite seu nome: ")
		leia(nome)
    
    escreva("Seu sexo: ")
		leia(sexo)
    
    escreva("Endereço: ")
		leia(endereco)
    
    escreva("Cidade: ")
		leia(cidade)
    
    escreva("Estado: ")
		leia(estado)
    
    escreva("Telefone: ")
		leia(telefone)
    
    escreva("Nome do pai: ")
		leia(nomeDoPai)
    
    escreva("Nome da mãe: ")
		leia(nomeDaMae)
    
    escreva("Grau de Escolaridade: ")
		leia(grauDeEscolaridade)

    escreva("Digite o CEP: ")
		leia(cep)

    escreva("Data de Nascimento: ")
		leia(dataNascimento)

    escreva("RG: ")
		leia(rg)
		
		escreva("O nome digitado foi: ", nome, "\n")

    escreva("O sexo digitado foi: ", sexo, "\n")

    escreva("O endereço digitado foi: ", endereco, "\n")
    
    escreva("A cidade digitado foi: ", cidade, "\n")

    escreva("O estado digitado foi: ", estado, "\n")

    escreva("O telefone digitado foi: ", telefone, "\n")
    
    escreva("O nome do pai digitado foi: ", nomeDoPai, "\n")

    escreva("O nome da mãe digitado foi: ", nomeDaMae, "\n")

    escreva("O grau de escolaridade digitado foi: ", grauDeEscolaridade, "\n")
    
    escreva("O CEP digitado foi: ", cep, "\n")

    escreva("A data de nascimento digitada foi: ", dataNascimento, "\n")

    escreva("O número RG digitado foi: ", rg, "\n")
	}
}

