lista_alunos = []
numero_de_alunos = 0
for numero_de_alunos in range(2):
        nome = input("Digite o nome do aluno: ")
        pai = input("Nome do pai: ")
        mae = input("Nome da mãe: ")
        sexo = input("Digite 'M' para Masculino e 'F' para feminino: ")
        grau = input("Escolaridade: ")
        cep = float(input("Digite o CEP: "))
        telefone = float(input("Digite o numreo do telefone: "))
        rg = float(input("Digite o RG do aluno: "))
        lista_alunos.append((nome, pai, mae, sexo, grau, cep, telefone, rg))
        print("\n""Nome:",nome,", Número de cadastro:",numero_de_alunos+1,)
for numero_de_alunos in lista_alunos:
        print("\n""Nome:",numero_de_alunos [0],", Número de cadastro:")
        print("Pai:",numero_de_alunos [1], "Mãe:",numero_de_alunos [2], "Sexo:",numero_de_alunos [3])
        print("Grau:",numero_de_alunos [4], "CEP",numero_de_alunos [5], "Telefone:",numero_de_alunos [6],"RG:",numero_de_alunos [7],"\n")