# Referência de comandos SQL para modelagem física 

## Projeto: Fly By Night - Gerenciamento de Estoque 


```sql
-- Criação do Banco de dados usando UTF8
CREATE DATABASE flybynight_william CHARACTER SET utf8mb4;
```

```sql
-- Criação da tabela de fornecedores 
CREATE TABLE fornecedores(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL 
);
```

```sql
CREATE TABLE produtos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL,

    -- Aqui, criamos fornecedor_id como uma coluna/campo comum 
    fornecedor_id INT NOT NULL,

    -- E aqui, transformamos fornecedor_id em uma CHAVE ESTRANGEIRA 
    -- que faz REFERÊNCIA à CHAVE PRIMÁRIA (id) de outra tabela
    -- (fornecedores)
    FOREIGN KEY (fornecedor_id) REFERENCES fornecedores(id)
);
```

```sql
CREATE TABLE lojas(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL 
);
```

```sql

CREATE TABLE lojas_produtos(
    loja_id INT NOT NULL,
    produto_id INT NOT NULL,
    estoque INT NOT NULL,

    -- Criando uma CHAVE PRIMÁRIA COMPOSTA, ou seja,
    -- baseada em mais de uma coluna/campo
    PRIMARY KEY(loja_id, produto_id),
    
    -- Se na tabela de lojas uma loja for excluída,
    -- aqui na tabela lojas`produtos TODOS OS REGISTROS de estoque 
    -- desta loja excluída TAMBÉM SERÃO EXCLUÍDO.
    FOREIGN KEY (loja_id)  REFERENCES  lojas(id) ON DELETE CASCADE,

    -- Ao tentar excluir um produto , se este produto está sendo usado em algum registro de estoque, NÃO PODEMOS PERMITIR
    -- a exclusão! [isso j´pa é o padrão]
    FOREIGN KEY (produto_id) REFERENCES produtos(id)  ON DELETE RESTRICT
);

```

