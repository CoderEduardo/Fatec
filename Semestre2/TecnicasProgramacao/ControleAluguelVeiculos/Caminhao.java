public class Caminhao extends Veiculo {
    private int capacidadeCarga;

    public Caminhao(String placa, String marca, String modelo, int ano, String cor, int capacidadeCarga) {
        super(placa, marca, modelo, ano, cor);
        this.capacidadeCarga = capacidadeCarga;
    }

    public int getCapacidadeCarga() {
        return capacidadeCarga;
    }

    public void setCapacidadeCarga(int capacidadeCarga) {
        this.capacidadeCarga = capacidadeCarga;
    }
}