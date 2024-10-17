import java.util.ArrayList;
import java.util.List;

public class Aluno {
    private String nome;
    private String matricula;
    private String curso;
    private List<Atividade> atividades; 

    public Aluno(String nome, String matricula, String curso) {
        this.nome = nome;
        this.matricula = matricula;
        this.curso = curso;
        this.atividades = new ArrayList<>();
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getMatricula() {
        return matricula;
    }

    public void setMatricula(String matricula) {
        this.matricula = matricula;
    }

    public String getCurso() {
        return curso;
    }

    public void setCurso(String curso) {
        this.curso = curso;
    }

    public void adicionarAtividade(Atividade atividade) {
        atividades.add(atividade);
    }

    public void listarAtividades() {
        System.out.println("Atividades Realizadas:");
        for (int i = 0; i < atividades.size(); i++) {
            Atividade atividade = atividades.get(i);
            System.out.println((i + 1) + ". " + atividade.getNome() + " - " + atividade.getDataRealizacao());
        }
    }

    public int contarAtividades() {
        return atividades.size();
    }
}
