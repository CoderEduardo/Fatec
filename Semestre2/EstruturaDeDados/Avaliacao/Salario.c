#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])

{

    float salario, pontuacao, salario_final;

    for (int i = 0; i < 5; i++)
    {
        printf("\nFuncionário %i: \n", (i + 1));
        printf("Digite o valor do seu salário: ");
        scanf("%f", &salario);

        printf("Digite o valor da sua pontuação: ");
        scanf("%f", &pontuacao);

        if (pontuacao <= 99)
        {
            salario_final = salario + 25;
        }
        else if (pontuacao <= 499)
        {
            salario_final = salario + 100;
        }
        else if (pontuacao <= 999)
        {
            salario_final = salario + 300;
        }
        else
        {
            salario_final = salario + 500;
        }

        printf("Seu salário final é de: %.2f", salario_final);

    }

}
