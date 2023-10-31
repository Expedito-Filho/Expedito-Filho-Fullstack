while True:
    idade = int(input("Digite a idade do nadador: "))
    if idade <= 7:
        print("A categoria do nadador é: Infantil.")
    elif 8 <= idade <= 17:
        print("A categoria do nadador é: Juvenil.")
    elif idade > 17:
        print("A categoria do nadador é: Adulto.")
    else:
        print("Idade inválida.")    
    continua = input("\nQuer continuar? s ou n: ")    
    if continua != "s":
        break