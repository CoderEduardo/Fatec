int main(int argc, char const *argv[])
{
    int idade;
    printf("Digite a sua idade: ");
    scanf("%i", &idade);

    if (idade >= 18)
    {
        printf("Apto a tirar habilitação");
    }
    else
    {
        printf("Você não pode tirar a habilitação");
    }
}
