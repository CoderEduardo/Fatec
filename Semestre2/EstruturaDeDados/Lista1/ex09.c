#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{

    int idade, ano, mes, semana, dia;

    printf("Digite em qual ano você nasceu: ");
    scanf("%i", &ano);
    idade = 2024 - ano;
    mes = idade * 12;
    semana = mes * 4;
    dia = semana * 7;

    printf("Você tem %i anos, e possui %i meses, %i semanas e %i dias", idade, mes, semana, dia);
}
