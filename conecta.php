<?php

/* Script de conexão ao servidor de banco de dados
Este arquivo é o responsável por permitir a comunicação entre seu site/projeto e o servidor MySQL.  
*/

// Parâmetros para conexão
$servidor = "localhost"; // Padrão Do XAMPP
$banco = "flybynight_william";
$usuario = "root"; // Padrão Do XAMPP 
$senha = ""; // Padrão Do XAMPP


/* try/catch 

Bloco condicional relacionado a verificações de erro
*/
try {
    // Criando um objeto usando a classe PDO (driver de acesso a BD)
    $conexao = new PDO(

        "mysql:host=$servidor;dbname=$banco;charset=utf8",
        $usuario,
        $senha

    );

    // Habilitando a exibição de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Configurando o modo de busca de dados para o formato ARRAY ASSOCIATIVO
    $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $erro) {

    die("Erro ao conectar:" . $erro->getMessage());
}
