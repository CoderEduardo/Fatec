#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{

    float celsius, fahrenheit;
    printf("Digite o valor em Celsius: ");
    scanf("%f", &celsius);
    fahrenheit = (celsius * 1.8) + 32;
    printf("O valor de %f em fahrenheit é de %.2f", celsius ,fahrenheit);
}
