package Semestre2.TecnicasProgramacao.Aula16_08_2024.Projeto;

public class Computador {
    
    public String marca;
    public String cor;
    public String modelo;
    public long serie;
    public double preco;

    public void imprimir(){

        System.out.println("Marca: " + marca);
        System.out.println("Cor: " + cor);
        System.out.println("Modelo: " + modelo);
        System.out.println("Série: " + serie);
        System.out.println("Preço: " + preco);

    }

    public void calcularValor(){

        if(marca == "HP"){
            preco += preco * 0.30;
        }else if(marca == "IBM"){
            preco += preco * 0.50;
        }

    }

    public void alterarValor(double valor){

        if(valor > 0){
            preco = valor;
        }else{
            preco = 1;
        }

    }

}
