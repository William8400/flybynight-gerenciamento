<?php
require_once "../src/fornecedor_crud.php";
require_once "../src/produto_crud.php";

// pegando parâmetro que a gente criou do id
$id = $_GET['id']; // se ta na url sempre usar o GET 

// agora pegamos a função que criamos e guardar em uma variavel

$produto = buscarProdutoPorid($conexao, $id);




$fornecedores = buscarFornecedores($conexao);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

    <h1>Editar produto</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="?id=<?=$produto["id"]?>">

        <div>
            <label for="nome">Nome:</label>
            <input value="<?=$produto['nome']?>" type="text" name="nome" id="nome" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <!-- Não dar enter ou identação dentro da tag textarea, pois os espaços vão aparecer se fizer isso. Portanto, deixe tudo na mesma linha -->
            <textarea name="descricao" id="descricao" rows="6"><?=$produto["descricao"]?></textarea>
        </div>
        <div>
            <label for="preco">preço:</label>
            <input value="<?=$produto["preco"]?>" type="number" name="preco" id="preco" require min="0" step="0.01">

        </div>
        <div>
            <label for="quantidade">quantidade:</label>
            <input value="<?=$produto["quantidade"]?>" type="number" name="quantidade" id="quantidade" require min="0">
        </div>
        <div>
            <label for="fornecedor">Fornecedor:</label>
            <select name="fornecedor" id="fornecedor">
                <!-- Sempre mantenha um option vazio.
             É o usuário que deve vir aqui escolher.-->
                <option value=""></option>

                <?php foreach ($fornecedores as $fornecedor): ?>

                    <option value="<?= $fornecedor['id'] ?>"><?= $fornecedor['nome'] ?> <?= $fornecedor['id'] ?></option>

                <?php endforeach; ?>

            </select>
        </div>
        <button type="submit">Atualizar</button>
    </form>

    <a href="listar.php">👈 Voltar</a>



</body>

</html>