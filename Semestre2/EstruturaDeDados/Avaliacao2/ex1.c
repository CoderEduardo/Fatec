#include <stdio.h>
#include <stdlib.h>
#include <string.h>

// Estrutura para armazenar informações do aluno
typedef struct Aluno {
    int ra;
    char nome[50];
    char email[50];
    char celular[15];
    struct Aluno* prox;
} Aluno;

// Função para criar um novo aluno
Aluno* criarAluno(int ra, char* nome, char* email, char* celular) {
    Aluno* novo = (Aluno*)malloc(sizeof(Aluno));
    if (novo == NULL) {
        printf("Erro ao alocar memória.\n");
        exit(1);
    }
    novo->ra = ra;
    strcpy(novo->nome, nome);
    strcpy(novo->email, email);
    strcpy(novo->celular, celular);
    novo->prox = NULL;
    return novo;
}

// Função para inserir um aluno no final da lista
void inserirAluno(Aluno** lista, int ra, char* nome, char* email, char* celular) {
    Aluno* novo = criarAluno(ra, nome, email, celular);
    if (*lista == NULL) {
        *lista = novo;
    } else {
        Aluno* atual = *lista;
        while (atual->prox != NULL) {
            atual = atual->prox;
        }
        atual->prox = novo;
    }
    printf("Aluno inserido com sucesso!\n");
}

// Função para remover um aluno em qualquer posição
void removerAluno(Aluno** lista, int ra) {
    if (*lista == NULL) {
        printf("A lista está vazia.\n");
        return;
    }

    Aluno* atual = *lista;
    Aluno* anterior = NULL;

    while (atual != NULL && atual->ra != ra) {
        anterior = atual;
        atual = atual->prox;
    }

    if (atual == NULL) {
        printf("Aluno com RA %d não encontrado.\n", ra);
        return;
    }

    if (anterior == NULL) {
        *lista = atual->prox;
    } else {
        anterior->prox = atual->prox;
    }

    free(atual);
    printf("Aluno removido com sucesso!\n");
}

// Função para buscar um aluno na lista
void buscarAluno(Aluno* lista, int ra) {
    Aluno* atual = lista;
    while (atual != NULL) {
        if (atual->ra == ra) {
            printf("Aluno encontrado:\n");
            printf("RA: %d\n", atual->ra);
            printf("Nome: %s\n", atual->nome);
            printf("Email: %s\n", atual->email);
            printf("Celular: %s\n", atual->celular);
            return;
        }
        atual = atual->prox;
    }
    printf("Aluno com RA %d não encontrado.\n", ra);
}

// Função para listar todos os alunos
void listarAlunos(Aluno* lista) {
    if (lista == NULL) {
        printf("A lista está vazia.\n");
        return;
    }
    Aluno* atual = lista;
    printf("Lista de Alunos:\n");
    while (atual != NULL) {
        printf("RA: %d, Nome: %s, Email: %s, Celular: %s\n",
               atual->ra, atual->nome, atual->email, atual->celular);
        atual = atual->prox;
    }
}

int main() {
    Aluno* lista = NULL;
    int opcao, ra;
    char nome[50], email[50], celular[15];

    do {
        printf("\nMenu:\n");
        printf("1. Inserir Aluno\n");
        printf("2. Remover Aluno\n");
        printf("3. Buscar Aluno\n");
        printf("4. Listar Alunos\n");
        printf("5. Sair\n");
        printf("Escolha uma opção: ");
        scanf("%d", &opcao);
        getchar(); // Limpar o buffer do teclado

        switch (opcao) {
            case 1:
                printf("RA: ");
                scanf("%d", &ra);
                getchar();
                printf("Nome: ");
                fgets(nome, sizeof(nome), stdin);
                nome[strcspn(nome, "\n")] = '\0';
                printf("Email: ");
                fgets(email, sizeof(email), stdin);
                email[strcspn(email, "\n")] = '\0';
                printf("Celular: ");
                fgets(celular, sizeof(celular), stdin);
                celular[strcspn(celular, "\n")] = '\0';
                inserirAluno(&lista, ra, nome, email, celular);
                break;
            case 2:
                printf("RA do aluno a ser removido: ");
                scanf("%d", &ra);
                removerAluno(&lista, ra);
                break;
            case 3:
                printf("RA do aluno a ser buscado: ");
                scanf("%d", &ra);
                buscarAluno(lista, ra);
                break;
            case 4:
                listarAlunos(lista);
                break;
            case 5:
                printf("Encerrando o programa.\n");
                break;
            default:
                printf("Opção inválida.\n");
        }
    } while (opcao != 5);

    // Liberar a memória alocada
    while (lista != NULL) {
        Aluno* temp = lista;
        lista = lista->prox;
        free(temp);
    }

    return 0;
}
