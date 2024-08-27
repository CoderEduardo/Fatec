package Semestre2.TecnicasProgramacao.Aula16_08_2024.Projeto;

public class Main {
    
    public static void main(String[] args) {
        
        Computador computador = new Computador();
        computador.cor = "Vermelho";
        computador.marca = "HP";
        computador.modelo = "1234";
        computador.preco= 2.000;
        computador.serie = 4321;

        computador.imprimir();
        computador.calcularValor();
        computador.imprimir();

        //Outro computador

        Computador computador2 = new Computador();
        computador2.cor = "Rosa";
        computador2.marca = "IBM";
        computador2.modelo = "1234";
        computador2.preco= 2.000;
        computador2.serie = 4321;

        computador2.imprimir();
        computador2.calcularValor();
        computador2.imprimir();

        computador2.alterarValor(5000);
        computador2.imprimir();
        computador2.calcularValor();
        computador2.imprimir();
    }

}
