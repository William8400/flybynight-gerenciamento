<?php
require_once "../src/fornecedor_crud.php";

// Pegando da url o valor do parâmetro chamado id
$id = $_GET['id'];

// Chamamos a função, passando dados de conexão e o id do fornecedor a ser buscado
$fornecedor = buscarFornecedorPorid($conexao, $id);

if( $_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = $_POST['nome'];
    atualizarFornecedor($conexao, $nome, $id);

    // Após redirecionar usando header()...
    header("location:listar.php");

    // ... sempre encerre/interrompa o script (evitando erros/execuções adicionais)
    exit;
}

// o comando <pre> organiza o array na tela
/* echo "<pre>";
var_dump($fornecedor);
echo "</pre"; */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Fornecedor</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    
<h1>Editar fornecedor</h1>

<form action="" method="post">
    <!-- Sempre coloque o código/id do registro de forma oculta no formulário -->
    <input type="hidden" name="id" value="<?=$fornecedor['id']?>">
    <div>
        <label for="nome">Nome:</label>
        <input value="<?=$fornecedor['nome']?>" type="text" name="nome" id="nome" required>
    </div>
    <button type="submit">Atualizar</button>
</form>

<a href="listar.php">👈 Voltar</a>



</body>
</html>