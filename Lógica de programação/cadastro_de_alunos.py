alunos = {}

def salvar():
    with open('aluno.txt', 'w') as f:
        for chave, valor in alunos.items():
            f.write(f"{chave}: {valor}")
def carregar():
    global alunos
    try:
        with open('aluno.txt', 'r') as arq:
            for linha in arq:
                chave, valor = linha.strip().split(': ')
                alunos[chave] = valor
    except:
        print("Erro ao ler o arquivo")
        pass
def preencher():
    alunos["nome"] = input("Digite o nome: ")
    alunos["idade"] = input("Digite a idade: ")
    alunos["sexo"] = input("digite o sexo (M/F): ")
    alunos["pai"] = input("Nome do Pai: ")
    alunos["mae"] = input("Nome da Mãe: ")
    alunos["escolaridade"] = input("Grau de Escolaridade: ")
    alunos["endereco"] = input("Endereço: ")
    alunos["cep"] = input("CEP: ")
    alunos["cidade"] = input("Cidade: ")
    alunos["estado"] = input("Estado: ")
    alunos["telefone"] = input("Telefone: ")

def mostrar():
    print ("O nome é: ", alunos['nome'])
    print ("A idade é: ", alunos['idade'])
    print ("O sexo é: ", alunos['sexo'])
    print ("O pai é: ", alunos['pai'])
    print ("A mãe é: ", alunos['mae'])
    print ("A escolaridade é: ", alunos['escolaridade'])
    print ("O endereço é: ", alunos['endereco'])
    print ("O CEP é: ", alunos['cep'])
    print ("A cidade é: ", alunos['cidade'])
    print ("O estado é: ", alunos['estado'])
    print ("O telefone é: ", alunos['telefone'])

def menu():
    while True:
        print ("Digite 1 para preencher o cadastro")
        print ("Digite 2 para mostrar os dados")
        print ("Digite 3 para salvar os dados")
        print ("Digite 4 para carregar os dados")
        print ("Digite 5 para sair do programa")
        opcao = int(input("Digite a opção: "))
        if opcao == 1:
            preencher()            
        elif opcao == 2:
            mostrar()
        elif opcao == 3:
            salvar()
        elif opcao == 4:
            carregar()
        elif opcao == 5:
            print ("Saindo do programa")
            break
        else:
            print ("Opção Inválida")
            menu()
menu()