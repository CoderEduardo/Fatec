#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    
    int primeiro, segundo, reserva;
    primeiro = 1;
    segundo = 1;

    for (int i = 1; i < 20; i++)
    {
        printf("%i, ", primeiro);
        reserva = segundo + primeiro;
        primeiro = segundo;
        segundo = reserva;
    }
    

}
