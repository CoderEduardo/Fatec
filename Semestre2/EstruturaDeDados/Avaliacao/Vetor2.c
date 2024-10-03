#include<stdio.h>
#include<stdlib.h>

int main(int argc, char const *argv[])
{
    
    int elementos[10],  soma = 0, maior = 0, menor=1000000;
    float media;

    for (int i = 0; i < 10; i++)
    {
        printf("Digite o valor de um elemento: ");
        scanf("%i", &elementos[i]);
    }

    for (int i = 0; i < 10; i++)
    {
        soma += elementos[i];
        
        if(elementos[i] > maior){
            maior = elementos[i];
        }

        if(elementos[i]< menor){
            menor = elementos[i];
        }

    }

    media = soma / 10;
    printf("Média dos elementos: %.2f. \n Maior elemento: %i. \n Menor dos elementos: %i", media, maior, menor);
    
    

}
