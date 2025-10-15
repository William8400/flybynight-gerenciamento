<?php
require_once "../src/fornecedor_crud.php";

/* Se o formulário com método post for acionado */
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Então vamos pegar o valor do campo chamado nome (via atributo NAME)
    $nome = $_POST['nome'];

    // Chamamos a função, passamos os dados de conexão e o valor do nome digitado
    inserirFornecedor($conexao, $nome);

    // Redirecionamos para página listar.php
    header("location:listar.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Fornecedor</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    
<h1>Adicionando um novo fornecedor</h1>

<form action="" method="post">

    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
    </div>
    <button type="submit">Salvar</button>
</form>

<a href="listar.php">👈 Voltar</a>



</body>
</html>