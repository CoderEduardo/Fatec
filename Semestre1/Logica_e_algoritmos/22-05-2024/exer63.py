#Crie uma lista que vá de 10 até o 16, e depois pergunte qual nos números da lista o usuário gostaria de trocar por 7
numeros = [10,11,12,13,14,15,16]
trocar = int(input("Digite um número de 10 até 16 para trocar ele na lista pelo número 7: "))

for i in range (0,7):
    if trocar == numeros[i]:
        numeros[i] = 7

for numero in numeros:
    print(numero)