int main(int argc, char const *argv[])
{
    int num;
    printf("Digite um número: ");
    scanf("%i", &num);
    if (num % 2 == 0)
    {
        printf("O número é par");
    }
    else
    {
        printf("Esse número é ímpar");
    }
}
