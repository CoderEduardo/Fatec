package Semestre2.TecnicasProgramacao.Aula16_08_2024.Acampamento;

public class Acampamento {

    public String nome;
    public String equipe;
    public int idade;

    public void imprimir() {
        System.out.println("Nome: " + nome + ", equipe: " + equipe + ", idade: " + idade);
    }

    public void separarGrupo() {
        if (idade > 6 && idade < 10) {
            equipe = "A";
        } else if (idade > 10 && idade <= 20) {
            equipe = "B";
        } else if (idade > 21) {
            equipe = "C";
        }
    }

}
