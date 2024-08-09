#Crie uma progreção aritimética, perguntando o primeiro termo, quantidade de termos e a razão
termo = int(input("Digite o primeiro termo: "))
termos = int(input("Digite a quantidade de termos: "))
razao = int(input("Digite a razão: "))
ant = termo
pos = termo + razao
for i in range(0,termos): 
    print(f"{ant} ... {pos}")
    ant = pos 
    pos = pos + razao
