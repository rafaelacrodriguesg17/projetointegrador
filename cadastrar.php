<?php

    include 'conexao.php';

    $nome2      = $_POST['nome'];
    $email3     = $_POST['email'];
    $senha      = $_POST['senha'];

    mysqli_query($link, "insert into cadastro (nome, email, senha) values ('$nome', '$email3', '$senha')");
    echo "Cadastrado com sucesso!";

    header("Location: login.html");

?>