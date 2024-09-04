#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{

    float altura, pesoIdeal;
    char sexo;

    printf("Digite a sua altura: ");
    scanf("%f", &altura);
    printf("Digite o seu sexo, (M/F): ");
    scanf("%s", &sexo);

    if (sexo == 'M' || sexo == 'm')
    {
        pesoIdeal = (72.27 * altura) - 58;
        printf("O seu peso ideal é de: %.2f", pesoIdeal);
    }
    else if (sexo == 'F' || sexo == 'f')
    {
        pesoIdeal = (62.1 * altura) - 44.7;
        printf("O seu peso ideal é de: %.2f", pesoIdeal);
    }
}
