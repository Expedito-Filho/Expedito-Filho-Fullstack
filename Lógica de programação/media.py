aluno = input("Digite o Nome do Aluno: ")
nota1 = float(input("Digite a primeira nota: "))
nota2 = float(input("Digite a segunda nota: "))
media = (nota1 + nota2)/2

if (media>6):
    print("A média ",media," é superior a média minima 6.0")
else:
    if (media>=6):
        print("A média ",media," é igual a média mínima")
    else: print("A média ",media," está abaixo da média mínima 6.0")