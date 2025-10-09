<?php

require_once "../src/fornecedor_crud.php";
require_once "../src/produto_crud.php";
$fornecedores = buscarFornecedores($conexao);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $fornecedor_id = $_POST['fornecedor'];

    inserirProduto($conexao, $nome, $descricao, $preco, $quantidade, $fornecedor_id);

    header("location:listar.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir produto</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    
<h1>Adicionando um novo produto</h1>

<form action="" method="post">

    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
    </div>
    <div>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" rows="6"></textarea>
    </div>
      <div>
        <label for="preco">preço:</label>
        <input type="number" name="preco" id="preco" require min="0" step="0.01">
        
    </div>
    <div>
        <label for="quantidade">quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" require min="0" >
    </div>
    <div>
        <label for="fornecedor">Fornecedor:</label>
        <select name="fornecedor" id="fornecedor">
            <!-- Sempre mantenha um option vazio.
             É o usuário que deve vir aqui escolher.-->
            <option value=""></option>

        <?php foreach($fornecedores as $fornecedor): ?>
            
            <option value="<?=$fornecedor['id']?>"><?=$fornecedor['nome']?> <?=$fornecedor['id']?></option>
            
        <?php endforeach; ?>

        </select>
    </div>

    <button type="submit">Salvar</button>
</form>

<a href="listar.php">👈 Voltar</a>



</body>
</html>