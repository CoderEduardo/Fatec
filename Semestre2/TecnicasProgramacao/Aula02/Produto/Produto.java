package Semestre2.TecnicasProgramacao.Aula16_08_2024.Produto;

public class Produto {
    
    //definindo os atributos
    public int codigo;
    public String descricao;
    public double valor;
    public int quantidade;

    //definindo os métodos
    public void entrada(int qtd){
        quantidade += qtd;
    }

    public void saida(int qtd){
        quantidade -= qtd;
    }

}
