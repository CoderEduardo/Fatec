public class Moto extends Veiculo {
    private int cilindrada;

    public Moto(String placa, String marca, String modelo, int ano, String cor, int cilindrada) {
        super(placa, marca, modelo, ano, cor);
        this.cilindrada = cilindrada;
    }

    public int getCilindrada() {
        return cilindrada;
    }

    public void setCilindrada(int cilindrada) {
        this.cilindrada = cilindrada;
    }
}
