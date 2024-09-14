#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{

    int horas;
    float salarioHora, salarioTotal, resto;

    printf("Digite o número de horas trabalhadas nesse mês: ");
    scanf("%i", &horas);
    printf("Digite o seu salário por horas trabalhadas: ");
    scanf("%f", &salarioHora);

    if (horas <= 40)
    {
        salarioTotal = horas * salarioHora;
    }
    else
    {
        resto = horas - 40;
        salarioTotal = (((horas - resto) * horas) + (resto * (salarioHora * 1.50))) ;
    }

    printf("Seu salário total é de %.2f, com %i horas trabalhadas. ", salarioTotal, horas);
}
