<?php
    include_once 'conecta.php';

    $resultado = $conexao - prepare("INSERT INTO produtos (nome,preco,estoque)
                                      VALUES (:n, :p, :e)");
    
    $nome = "Caneta";
    $preco = 1.52;
    $estoque = 100;

    $resultado - bindParam(":n",$nome);
    $resultado - bindParam(":p",$preco);
    $resultado - bindParam(":e",$estoque);

    $resultado - execute();