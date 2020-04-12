<?php include ('../funcoes.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edição</title>
  <link href="./css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
@$id = $_GET['codigo'];

if (@$_POST["u"]){
  $table = 'indice';
  $user = $_POST['id'];
  $nome = $_POST['nome'];
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];
  $imc =  $peso / ($altura * $altura) ;

  $result = UpdateInDb($table, $user , $nome , $peso , $altura , $imc);
  echo $result['nome']."Seu imc é ".$imc." e foi atualizado com sucesso";
} else {
  $table = "indice";
  $indice = GetUserInDb($table , $id);
  ?>
  <form class="form centro" action="editar.php" method="POST">
  Id: 
  <input name="id" readonly value="<?php echo $indice['id'] ?>" type="text"><br>
  Nome: 
  <input name="nome" value="<?php echo $indice['nome'] ?>" type="text"><br>
  peso: 
  <input name="peso" value="<?php echo $indice['peso'] ?>" type="text"><br>
  Altura: 
  <input name="altura" value="<?php echo $indice['altura'] ?>" type="text"><br>
  IMC: 
  <input name="imc" readonly value="<?php echo $indice['imc'] ?>" type="text"><br>
  <input type="submit" name="u" value="Recalcular e cadastrar" />
  </form>
<?php
}
?>
<br>
<a href="index.php" >Voltar</a>
</body>
</html>