<?php
    // conectando ao servidor
    $conexao = mysqli_connect("localhost","root","");

    // conectando ao BD criado
    $db = mysqli_select_db($conexao, "projeto");
    
    // Executando query e retornando valores da tabela "faleconosco"
    $query = mysqli_query($conexao, "SELECT * FROM faleconosco");

    // Listando valores retornados da tabela "faleconosco"
    while($tabela = mysqli_fetch_array($query)){
        
        echo $tabela['nome']. "<br>";
        echo $tabela['email']. "<br>" ;
        echo $tabela['telefone']. "<br>";
        echo $tabela['mensagem'];
    }
    
?>