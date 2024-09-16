#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{

    float saldo, debito, credito, saldoAtual;
    int numeroConta;

    printf("Digite seu número da conta: ");
    scanf("%i", &numeroConta);
    printf("Digite seu saldo atual: ");
    scanf("%f", &saldoAtual);
    printf("Digite seu débito: ");
    scanf("%f", &debito);
    printf("Digite seu credito: ");
    scanf("%f", &credito);

    saldo = (saldoAtual + credito) - debito;

    if (saldo > 0)
    {
        printf("O seu saldo é positivo");
    }
    else
    {
        printf("O seu saldo é negativo");
    }
}
