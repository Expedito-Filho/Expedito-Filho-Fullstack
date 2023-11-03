import os
alunos = {}
def carregar_se_existir():    
    if os.path.isfile("aluno.txt"):
        carregar()
        print("\nArquivo 'aluno.txt' carregado com sucesso.")
        opcao = input("\nDeseja visualizar a lista de alunos?(s ou n)")
        if opcao == "s" : mostrar_lista()
    else:
        print("\nArquivo 'aluno.txt' não encontrado. Nenhum dado foi carregado.")
def mostrar_lista():
    print("Lista de alunos ordenada por aluno_id:")
    for aluno_id, aluno_data in alunos.items():
        print("------------------------")
        print(f"Aluno {aluno_id}:")
        for chave, valor in aluno_data.items():
            print(f"{chave}: {valor}")
def preencher():
    aluno_id = input("Digite o ID do aluno: ")
    if conferir(aluno_id):
        aluno_data = {}
        aluno_data["nome"] = input("Digite o nome: ")
        aluno_data["grau_de_escolaridade"] = input("Digite o grau de escolaridade: ")
        aluno_data["idade"] = input("Digite a idade: ")
        aluno_data["sexo"] = input("Digite o sexo: ")
        aluno_data["pai"] = input("Digite o nome do pai: ")
        aluno_data["mae"] = input("Digite o nome da mãe: ")
        aluno_data["endereco"] = input("Digite o endereço: ")
        aluno_data["cep"] = input("Digite o CEP: ")
        aluno_data["rg"] = input("Digite o RG: ")
        aluno_data["telefone"] = input("Digite o telefone: ")
        print("--------------------------------------------")
        alunos[aluno_id] = aluno_data
        salvar()
def conferir(aluno_id):
    if aluno_id in alunos:
        print(f"\nAluno {aluno_id} já existe. Deseja atualizar os dados?")
        opcao = input("\nDigite 's' para sim ou 'n' para não: ")
        if opcao.lower() == 's':
            #aluno_data = alunos[aluno_id]#
            return True
        else:
            return False
    else:
        return True
def mostrar():
    aluno_id = input("\nDigite o ID do aluno que deseja mostrar: ")
    if aluno_id in alunos:
        aluno_data = alunos[aluno_id]
        print(f"\nDados do Aluno {aluno_id}:")
        for chave, valor in aluno_data.items():
            print(f"{chave}: {valor}")
    else:
        print(f"\nAluno {aluno_id} não encontrado.")
def salvar():
    with open('aluno.txt', 'w') as f:
        for aluno_id, aluno_data in sorted(alunos.items()):
            f.write(f"Aluno {aluno_id}:\n")
            for chave, valor in aluno_data.items():
                f.write(f"{chave}: {valor}\n")
def carregar():
    global alunos
    alunos = {}
    try:
        with open("aluno.txt", "r") as arq:
            aluno_id = None
            aluno_data = {}
            for linha in arq:
                linha = linha.strip()
                if linha.startswith("Aluno "):
                    if aluno_id is not None:
                        alunos[aluno_id] = aluno_data
                    aluno_id = linha.split(" ")[1][:-1]
                    aluno_data = {}
                else:
                    chave, valor = linha.split(': ')
                    aluno_data[chave] = valor
            if aluno_id is not None:
                alunos[aluno_id] = aluno_data
    except:
        pass
def menu():
    while True:
        print("\n1 - Preencher os dados de um aluno")
        print("2 - Mostrar os dados de um aluno")
        print("3 - Mostrar lista Completa")
        print("4 - Salvar")
        print("5 - Carregar")
        print("0 - para sair")
        opcao = input("Escolha uma opção: ")
        if opcao == '1':
            preencher()
        elif opcao == '2':
            mostrar()
        elif opcao == '3':
            salvar()
        elif opcao == '4':
            carregar()
        elif opcao == '0':
            break
        else:
            print('Digite uma opção Válida')
            menu()
carregar_se_existir()
menu()