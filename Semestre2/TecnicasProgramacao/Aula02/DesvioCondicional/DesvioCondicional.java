package Semestre2.TecnicasProgramacao.Aula16_08_2024.DesvioCondicional;

public class DesvioCondicional {

    public static void main(String[] args) {

        int num1 = 60; // Declarando o valor de uma variável
        int op = 5;

        // Desvio condicional
        if (num1 > 50) {
            System.out.println("O número " + num1 + "  é maior que 50");
        } else {
            System.out.println("O número " + num1 + " não é maior que 50");
        }

        // Usando Switch case
        switch (op) {
            case 1:
                System.out.println("O valor é igual a " + op);
                break;
            case 2:
                System.out.println("O valor é igual a " + op);
                break;
            case 3:
                System.out.println("O valor é igual a " + op);
                break;
            case 4:
                System.out.println("O valor é igual a " + op);
                break;
            case 5:
                System.out.println("O valor é igual a " + op);
                break;
            default:
                break;
        }

    }

}
