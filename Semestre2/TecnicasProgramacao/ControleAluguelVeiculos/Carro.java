public class Carro extends Veiculo {
    private int numeroPortas;

    public Carro(String placa, String marca, String modelo, int ano, String cor, int numeroPortas) {
        super(placa, marca, modelo, ano, cor);
        this.numeroPortas = numeroPortas;
    }

    // Getters e Setters
    public int getNumeroPortas() {
        return numeroPortas;
    }

    public void setNumeroPortas(int numeroPortas) {
        this.numeroPortas = numeroPortas;
    }
}