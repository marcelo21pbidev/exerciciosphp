<?php include ('../funcoes.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link href="./css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
if (@$_POST["c"]){
  $table = 'indice';
  $nome = $_POST['nome'];
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];
  $imc =  $peso / ($altura * $altura) ;

  $result = InsertInDb($table , $nome , $peso , $altura , $imc);
  echo $result['nome']."Seu imc é ".$imc." e foi cadastrado com sucesso";
} else {
  ?>
  <form class="form centro" action="cadastro.php" method="POST">
  Nome: 
  <input name="nome" type="text"><br>
  peso: 
  <input name="peso" type="text"><br>
  Altura: 
  <input name="altura" type="text"><br>

  <input type="submit" name="c" value="Calcular e cadastrar" />
  </form>
<?php
}
?>
<br>
<a href="index.php" >Voltar</a>
</body>
</html>