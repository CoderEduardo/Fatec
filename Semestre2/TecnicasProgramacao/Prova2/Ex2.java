abstract class Pessoa {
    private String nome;
    public Pessoa(String nome) {
        this.nome = nome;
    }
    public String getNome() {
        return nome;
    }
    public abstract void mostrarDados();
}

class Aluno extends Pessoa {
    private String curso;
    public Aluno(String nome, String curso) {
        super(nome);
        this.curso = curso;
    }
    @Override
    public void mostrarDados() {
        System.out.println("Nome: " + getNome() + ", Curso: " + curso);
    }
}

public class Main {
    public static void main(String[] args) {
        Aluno aluno = new Aluno("Luis", "Desenvolvimento de software multiplataforma");
        aluno.mostrarDados();
    }
}
