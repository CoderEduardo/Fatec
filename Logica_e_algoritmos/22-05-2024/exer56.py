#Escreva um algoritmo que receba 5 valores digitados pelo usuário e no final exiba a média dos números (utilize laços de repetição)
base = 0
for i in range(0,5):
    numero = int(input("Digite um número para ser somado ao anterior: "))
    base += numero 

print(f"Resultado final {base}")