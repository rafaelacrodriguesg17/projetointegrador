<?php 

    include 'conexao.php';

    $nome           = $_POST['nome'];
    $email          = $_POST['email'];
    $endereco       =$_POST['endereco'];
    $cidade         =$_POST['cidade'];
    $estado         =$_POST['estado'];
    $celular        =$_POST['celular'];


    mysqli_query($link, "insert into clientes (nome, email, endereco, cidade, estado, celular) values ('$nome', ' $email', '$endereco', '$cidade', '$endereco', '$celular')");
    echo "Inserido com sucesso!";

    header("Location: contato.html");

?>