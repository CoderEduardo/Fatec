package Semestre2.TecnicasProgramacao.Aula16_08_2024.Produto;

public class Main {
    
    public static void main(String[] args) {

        //Para criar um novo objeto precisamos instanciar ele.
        Produto coca = new Produto();

        coca.codigo = 1;
        coca.descricao = "Coca Cola";
        coca.valor = 4.89;

        //entrada de 100 cocas
        coca.entrada(100);
        //saida de 10 cocas
        coca.saida(10);

        System.out.println("Saldo");
        System.out.println(coca.quantidade);        

    }

}
