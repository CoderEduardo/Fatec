import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

public class GerenciarAlunos {

    public static void main(String[] args) {
    
        List<Aluno> alunos = new ArrayList<>();

        
        Aluno aluno1 = new Aluno("Thamires", "2021001", "Engenharia da Computação");
        Aluno aluno2 = new Aluno("Pablo Aragão", "2021002", "Engenharia de Software");
        Aluno aluno3 = new Aluno("Luis Eduardo", "2021003", "Ciência da Computação");

        alunos.add(aluno1);
        alunos.add(aluno2);
        alunos.add(aluno3);

        Atividade atividade1 = new Atividade("Prova de Matemática", "Avaliação da disciplina de Matemática", LocalDate.of(2024, 5, 10));
        Atividade atividade2 = new Atividade("Trabalho de Algoritmos", "Trabalho final de Algoritmos", LocalDate.of(2024, 6, 15));
        Atividade atividade3 = new Atividade("Apresentação de Projeto", "Apresentação final de projeto", LocalDate.of(2024, 7, 20));
        Atividade atividade4 = new Atividade("Trabalho de Redes", "Trabalho prático de Redes de Computadores", LocalDate.of(2024, 5, 10));
        Atividade atividade5 = new Atividade("Prova de Programação", "Avaliação de Programação", LocalDate.of(2024, 6, 1));

        aluno1.adicionarAtividade(atividade1);
        aluno1.adicionarAtividade(atividade2);

        aluno2.adicionarAtividade(atividade3);

        aluno3.adicionarAtividade(atividade4);
        aluno3.adicionarAtividade(atividade5);

        for (Aluno aluno : alunos) {
            System.out.println("Aluno: " + aluno.getNome());
            System.out.println("Matrícula: " + aluno.getMatricula());
            System.out.println("Curso: " + aluno.getCurso());
            aluno.listarAtividades();
            System.out.println("Total de atividades: " + aluno.contarAtividades());
            System.out.println();
        }
    }
}
