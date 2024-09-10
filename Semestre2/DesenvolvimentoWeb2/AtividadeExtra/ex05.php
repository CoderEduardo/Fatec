<?php

    //Pegando uma palavra
    $palavra = $_POST['palavra'];

    //Tirando os espaços para verificar palíndromos de mais de uma palavra
    $palavra_sem_espacos =  str_replace(' ', '', $palavra); 

    //Transformando em um array
    $lista = str_split($palavra_sem_espacos);

    //Ivertendo esse array
    $listaIvertida = array_reverse($lista);

    //Convertendo o array invertido em uma string
    $palavraInvertida = implode("",$listaIvertida);

    echo("<h1>Verificador de Palíndrimo</h1>");

    if($palavra_sem_espacos == $palavraInvertida){
        echo("<p>A palavra $palavra é um palíndrimo</p>");
    }else{
        echo("<p>A palavra $palavra não é palíndrimo</p>");
    }
?>