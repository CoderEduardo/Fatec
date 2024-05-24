#Crie uma lista de números e verifique qual é o maior da lista, e depois mostre a posição dele
numeros = [1,5,10,46,5,101,3]
base = 0
posicao = 0
for i in range(0,7):
    numero = numeros[i]
    if numero > base:
        base = numeros[i]
        posicao = i

print(f"O maior número é o {base}, e ele está na posição {posicao} da lista")

##Outra forma de resolver o mesmo problema

numeros = [1,5,10,46,5,101,3]
base = 0 
for numero in numeros:
    if numero > base:
        base = numero 
        posicao = numeros.index(numero)
        
print(f"O maior número da lista é {base}, ele está na posição {posicao}")

##Outra forma de resolver o mesmo problema

numeros = [1,5,10,46,5,101,3]
def numeroMaximo(args):
    maiorNumero = max(args)
    indece = args.index(maiorNumero)
    #####O primeiro parâmetro sempre vai ser o maior número e o segundo vai ser o indece
    return maiorNumero, indece

print(f"O maior número da lista é {numeroMaximo(numeros)[0]}, e ele está na posição {numeroMaximo(numeros)[1]}")