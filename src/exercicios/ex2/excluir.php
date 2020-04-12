<?php include ('../funcoes.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Excluir</title>
  <link href="./css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
@$id = $_GET['codigo'];

if (@$_POST["d"]){
  $table = 'movimentatios';
  $user = $_POST['id'];

  $result = DeleteInDb($table, $user);
  echo $result;
}
else if (@$_POST["c"]){
  $table = 'clients';
  $user = $_POST['id'];

  $result = DeleteInDb($table, $user);
  echo $result;
}
else if (@$_POST["r"]){
  $table = 'passages';
  $user = $_POST['id'];

  $result = DeleteInDb($table, $user);
  echo $result;
}
else {
  if($_GET['tipo'] == 'compra'){
    $table = "movimentatios";
    $indiceJoin = GetUserJoinInDb($table , $id);
    ?>
    <form class="form centro" action="excluir.php" method="POST">
  <br>
  Excluir passagem numero, <?php echo $indiceJoin['id'] ?>,
   do cliente = <?php echo $indiceJoin['nome'] ?>
  do registro de passagens compradas?
  <input type="hidden" name="id" value="<?php echo $indiceJoin['id'] ?>" />
  <input type="submit" name="d" value="Excluir" />
  </form>
<?php
}
else if($_GET['tipo'] == 'cliente'){
  $table = "clients";
  $indice = GetUserInDb($table , $id);
  ?>
  <form class="form centro" action="excluir.php" method="POST">
<br>
Excluir cliente numero, <?php echo $indice['id'] ?>,
 <?php echo $indice['nome'] ?> &nbsp  
do registro de clientes?
<input type="hidden" name="id" value="<?php echo $indice['id'] ?>" />
<input type="submit" name="c" value="Excluir" />
</form>
<?php
}
else if($_GET['tipo'] == 'rota'){
  $table = "passages";
  $indice = GetUserInDb($table , $id);
  ?>
  <form class="form centro" action="excluir.php" method="POST">
<br>
Excluir rota numero, <?php echo $indice['id'] ?>,
 <?php echo $indice['started'] ?> -- <?php echo $indice['finished'] ?> &nbsp
do registro de Rotas de viajem?
<input type="hidden" name="id" value="<?php echo $indice['id'] ?>" />
<input type="submit" name="r" value="Excluir" />
</form>
<?php
}
}
?>
<br>
<a href="index.php" >Voltar</a>
</body>
</html>