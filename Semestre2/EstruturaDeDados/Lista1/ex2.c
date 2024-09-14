#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{

    int a;
    int b;
    int c;
    int n;

    printf("Digite o valor de n: ");
    scanf("%i", &n);
    printf("Digite o valor de A: ");
    scanf("%i", &a);
    printf("Digite o valor de B: ");
    scanf("%i", &b);
    printf("Digite o valor de C: ");
    scanf("%i", &c);

    // crescente
    if (n == 1)
    {
        if (a > b && a > c && b > c)
        {
            printf(" %i, %i, %i", c, b, a);
        }
        else if (a > b && a > c && c > b)
        {
            printf(" %i, %i, %i", b, c, a);
        }
        else if (a > b && c > b && c > a)
        {
            printf(" %i, %i, %i", b, a, c);
        }
        else if (b > a && b > c && a > c)
        {
            printf(" %i, %i, %i", c, a, b);
        }
        else if (b > c && b > a && c > a)
        {
            printf(" %i, %i, %i", a, c, b);
        }
        else if (c > b && c > a && b > a)
        {
            printf(" %i, %i, %i", a, b, c);
        }
    }
    // decrescente
    else if (n == 2)
    {
        if (a > b && a > c && b > c)
        {
            printf(" %i, %i, %i", a, b, c);
        }
        else if (a > b && a > c && c > b)
        {
            printf(" %i, %i, %i", a, c, b);
        }
        else if (a > b && c > b && c > a)
        {
            printf(" %i, %i, %i", c, a, b);
        }
        else if (b > a && b > c && a > c)
        {
            printf(" %i, %i, %i", b, a, c);
        }
        else if (b > c && b > a && c > a)
        {
            printf(" %i, %i, %i", b, c, a);
        }
        else if (c > b && c > a && b > a)
        {
            printf(" %i, %i, %i", c, b, a);
        }
    }
    // Maior no meio
    else if (n == 3)
    {
        if (a > b && a > c)
        {
            printf(" %i, %i, %i", b, a, c);
        }
        else if (b > a && b > c)
        {
            printf(" %i, %i, %i", a, b, c);
        }
        else if (c > a && c > b)
        {
            printf(" %i, %i, %i", a, c, b);
        }
    }
}
