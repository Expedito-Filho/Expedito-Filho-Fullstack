programa {
  inclua biblioteca Matematica --> mat
  funcao inicio() {
    real a = 2
    escreva("Valor inicial de a = ",a,"\n")
    real b = a + 3
    escreva("Valor inicial de b = ",b,"\n")
    real c = b - a
    escreva("Valor inicial de c = ",c,"\n")
    b = a * c
    escreva("Segundo valor de b = ",b,"\n")
    c = mat.potencia(b, a) 
    escreva("Segundo valor de c = ",c,"\n")
    b = c / a
    escreva("Terceiro valor de b = ",b,"\n")
    a = b + a
    escreva("Segundo valor de a = ",a,"\n")
  }
}