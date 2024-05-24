#Escreva um algoritmo que verifique se a letra digitada é vogal ou não
letra = str(input("Digite uma letra: "))
print("A letra digitada é uma vogal") if letra in "aeiouAEIOU" else print("A letra é uma consoante")