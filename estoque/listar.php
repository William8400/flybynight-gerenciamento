<?php
require_once "../src/estoque_crud.php";




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Estoque Loja e Produtos </title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

    <h1>Estoque lojas e Produtos</h1>
    <a href="inserir.php"> ➕ Novo Registro</a>
    <a href="../index.php"> 👈 Voltar</a>

    <table>
        <caption>Gerenciamento de Estoque</caption>
        <tr>
            <th>Loja</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
        <tr>
            <?php foreach ($Lojas as $Loja): ?>
                <td> <?= $Loja['id'] ?></td>
                <td><?= $Loja['nome'] ?></td>
                <td>
                    <!-- criando link dinâmico para editar -->
                    <a href="editar.php?id=<?=$Loja["id"]?>"> ⛏️ Editar</a>
                    <a class="excluir" href="excluir.php"> ❌ Excluir</a>
                </td>
        </tr>
    <?php endforeach; ?>
    </table>

    <script src="../js/confirmar-exclusao.js"></script>

</body>

</html>