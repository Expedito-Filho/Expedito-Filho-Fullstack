class Animal:
    def __init__(self, nome, classe, familia, idade, cor):
        self.nome = nome
        self.classe = classe
        self.familia = familia
        self.idade = idade
        self.cor = cor
    def nascer(self):
        print(f"O {self.nome} nasceu.")
    def comer(self):
        print(f"O {self.nome} comeu.")
    def correr(self):
        print(f"O {self.nome} correu.")
    def morrer(self):
        print(f"O {self.nome} morreu.")

    def escreva(self):
        print("------------------------------")
        print(f"O nome do meu animal é:{self.nome}")  
        print(f"A classe do meu animal é: {self.classe}")  
        print(f"A família do meu animal é: {self.familia}")
        print(f"A idade do meu animal é: {self.idade}")
        print(f"A cor do pelo do meu animal é: {self.cor}")     

class Ave(Animal):
    def correr(self):
        print(f"O {self.nome} voa!")

meu_animal = Animal("Totó", "Mamífero", "Canídeo", 5, "marrom")
meu_animal.escreva()
meu_animal.nascer()
meu_animal.comer()
meu_animal.correr()
meu_animal.morrer()

meu_animal2 = Animal("Chiquinho", "Mamífero", "Felídeo", 5, "branco")
meu_animal2.escreva()
meu_animal2.nascer()
meu_animal2.comer()
meu_animal2.correr()
meu_animal2.morrer()

meu_animal3 = Animal("Amarelinho", "Ave", "Frigilidae", 5, "amarelo")
meu_animal3.escreva()
meu_animal3.nascer()
meu_animal3.comer()
meu_animal3.correr()
meu_animal3.morrer()