# Comandos usados para o projeto Microblg


## Modelagem Conceitual

### Criar o banco de dados 

```sql

CREATE DATABASE microblog_william CHARACTER SET utf8mb4;

```
### Criar a tabela usuarios 
```sql

CREATE TABLE usuarios(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    classificacao ENUM('admin','editor') NOT NULL
);
```
### Criar a tabela noticias

```sql

CREATE TABLE noticias(

    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(100) NOT NULL,
    texto TEXT NOT NULL,
    resumo TEXT NOT NULL,
    imagem VARCHAR(50) NOT NULL,
    data DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    
    usuario_id INT NOT NULL,

    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)

);

```



