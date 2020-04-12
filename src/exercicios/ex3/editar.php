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
  $table = 'guests';
  $user = $_POST['id'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $acomp = $_POST['companions'];
  $status =  $_POST['status'];

  $result = UpdateInDb($table, $user , $name , $phone , $acomp , $status);
  echo $result;
} else {
  $table = "guests";
  $indice = GetUserInDb($table , $id);
  ?>
  <form class="form centro" action="editar.php" method="POST">
  Id: 
  <input name="id" readonly value="<?php echo $indice['id'] ?>" type="text"><br>
  Nome: 
  <input name="name" value="<?php echo $indice['name'] ?>" type="text"><br>
  Telefone: 
  <input name="phone" value="<?php echo $indice['phone'] ?>" type="text"><br>
  Numero de acompanhantes: 
  <input name="companions" value="<?php echo $indice['companions'] ?>" type="text"><br>
  Confirmado? (S - sim, N - não, T - talvez)<br> 
  <select name="status">
    <option value="<?php echo $indice['status'] ?>"><?php echo $indice['status'] ?></option>
  <?php 
      $table = "status_types";
      $indices = GetInDb($table);
      while($indice = pg_fetch_assoc($indices))
    {
  ?>
  <option value="<?php echo $indice['type'] ?>"><?php echo $indice['type'] ?></option>
  <?php echo $indice['type'] ?>;
  <?php } ?> 
  </select><br>
  <input type="submit" name="u" value="Atualizar" />
  </form>
<?php
}
?>
<br>
<a href="index.php" >Voltar</a>
</body>
</html>