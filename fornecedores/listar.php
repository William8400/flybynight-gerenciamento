<?php

// Importando o arquivo de funções CRUD para fornecedores 
require_once "../src/fornecedor_crud.php";

// chama a função (passando a conexão) e recebe um array associativo com os dados 
$fornecedores = buscarFornecedores($conexao);


// Testando a exibição dos dados (só para o programador[a])
// echo "<pre>";
// var_dump($fornecedores);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Listas Fornecedores </title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

    <h1>Fornecedores</h1>
    <a href=""> + Novo fornecedor</a>
    <a href="../index.php"> 👈 Voltar</a>

    <!-- Estruturando uma tabela HTML para exibir os dados -->

    <table>
        <caption>Relação de Fornecedores</caption>
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>

        <!-- As linhas (tr/td) abaixo serão geradas dinamicamente, ou seja, usando um loop (foreach) no array ($fornecedores) -->

        <?php foreach ($fornecedores as $fornecedor) { // ou : ?>

            <tr>
                <td><?=$fornecedor['id']?></td>
                <td><?=$fornecedor['nome']?></td>
            </tr>

        <?php } // ou endforeach; ?>

    </table>



</body>

</html>