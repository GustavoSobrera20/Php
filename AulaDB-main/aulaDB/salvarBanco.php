<?php

    $conn = new PDO('mysql:host=localhost;dbname=db_cinebox', 'root', '');

    $dados = $_GET;

    var_dump($dados);

    $query = 'INSERT INTO tb_filmes (nome, classificacao_indicativa, valor_ingresso)
    VALUE (:nome, :classificacao_indicativa, :valor_ingresso)';

    $preparando = $conn->prepare($query);

    $preparando->execute([
        ':nome' => $dados['nome'], 
        ':classificacao_indicativa' => $dados['indicativa'],
        ':valor_ingresso' => $dados['valor']
    ]);
    