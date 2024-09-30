package Semestre2.TecnicasProgramacao.Aula04.Array;

import java.util.Scanner;

public class ExemploVetor {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int[] var1 = new int[10];
        System.out.println("Informe 10 valores: ");
        for (int i = 0; i < var1.length; i++) {
            System.out.println("Elemento " + (i+1) + " : ");
            var1[i] = Integer.parseInt(sc.nextLine());
        }

        /*for (int i = 0; i < var1.length; i++) {
            System.out.println("Elemento: " + (i+1) + " Valor: " + var1[i]);
        }*/

        int soma = 0;
        for (int elemento: var1) {
            soma += elemento;
        }

        double media = soma / (double) var1.length;
        System.out.println("Média: " + media);
    }

}
