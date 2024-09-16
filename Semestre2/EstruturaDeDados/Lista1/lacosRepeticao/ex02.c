#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{

    float mediaSalario, maiorSalario, salario, totalSalario, mediaFilhos;
    int filhos, totalFilhos;

    maiorSalario = 0;

    //Lógica para percorrer 200 itens;
    for (int i = 0; i < 200; i++)
    {   
        printf("Digite seu salário: ");
        scanf("%f", &salario);
        printf("Digite a quantidade de filhos que você têm: ");
        scanf("%i", &filhos);
        totalSalario += salario;
        totalFilhos += filhos;
        if(salario > maiorSalario){
            maiorSalario = salario;
        }
    }

    mediaFilhos = totalFilhos / 200;
    mediaSalario = salario / 200;
    printf("Média salário: %f, Média Filhos %f, Maior salário: %f", mediaSalario, mediaFilhos, maiorSalario);
}
