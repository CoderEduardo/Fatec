package Semestre2.TecnicasProgramacao.Aula16_08_2024.Exemplo3;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        Scanner leitor = new Scanner(System.in);
        double volume, raio;

        //recebendo o valor do raio
        System.out.println("Digite o valor do raio: ");
        raio = leitor.nextDouble();

        volume = 4/3.0 * Math.PI * Math.pow(raio, 3.0);
        System.out.println("Volume da esfera: " + volume);
        leitor.close();

    }

}
