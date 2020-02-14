<?php

    $servidor = '127.0.0.1:3306' ;
    $usuario = 'root' ;
    $senha = '' ;
    $banco = 'projetointegrador' ;


    $link = mysqli_connect($servidor , $usuario , $senha , $banco);

    if (!$link){

        echo "Erro ao conectar!" ; exit ();
    }else{
        echo "Conectado com sucesso!";
    }

?> 