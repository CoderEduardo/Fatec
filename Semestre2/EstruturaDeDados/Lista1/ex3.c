#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{

    char combustivel;
    float litros, resultado, alcool, gasolina;
    alcool = 3.39;
    gasolina = 5.39;
    printf("Digite o tipo de combustível álcool(A) ou gasolina(G)");
    scanf("%s", &combustivel);
    printf("Quantos litros foram usados? ");
    scanf("%f", &litros);

    if (combustivel == 'a' || 'A')
    {
        if (litros < 20)
        {
            resultado = (alcool - (alcool * 0.03)) * litros;
            printf("O valor a ser pago por %.2f litros de álcool é de %.2fR$", litros, resultado);
        }
        else
        {
            resultado = (alcool - (alcool * 0.05)) * litros;
            printf("O valor a ser pago por %.2f litros de álcool é de %.2fR$", litros, resultado);
        }
    }
    else if (combustivel == 'g' || 'G')
    {
        if (litros < 20)
        {
            resultado = (gasolina - (gasolina * 0.04)) * litros;
            printf("O valor a ser pago por %.2f litros de gasolina é de %.2fR$", litros, resultado);
        }
        else
        {
            resultado = (gasolina - (gasolina * 0.06)) * litros;
            printf("O valor a ser pago por %.2f litros de gasolina é de %.2fR$", litros, resultado);
        }
    }else{
        printf("Digite um valor valido");
    }
}
