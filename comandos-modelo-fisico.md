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
    preco DECIMAL(10.2) NOT NULL,
    quantidade INT NOT NULL,

    -- Aqui, criamos fornecedor_id como uma coluna/campo comum 
    fornecedor_id INT NOT NULL,

    -- E aqui, transformamos fornecedor_id em uma CHAVE ESTRANGEIRA 
    -- que faz REFERÊNCIA à CHAVE PRIMÁRIA (id) de outra tabela
    -- (fornecedores)
    FOREIGN KEY (fornecedor_id) REFERENCES fornecedores(id)
);
```