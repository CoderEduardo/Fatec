package Semestre2.TecnicasProgramacao.Aula04.Associacao_de_classes;
import java.util.ArrayList;
import java.util.Date;

public class Pessoa {
    
    private String nome;
    private String endereco;
    private String telefone;
    private Date dataNascimento;

    //Relaciona com a classe carro, relacionamento 1:1, uma pessoa só tem um carro
    //private Carro carro;

    //Relacionamento 1:n, uma pessoa pode ter muitos carros
    private List <Carro> carros = new ArrayList<Carro>();

}
