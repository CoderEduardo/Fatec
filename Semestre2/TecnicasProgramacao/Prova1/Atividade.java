import java.time.LocalDate;

public class Atividade {
    private String nome;
    private String descricao;
    private LocalDate dataRealizacao;

    public Atividade(String nome, String descricao, LocalDate dataRealizacao) {
        this.nome = nome;
        this.descricao = descricao;
        this.dataRealizacao = dataRealizacao;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }

    public LocalDate getDataRealizacao() {
        return dataRealizacao;
    }

    public void setDataRealizacao(LocalDate dataRealizacao) {
        this.dataRealizacao = dataRealizacao;
    }
}
