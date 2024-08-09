#Receba 7 valores digitados do usuário e depois mostre apenas o maior número digitado
base = 0 
for i in range(0,7):
    numero = int(input("Digite um número: "))
    if numero > base:
        base = numero 
    
print(f"O maior número digitado foi {base}")