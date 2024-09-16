#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{

    float volume, largura, comprimento, altura;

    printf("Digite o valor da largura: ");
    scanf("%f", &largura);
    printf("Digite o valor da altura: ");
    scanf("%f", &altura);
    printf("Digite o valor do comprimento: ");
    scanf("%f", &comprimento);
    
    volume = largura * altura * comprimento;

    printf("O volume do retângulo é de %.2f", volume);

}
