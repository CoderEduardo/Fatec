package Semestre2.TecnicasProgramacao.Aula16_08_2024.Scanner;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        
        Scanner leitor = new Scanner(System.in); //Criando um objeto scanner

        int x, y; //declarando variáveis

        System.out.println("Digite o valor de x: ");
        x = leitor.nextInt(); 

        System.out.println("Digite o valor de y: ");
        y = leitor.nextInt();

        int soma = x + y;

        System.out.println("Soma: " + soma);

        leitor.close(); // fecha o leitor para liberar recursos

    }

}
