<?php

$db = new SQLite3('filme.db');

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 
    echo "\ntabela filmes criada\n"; 
else
echo "\n erro ao criar tabela filmes\n"; 

$sql = "CREATE TABLE filmes(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(200) NOT NULL,
    poster VARCHAR (200),
    sinopse TEXT,
    nota DECIMAL (2,1)
)
";


$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    0,
    'vingadores',
    'https://www.themoviedb.org/t/p/original/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg'
    'Após os eventos devastadores de Vingadores Ultimato , o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências',
    9.9

    )";

if ($bd->exec($sql)) 
    echo "\filmes inseridos com sucesso\n"; 
else
echo "\n erro ao inserir filmes\n";

?> 