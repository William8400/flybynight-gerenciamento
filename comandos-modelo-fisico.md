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