<?php
    //conexão com o banco de dados
    $usuario = 'root';
    $senha = '';
    $database = 'wheelchair';
    $host = 'localhost';
    

    $mysqli = new mysqli($host,$usuario,$senha,$database);
    //if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }
