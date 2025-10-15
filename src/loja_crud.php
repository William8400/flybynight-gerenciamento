<?php
require_once "../conecta.php";


function buscarLojas($conexao){
    
    $sql = "SELECT * FROM lojas ORDER BY nome";

    $consulta = $conexao->query($sql);

    return $consulta->fetchAll();
}

function inserirLoja($conexao, $nome){
    $sql = "INSERT INTO lojas (nome) VALUES(:nome)";

    $consulta = $conexao->prepare($sql);

    $consulta->bindValue(":nome", $nome);

    $consulta->execute();
}

function buscarLojasPorId($conexao, $id){
    $sql = "SELECT * FROM lojas WHERE id = :id";

    $consulta = $conexao->prepare($sql);
    $consulta->bindValue(':id', $id);
    $consulta->execute();

    return $consulta->fetch();
}

function atualizarLoja($conexao, $nome, $id){
    $sql = "UPDATE lojas SET nome = :nome  WHERE id = :id";

    $consulta = $conexao->prepare($sql);

    $consulta->bindValue(":nome", $nome);
    $consulta->bindValue(":id", $id);

    $consulta->execute();
}

function excluirLoja($conexao, $id){
    $sql = "DELETE FROM lojas WHERE id = :id";

    $consulta = $conexao->prepare($sql); 

    $consulta->bindValue(':id', $id);

    $consulta->execute();
}
?>