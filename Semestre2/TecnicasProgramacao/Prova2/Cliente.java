import java.util.Objects;

public class Cliente {
    private int idCliente;
    private String nomeCliente;

    // Construtor
    public Cliente(int idCliente, String nomeCliente) {
        this.idCliente = idCliente;
        this.nomeCliente = nomeCliente;
    }

    // Getters e Setters
    public int getIdCliente() {
        return idCliente;
    }

    public void setIdCliente(int idCliente) {
        this.idCliente = idCliente;
    }

    public String getNomeCliente() {
        return nomeCliente;
    }

    public void setNome(String nomeCliente) {
        if (nomeCliente == null || nomeCliente.length() < 3) {
            throw new IllegalArgumentException("Erro: campo nome do cliente deve ser definido com no mínimo 3 letras.");
        }
        this.nomeCliente = nomeCliente;
    }
    
    // Sobrescrita dos métodos equals e hashCode
    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Cliente cliente = (Cliente) o;
        return idCliente == cliente.idCliente;
    }

    @Override
    public int hashCode() {
        return Objects.hash(idCliente);
    }

    @Override
    public String toString() {
        return "ID: " + idCliente + ", Nome: " + nomeCliente;
    }
}
