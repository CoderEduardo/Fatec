#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{

    float nota1, nota2, nota3, mediaFinal;
    printf("Digite o valor da primeira nota: ");
    scanf("%f", &nota1);
    printf("Digite o valor da segunda nota: ");
    scanf("%f", &nota2);
    printf("Digite o valor da terceira nota: ");
    scanf("%f", &nota3);
    mediaFinal = (nota1 * 2 + nota2 * 3 + nota3 * 5) / 10;
    printf("A sua média final foi de %.2f", mediaFinal);
}
