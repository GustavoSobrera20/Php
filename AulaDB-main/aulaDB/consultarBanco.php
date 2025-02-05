<?php

    $conn = new PDO('mysql:host=localhost;dbname=db_cinebox', 'root', '');

    $query = 'SELECT * FROM  tb_filmes';

    $resultado = $conn->query($query)->fetchAll();

    //echo '<pre>';
    //var_dump($resultado);

    foreach ($resultado as $filme) {

        echo '<p style="background-color:tomato">' . $filme['nome'] . '</p>';
        echo '<br>';

    }
?>