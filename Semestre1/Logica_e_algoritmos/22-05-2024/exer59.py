#Escreva um algoritmo que receba um nome e três notas, e exiba uma mensagem diferente para cada um dos casos
nome = str(input("Digite seu nome: "))
n1 = float(input("Digite a primeira nota: "))
n2 = float(input("Digite a segunda nota: "))
n3 = float(input("Digite a terceira nota: "))
media = (n1 + n2 + n3) / 3
print(f"Parabéns {nome}! Você foi aprovado") if media > 7 else print(f"Você ficou na média {nome}") if media > 5 else print(f"Você está de recuperação {nome}")