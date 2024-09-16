#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{

    int numero;

    printf("Digite o número da tabuada que você quer ver: ");
    scanf("%i", &numero);

    for (int i = 0; i < 11; i++)
    {
        printf("%i x %i = %i \n", numero, i, numero * i);
    }
}
