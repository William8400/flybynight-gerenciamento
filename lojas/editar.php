<?php
require_once "../src/loja_crud.php";

$id = $_GET['id'];

$lojas = buscarLojasPorId($conexao, $id);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $nome = $_POST['nome'];
    atualizarLoja($conexao, $nome , $id);

    header('location:listar.php');

    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar lojas</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

    <h1>Editar lojas</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="?id=<?= $lojas["id"] ?>">

        <div>
            <label for="nome">Nome:</label>
            <input value="<?= $lojas['nome'] ?>" type="text" name="nome" id="nome" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>

    <a href="listar.php">👈 Voltar</a>



</body>

</html>