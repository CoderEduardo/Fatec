#include<stdio.h> 
#include<stdlib.h>

int main(int argc, char const *argv[])
{
    float num1, num2, soma, sub, mult, div;
    printf("Digite o primeiro número: ");
    scanf("%f", &num1);
    printf("Digite o segundo número: ");
    scanf("%f",  &num2);
    soma = num1 + num2;
    sub = num1 - num2;
    mult = num1 * num2;
    div = num1 / num2;
    printf("A soma dos números é: %.2f \n", soma);
    printf("A subtração dos números é: %.2f  \n", sub);
    printf("A multiplicação dos números é: %.2f  \n", mult);
    printf("A divisão dos números é: %.2f  \n", div);
}
