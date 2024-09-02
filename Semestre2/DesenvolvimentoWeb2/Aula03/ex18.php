<?php 

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];

    if($sexo == "F"){
        echo("<p>$nome, você não pode se alistar</p>");
    }else if($sexo == "M" && $idade >= 18){
        echo("<p>$nome, você já pode realizar seu alistamento militar</p>");
    }else{
        echo("<p>$nome, você só pode se alistar quando tiver mais de 18 anos</p>");
    }

?>