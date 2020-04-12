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
  $table = 'guests';
  $name = $_POST['nome'];
  $phone = $_POST['fone'];
  $comp = $_POST['acomp'];
  $status = $_POST['status']; ;

  $result = InsertInDb($table , $name , $phone , $comp , $status);
  echo $result;
} else {
  ?>
  <form class="form centro" action="cadastro.php" method="POST">
  Nome: 
  <input name="nome" type="text"><br>
  Telefone: 
  <input name="fone" type="text"><br>
  Numero de acompanhantes: 
  <input name="acomp" type="text"><br>
  Confirmado? (S - sim, N - não, T - talvez)<br>
  <select name="status">
    <option>-- Escolha --</option>
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


  <input type="submit" name="c" value="Cadastrar" />
  </form>
<?php
}
?>
<br>
<a href="index.php" >Voltar</a>
</body>
</html>