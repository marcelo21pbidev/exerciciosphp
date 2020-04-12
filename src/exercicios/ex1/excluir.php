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
  $table = 'indice';
  $user = $_POST['id'];

  $result = DeleteInDb($table, $user);
  echo $result;
} else {
  $table = "indice";
  $indice = GetUserInDb($table , $id);
  ?>
  <form class="form centro" action="excluir.php" method="POST">
  <br>
  Excluir, <?php echo $indice['nome'] ?>, com imc de = <?php echo $indice['imc'] ?>
  do registro de imc´s?
  <input type="hidden" name="id" value="<?php echo $indice['id'] ?>" />
  <input type="submit" name="d" value="Excluir" />
  </form>
<?php
}
?>
<br>
<a href="index.php" >Voltar</a>
</body>
</html>