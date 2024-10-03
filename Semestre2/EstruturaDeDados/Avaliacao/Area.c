#include<stdio.h>
#include<stdlib.h>

int main(int argc, char const *argv[])
{
    
    float area, largura, comprimento;

    printf("Digite o valor da largura: ");
    scanf("%f", &largura);

    printf("Digite o valor do comprimento: ");
    scanf("%f", &comprimento);

    area = largura * comprimento;

    printf("O valor da área é de: %.2f", area);

}
