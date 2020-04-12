<?php

function GetInDb ($table)
{
  $conexao = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=1998") or die("nao foi possivel fazer a conexão com o banco de dados");
  /* Retonar um array associativo correspondente a cada linha da tabela */

    $query = "select * from $table order by id";
    $valor_retornado = pg_query($conexao, $query);
    pg_close($conexao);
    return $valor_retornado;
};

function GetJoinInDb ($table)
{
  $conexao = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=1998") or die("nao foi possivel fazer a conexão com o banco de dados");
  /* Retonar um array associativo correspondente a cada linha da tabela */

    $query = "
    SELECT a.id , a.value, a.destiny,b.nome,b.cpf,c.started,
    c.finished from movimentatios a
    inner join clients b on a.client = b.id
    inner join passages c on a.passage = c.id;";
    $valor_retornado = pg_query($conexao, $query);
    pg_close($conexao);
    return $valor_retornado;
};

function GetUserJoinInDb ($table , $id)
{
  $conexao = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=1998") or die("nao foi possivel fazer a conexão com o banco de dados");
  /* Retonar um array associativo correspondente a cada linha da tabela */

    $query = "
    SELECT a.id , a.value, a.client as cli , a.passage as pas, a.destiny,b.nome,b.cpf,c.started,
    c.finished from movimentatios a
    inner join clients b on a.client = b.id
    inner join passages c on a.passage = c.id WHERE a.id = $id;";
    $result = pg_query($conexao, $query);
    $valor_retornado = pg_fetch_assoc($result);
    pg_close($conexao);
    return $valor_retornado;
};

function GetUserInDb ($table , $id)
{
  $conexao = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=1998") or die("nao foi possivel fazer a conexão com o banco de dados");
  /* Retonar um array associativo correspondente a cada linha da tabela */

    $query = "select * from $table WHERE id = $id";
    $indices = pg_query($conexao, $query);
    $valor_retornado = pg_fetch_assoc($indices);
    pg_close($conexao);
    return $valor_retornado;
};

function InsertInDb ($table, $valueCol1 , $valueCol2 , $valueCol3 , $valueCol4)
{
  $conexao = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=1998") or die("nao foi possivel fazer a conexão com o banco de dados");
  /* Retonar um array associativo correspondente a cada linha da tabela */

  switch ($table) {
    case "indice":
      $query = "INSERT INTO $table VALUES (DEFAULT ,'$valueCol1' , '$valueCol2' , '$valueCol3' , '$valueCol4')";
      $valor_retornado = pg_query($conexao, $query) or die ("Erro de cadastro");
      pg_close($conexao);
      return $valor_retornado;
        break;
    case "clients":
      $query = "INSERT INTO $table VALUES (DEFAULT ,'$valueCol1' , '$valueCol2' )";
      $valor_retornado = pg_query($conexao, $query) or die ("Erro de cadastro");
      pg_close($conexao);
      return $valor_retornado;
      break;
    case "passages":
      $query = "INSERT INTO $table VALUES (DEFAULT ,'$valueCol1' , '$valueCol2' )";
      $valor_retornado = pg_query($conexao, $query) or die ("Erro de cadastro");
      pg_close($conexao);
      return $valor_retornado;
      break;
    case "movimentatios":
      $query = "INSERT INTO $table VALUES (DEFAULT ,'$valueCol1' , '$valueCol2' , '$valueCol3' , '$valueCol4' )";
      $valor_retornado = pg_query($conexao, $query) or die ("Erro de cadastro");
      pg_close($conexao);
      return $valor_retornado;
      break;
    case "guests":
      $query = "INSERT INTO $table VALUES (DEFAULT ,'$valueCol1' , '$valueCol2' , '$valueCol3' , '$valueCol4' )";
      $valor_retornado = pg_query($conexao, $query) or die ("Erro de cadastro");
      pg_close($conexao);
      return $valor_retornado;
      break;
    default ;
}
}

function UpdateInDb ($table, $cod, $valueCol1 , $valueCol2 , $valueCol3 , $valueCol4)
{
  $conexao = pg_connect("host=localhost port=5432 dbname=aula user=postgres password=1998") or die("nao foi possivel fazer a conexão com o banco de dados");
  /* Retonar um array associativo correspondente a cada linha da tabela */

  switch ($table) {
    case "indice":
      $query = "UPDATE $table SET nome = '$valueCol1' , peso = '$valueCol2' ,
       altura = '$valueCol3' , imc = '$valueCol4' WHERE id = '$cod'";
      $valor_retornado = pg_query($conexao, $query) or die ("Erro de cadastro");
      pg_close($conexao);
      return $valor_retornado;
        break;
    case "movimentatios":
      $query = "UPDATE $table SET client = '$valueCol1' , passage = '$valueCol2' ,
      value = '$valueCol3' , destiny = '$valueCol4' WHERE id = '$cod'";
      $valor_retornado = pg_query($conexao, $query) or die ("Erro de cadastro");
      pg_close($conexao);
      return $valor_retornado;
      break;
    case "clients":
      $query = "UPDATE $table SET nome = '$valueCol1' , cpf = '$valueCol2'
      WHERE id = '$cod'";
      $valor_retornado = pg_query($conexao, $query) or die ("Erro de cadastro");
      pg_close($conexao);
      return $valor_retornado;
      break;
    case "passages":
      $query = "UPDATE $table SET started = '$valueCol1' , finished = '$valueCol2'
      WHERE id = '$cod'";
      $valor_retornado = pg_query($conexao, $query) or die ("Erro de cadastro");
      pg_close($conexao);
      return $valor_retornado;
      break;
    case "guests":
      $query = "UPDATE $table SET name = '$valueCol1' , phone = '$valueCol2'
      , companions = '$valueCol3' , status = '$valueCol4'
      WHERE id = '$cod'";
      $valor_retornado = pg_query($conexao, $query) or die ("Erro de cadastro");
      pg_close($conexao);
      return $valor_retornado;
      break;
    default ;
}
}

function DeleteInDb ($table , $id)
{
  $conexao = pg_connect("host=localhost port=5432 
  dbname=aula user=postgres password=1998") 
  or die("nao foi possivel fazer a conexão com o banco de dados");

    $query = "DELETE FROM $table WHERE id = $id";
    $indices = pg_query($conexao, $query);
    pg_close($conexao);
    return $indices;
};
?>