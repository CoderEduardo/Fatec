#include <stdio.h>
#include <stdlib.h>
#include <string.h>

// Estrutura para representar um pedido
typedef struct Pedido {
    int numero;
    char nome[50];
    char data[15];
    struct Pedido* proximo;
} Pedido;

// Estrutura para a fila de pedidos
typedef struct Fila {
    Pedido* inicio;
    Pedido* fim;
} Fila;

// Função para inicializar a fila
void inicializarFila(Fila* fila) {
    fila->inicio = NULL;
    fila->fim = NULL;
}

// Função para inserir um pedido na fila
void inserirPedido(Fila* fila, int numero, const char* nome, const char* data) {
    Pedido* novoPedido = (Pedido*)malloc(sizeof(Pedido));
    if (novoPedido == NULL) {
        printf("Erro ao alocar memória para o novo pedido.\n");
        return;
    }

    novoPedido->numero = numero;
    strcpy(novoPedido->nome, nome);
    strcpy(novoPedido->data, data);
    novoPedido->proximo = NULL;

    if (fila->fim == NULL) {
        // Fila está vazia
        fila->inicio = novoPedido;
    } else {
        fila->fim->proximo = novoPedido;
    }
    fila->fim = novoPedido;

    printf("Pedido %d inserido com sucesso.\n", numero);
}

// Função para remover um pedido da fila
void removerPedido(Fila* fila) {
    if (fila->inicio == NULL) {
        printf("A fila está vazia. Nenhum pedido para remover.\n");
        return;
    }

    Pedido* pedidoRemovido = fila->inicio;
    fila->inicio = fila->inicio->proximo;

    if (fila->inicio == NULL) {
        // Se a fila ficou vazia
        fila->fim = NULL;
    }

    printf("Pedido %d removido com sucesso.\n", pedidoRemovido->numero);
    free(pedidoRemovido);
}

// Função para imprimir os pedidos da fila
void imprimirPedidos(Fila* fila) {
    if (fila->inicio == NULL) {
        printf("A fila está vazia.\n");
        return;
    }

    Pedido* atual = fila->inicio;
    printf("Pedidos na fila:\n");
    while (atual != NULL) {
        printf("Número: %d, Nome: %s, Data: %s\n", atual->numero, atual->nome, atual->data);
        atual = atual->proximo;
    }
}

int main() {
    Fila fila;
    inicializarFila(&fila);

    int escolha;
    do {
        printf("\nMenu:\n");
        printf("1. Inserir Pedido\n");
        printf("2. Remover Pedido\n");
        printf("3. Imprimir Pedidos\n");
        printf("4. Sair\n");
        printf("Escolha uma opção: ");
        scanf("%d", &escolha);

        switch (escolha) {
            case 1: {
                int numero;
                char nome[50];
                char data[15];

                printf("Digite o número do pedido: ");
                scanf("%d", &numero);
                getchar(); // Limpar o buffer do teclado
                printf("Digite o nome do pedido: ");
                fgets(nome, sizeof(nome), stdin);
                nome[strcspn(nome, "\n")] = '\0'; // Remover o '\n'
                printf("Digite a data do pedido: ");
                fgets(data, sizeof(data), stdin);
                data[strcspn(data, "\n")] = '\0'; // Remover o '\n'

                inserirPedido(&fila, numero, nome, data);
                break;
            }
            case 2:
                removerPedido(&fila);
                break;
            case 3:
                imprimirPedidos(&fila);
                break;
            case 4:
                printf("Saindo...\n");
                break;
            default:
                printf("Opção inválida. Tente novamente.\n");
        }
    } while (escolha != 4);

    return 0;
}


