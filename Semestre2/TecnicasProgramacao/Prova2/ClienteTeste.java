import java.util.ArrayList;
import java.util.Scanner;

public class ClienteTeste {
    public static void main(String[] args) {
        ArrayList<Cliente> listaClientes = new ArrayList<>();
        Scanner scanner = new Scanner(System.in);

        //Inclusão de dois clientes usando estrutura de repetição
        for (int i = 0; i < 2; i++) {
            System.out.println("Digite o ID do cliente:");
            int id = scanner.nextInt();
            scanner.nextLine(); // Consumir o \n
            System.out.println("Digite o nome do cliente:");
            String nome = scanner.nextLine();

            Cliente cliente = new Cliente(id, nome);
            listaClientes.add(cliente);
        }

        //Buscar cliente cujo ID seja igual a 1
        System.out.println("\nBuscando cliente com ID = 1...");
        Cliente clienteBuscado = new Cliente(1, ""); // ID usado como base para comparação
        if (listaClientes.contains(clienteBuscado)) {
            System.out.println("Cliente encontrado: " + listaClientes.get(listaClientes.indexOf(clienteBuscado)));
        } else {
            System.out.println("Cliente com ID = 1 não encontrado.");
        }

        //Remover cliente na primeira posição da lista
        System.out.println("\nRemovendo cliente na primeira posição...");
        if (!listaClientes.isEmpty()) {
            Cliente clienteRemovido = listaClientes.remove(0);
            System.out.println("Cliente removido: " + clienteRemovido);
        }

        //Imprimir quantidade de elementos constantes na lista
        System.out.println("\nQuantidade de clientes na lista: " + listaClientes.size());

        //Imprimir ID e nome de todos os clientes
        System.out.println("\nClientes restantes na lista:");
        for (Cliente cliente : listaClientes) {
            System.out.println(cliente);
        }

        scanner.close();
    }
}

