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

    $consulta->bindeValue(":nome", $nome);

    $consulta->execute();
}
?>