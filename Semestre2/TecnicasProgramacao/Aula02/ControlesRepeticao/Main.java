package Semestre2.TecnicasProgramacao.Aula02.ControlesRepeticao;

public class Main {

    public static void main(String[] args) {

        // Estrura do for
        for (int i = 0; i < 10; i++) {
            System.out.println(i);
        }

        // Estrura do while
        boolean isActive = true;
        while (isActive) {
            System.out.println("Ativado");
            isActive = false;
        }

        //Estrutura DO_WHILE
        do {
            System.out.println("Ativado");
            isActive = false;
        } while (isActive);

        //A diferença do while para o do_while, é que o while ele verifica primeiro e depois faz, no do_while ele faz primeiro depois verifica 

        for (int i = 0; i < 10; i++) {
            
            if (i==5){
                break;  //O break interrompe um looping
            }
            System.out.println(i);
        }


        //O continue para a interação com o condição, mas continua o looping
        for (int i = 0; i < 10; i++) {
            
            if(i % 2 == 0){
                continue;
            }
            System.out.println(i);

        }

    }

}
