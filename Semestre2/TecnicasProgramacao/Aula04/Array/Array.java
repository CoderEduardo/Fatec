package Semestre2.TecnicasProgramacao.Aula04.Array;

public class Array {

    public static void main(String[] args) {

        String vetorNome[] = new String[5];
        // Inicia com valores
        int idades[] = { 25, 39, 45, 58 };
        vetorNome[3] = "Maria";
        System.out.println(vetorNome[3]);

        // Percorrendo um array com um for
        for (int i = 0; i < idades.length; i++) {
            System.out.printf("Idade do elemento: %d = %d \n", i+1, idades[i]);
        }

    }

}
