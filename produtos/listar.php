<?php

require_once "../src/produto_crud.php";

$produtos = buscarProdutos($conexao);



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Listas Produtos </title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

    <h1>Produtos</h1>
    <a href="inserir.php"> ➕ Novo produto</a>
    <a href="../index.php"> 👈 Voltar</a>

    <table>
        <caption>Relação de Produtos</caption>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Fornecedor</th>
            <th>Ações</th>
        </tr>
        <tr>
            <?php foreach ($produtos as $produto): ?>
                <td> <?= $produto['nome_produto'] ?></td>
                <td><?= $produto['preco'] ?></td>
                <td><?= $produto['quantidade'] ?></td>
                <td><?= $produto['nome_fornecedor'] ?></td>
                <td>
                    <!-- criando link dinâmico para editar -->
                    <a href="editar.php?id=<?=$produto["id"]?>"> ⛏️ Editar</a>
                    <a class="excluir" href="excluir.php"> ❌ Excluir</a>
                </td>
        </tr>
    <?php endforeach; ?>
    </table>

    <script src="../js/confirmar-exclusao.js"></script>

</body>

</html>