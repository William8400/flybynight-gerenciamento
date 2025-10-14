<?php

// src/produto_crud.php

require_once '../conecta.php';

function buscarProdutos($conexao)
{
    $sql = "SELECT
            produtos.id, produtos.nome AS nome_produto,
            produtos.preco, produtos.quantidade,
            fornecedores.nome AS nome_fornecedor
            FROM produtos JOIN fornecedores 
            ON fornecedores.id = produtos.fornecedor_id
                -- tabela -- PK  --tabela       -- FK
            ORDER BY produtos.nome
            ";

    $consulta = $conexao->query($sql);
    return $consulta->fetchAll();
}

function inserirProduto($conexao, $nome, $descricao, $preco, $quantidade, $fornecedor_id)
{
    
        $sql = "INSERT INTO produtos(nome, descricao, preco, quantidade, fornecedor_id)
        VALUES (:nome, :descricao, :preco, :quantidade, :fornecedor)";

        $consulta = $conexao->prepare($sql);

        $consulta->bindValue(":nome", $nome);
        $consulta->bindValue(":descricao", $descricao);
        $consulta->bindValue(":preco", $preco);
        $consulta->bindValue(":quantidade", $quantidade);
        $consulta->bindValue(":fornecedor", $fornecedor_id);

        $consulta->execute();
    
}


function buscarProdutoPorId($conexao, $id ){
    $sql = "SELECT * FROM produtos WHERE id = :id";
    // sempre que tiver parâmetros a mais se usa prepare
    $consulta = $conexao->prepare($sql);

    $consulta->bindValue(":id", $id);
    $consulta->execute();

    return $consulta->fetch();  // fetch pega somente uma coisa 

}

function atualizarProduto($conexao, $id, $nome, $descricao, $preco, $quantidade, $fornecedor_id ){
    $sql = "UPDATE produtos SET 
                   nome = :nome,
                   descricao = :descricao,
                   preco = :preco,
                   quantidade = :quantidade,
                   fornecedor_id = :fornecedor_id WHERE id = :id "; 
                   
    $consulta = $conexao->prepare($sql);
    $consulta->bindValue(":nome", $nome);
    $consulta->bindValue(":descricao", $descricao);
    $consulta->bindValue(":preco", $preco);
    $consulta->bindValue(":quantidade", $quantidade);
    $consulta->bindValue(":fornecedor_id", $fornecedor_id);
    $consulta->bindValue("id" , $id);

    $consulta->execute();
}