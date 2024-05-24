function iniciar() {
    let recebe = Number(alert("Digite um número: "))
    if (recebe > 5) {
        document.write("O valor é maior que 5")
    } else {
        document.write("O valor é menor que 5")
    }
}

iniciar()