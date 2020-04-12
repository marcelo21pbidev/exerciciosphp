<?php
$host= "localhost";
$usuario = "postgres";
$porta = "5432";
$senha = "1998";
$banco = "aula";
$conexao = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=1998") or die("nao foi possivel fazer a conexão com o banco de dados");


?>