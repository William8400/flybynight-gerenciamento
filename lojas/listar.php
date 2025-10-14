<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lojas </title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

    <h1>Lojas</h1>
    <a href="inserir.php"> + Nova Loja</a>
    <a href="../index.php"> 👈 Voltar</a>

    <table>
        <caption>Relação de Lojas</caption>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <tr>
            <?php foreach ($Lojas as $Loja): ?>
                <td> <?= $Loja['id'] ?></td>
                <td> <?= $Loja['nome'] ?></td>
                <td>
                    <!-- criando link dinâmico para editar -->
                    <a href="editar.php?id=<?=$Loja["id"]?>">Editar</a>
                    <a class="excluir" href="excluir.php"<?=$Loja['id']?>>Excluir</a>
                </td>
        </tr>
    <?php endforeach; ?>
    </table>

    <script src="../js/confirmar-exclusao.js"></script>

</body>

</html>