import random 

tentativas = 3
segredo = random.randrange(1,10)

for i in range(1,tentativas + 1):
    print(f"Você possui {tentativas} tentativas")
    numero = int(input("Digite um número:"))
    if numero > 10 or numero <  1:
        print("Digite um número válido")
        
    if numero == segredo:
        print(f"Você acertou, o número é {numero}")
        break
    else:
        tentativas-=1
        print("Você errou, tente novamente")
        
else: 
    print(f"O número correto é {segredo}")