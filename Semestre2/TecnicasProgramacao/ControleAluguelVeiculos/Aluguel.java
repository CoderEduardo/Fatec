import java.time.LocalDate;
import java.time.LocalDateTime;

public class Aluguel {
    private int idAluguel;
    private Veiculo veiculo;
    private LocalDate dataAluguel;
    private LocalDateTime horaAluguel;
    private LocalDateTime horaDevolucao;

    public Aluguel(int idAluguel, Veiculo veiculo, LocalDate dataAluguel, LocalDateTime horaAluguel) {
        this.idAluguel = idAluguel;
        this.veiculo = veiculo;
        this.dataAluguel = dataAluguel;
        this.horaAluguel = horaAluguel;
    }

    public void setHoraDevolucao(LocalDateTime horaDevolucao) {
        this.horaDevolucao = horaDevolucao;
    }

    public void apresentarRegistroAluguel() {
        System.out.println("Veículo alugado: " + veiculo.getClass().getSimpleName());
        System.out.println("Placa: " + veiculo.getPlaca());
        System.out.println("Marca: " + veiculo.getMarca());
        System.out.println("Modelo: " + veiculo.getModelo());
        System.out.println("Ano: " + veiculo.getAno());
        System.out.println("Data de Aluguel: " + dataAluguel);
        System.out.println("Hora de Retirada: " + horaAluguel);
        if (horaDevolucao != null) {
            System.out.println("Hora de Devolução: " + horaDevolucao);
        }
        System.out.println("---------------------------------");
    }
}
