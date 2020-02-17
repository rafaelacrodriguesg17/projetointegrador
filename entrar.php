<?php

    include 'conexao.php';

    $email2     = $_POST['email'];
    $senha      = $_POST['senha'];

    mysqli_query($link, "insert into entrarSite (email, senha) values ('$email2', '$senha')");
    echo "Entrou!";

    header("Location: index.html");

?>