<?php
require_once '../conecta.php';

function buscarlojas_produtos($conexao){
    $sql = "SELECT 
            lojas_id, lojas.nome AS nome_loja,
            produto_id, produtos.nome AS nome_produto, 
            estoque FROM lojas_produtos JOIN lojas ON lojas.id = produtos.fornecedor_id
             ";
}


?>