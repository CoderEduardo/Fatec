"""nota1 = int(input("Digite a primeira nota:"))
nota2 = int(input("Digite a segunda nota:"))
ponderada = ((nota1 * 3) + (nota2 * 7)) / (3 + 7)
print(f"A média ponderada é de {ponderada}")"""

nome = str(input("Digite um nome:"))
nota1 = int(input("Digite a primeira nota:"))
nota2 = int(input("Digite a segunda nota:"))
media = (nota1 + nota2) / 2 
if media >= 7:
    print(f"Parabéns {nome}, você foi aprovado, com a média de {media}")
else:
    print(f"Você foi reprovado {nome}, com a média de: {media}")