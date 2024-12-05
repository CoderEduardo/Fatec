#include <stdio.h>
#include <stdlib.h>
#include <string.h>

struct processo {
    int numero;
    char data[11]; // formato "dd/mm/yyyy"
    char nome[50];
    struct processo* prox;
};

struct processo* topo = NULL;

// Função para inserir um processo no topo da pilha
void push(int numero, char* data, char* nome) {
    struct processo* novo = (struct processo*)malloc(sizeof(struct processo));
    novo->numero = numero;
    strcpy(novo->data, data);
    strcpy(novo->nome, nome);
    novo->prox = topo;
    topo = novo;
}

// Função para remover o processo do topo da pilha
int pop() {
    if (topo == NULL) {
        printf("\nPilha vazia. Nao ha processos para remover.\n");
        return 0;
    } else {
        struct processo* aux = topo;
        printf("\nProcesso removido:\n");
        printf("Numero: %d\n", topo->numero);
        printf("Data: %s\n", topo->data);
        printf("Nome: %s\n", topo->nome);
        topo = topo->prox;
        free(aux);
        return 1;
    }
}

void listar() {
    if (topo == NULL) {
        printf("\nPilha vazia. Nao ha processos para listar.\n");
    } else {
        struct processo* aux = topo;
        printf("\nProcessos na pilha:\n");
        while (aux != NULL) {
            printf("-----------------------\n");
            printf("Numero: %d\n", aux->numero);
            printf("Data: %s\n", aux->data);
            printf("Nome: %s\n", aux->nome);
            aux = aux->prox;
        }
    }
}

int main() {
    int op, numero;
    char data[11], nome[50];

    while (1) {
        printf("\nPrograma para Manipulação de Pilha de Processos\n");
        printf("1 - Inserir Processo\n");
        printf("2 - Listar Processos\n");
        printf("3 - Remover Processo\n");
        printf("4 - Sair\n");
        printf("Escolha uma opcao: ");
        scanf("%d", &op);

        switch (op) {
            case 1:
                printf("\nDigite o numero do processo: ");
                scanf("%d", &numero);
                printf("Digite a data do processo (dd/mm/yyyy): ");
                scanf("%s", data);
                printf("Digite o nome do processo: ");
                scanf(" %s", nome);
                push(numero, data, nome);
                break;
            case 2:
                listar();
                break;
            case 3:
                pop();
                break;
            case 4:
                printf("\nSaindo...\n");
                exit(0);
            default:
                printf("\nOpção invalida. Tente novamente.\n");
        }
    }

    return 0;
}
 