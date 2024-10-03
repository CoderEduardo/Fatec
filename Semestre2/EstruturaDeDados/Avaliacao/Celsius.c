#include <stdio.h>
#include <stdlib.h>

float celsius(float f)
{
    float c;
    return c = (f - 32) / 1.8;
    //printf("Em Celsius: %.2f", c);
}

int main(int argc, char const *argv[])
{

    float f, c;
    printf("Digite o valor em Fahrenheit: ");
    scanf("%f", &f);
    c = celsius(f);

    printf("Em Celsius: %.2f", c);
}
