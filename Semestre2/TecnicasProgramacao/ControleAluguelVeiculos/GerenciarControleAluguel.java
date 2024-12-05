import java.time.LocalDate;
import java.time.LocalDateTime;

public class GerenciarControleAluguel {
    public static void main(String[] args) throws InterruptedException {
        // Instanciar veículos
        Carro carro = new Carro("ABC1234", "Fiat", "Uno", 2020, "Branco", 4);
        Moto moto = new Moto("XYZ9876", "Honda", "CG", 2021, "Preto", 150);
        Caminhao caminhao = new Caminhao("DEF5678", "Volvo", "FH", 2019, "Vermelho", 10000);

        // Registrar aluguéis
        Aluguel aluguelCarro = new Aluguel(1, carro, LocalDate.now(), LocalDateTime.now());
        aluguelCarro.apresentarRegistroAluguel();
        Thread.sleep(1000);  // 1 segundo

        Aluguel aluguelMoto = new Aluguel(2, moto, LocalDate.now(), LocalDateTime.now());
        aluguelMoto.apresentarRegistroAluguel();
        Thread.sleep(1000);

        Aluguel aluguelCaminhao = new Aluguel(3, caminhao, LocalDate.now(), LocalDateTime.now());
        aluguelCaminhao.apresentarRegistroAluguel();

        // Registrar devoluções
        aluguelCarro.setHoraDevolucao(LocalDateTime.now().plusHours(2));
        aluguelCarro.apresentarRegistroAluguel();
        Thread.sleep(1000);

        aluguelMoto.setHoraDevolucao(LocalDateTime.now().plusHours(2));
        aluguelMoto.apresentarRegistroAluguel();
        Thread.sleep(1000);

        aluguelCaminhao.setHoraDevolucao(LocalDateTime.now().plusHours(3));
        aluguelCaminhao.apresentarRegistroAluguel();
    }
}
