#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    
    float salario, salarioFinal;

    printf("Digite seu salário atual: ");
    scanf("%f", &salario);
    salarioFinal = salario * 1.50;
    printf("O seu salário com aumento será de %.2f ", salarioFinal);

}
