#include<stdio.h> 
#include<stdlib.h>

int main(int argc, char const *argv[])
{
    int vetorA[5] = {1,2,3,4,5};
    int vetorB[5] = {9,7,6,5,4};
    int vetorC[5];

    for (int i = 0; i < 5; i++)
    {
        vetorC[i] = vetorA[i] + vetorB[i];
        printf("Posicao vetor C: %i, Valor: %i \n", (i + 1), vetorC[i]);
    }
    
}
