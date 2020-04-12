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

if (@$_POST["b"]){
  $table = 'movimentatios';
  $cod = $_POST['id'];
  $cliente = $_POST['cliente'];
  $rota = $_POST['rota'];
  $valor = $_POST['valor'];
  $destino = $_POST['destino'];

  $result = UpdateInDb($table, $cod, $cliente , $rota , $valor , $destino);
  echo $result;
}
else if (@$_POST["c"]){
  $table = 'clients';
  $cod = $_POST['id'];
  $cliente = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $a = 1;
  $b = 1;

  $result = UpdateInDb($table, $cod, $cliente , $cpf , $a , $b);
  echo $result;
}
else if (@$_POST["p"]){
  $table = 'passages';
  $cod = $_POST['id'];
  $inicio = $_POST['inicio'];
  $fim = $_POST['fim'];
  $a = 1;
  $b = 1;

  $result = UpdateInDb($table, $cod, $inicio , $fim , $a , $b);
  echo $result;
}
else {
  ?>
 <?php 
 if($_GET["tipo"] == "compra") {
  $table = "movimentatios";
  $indiceJoin = GetUserJoinInDb($table , $id);
  ?>

   <h1>Atualizar registro de compra de passagem</h1>

  <form class="form centro" action="editar.php" method="POST">
  Id: 
  <input name="id" readonly value="<?php echo $indiceJoin['id'] ?>" type="text"><br>

  <select name="cliente">
    <option value="<?php echo $indiceJoin['cli']?>">
    <?php echo $indiceJoin['nome'] ?></option>
  <?php 
      $table = "clients";
      $indices = GetInDb($table);
      while($indice = pg_fetch_assoc($indices))
    {
  ?>
  <option value="<?php echo $indice['id'] ?>"><?php echo $indice['nome'] ?></option>
  <?php } ?> 
  </select><br>

  <select name="rota">
    <option value="<?php echo $indiceJoin['pas'] ?>"><?php echo $indiceJoin['started'] ?>--<?php echo $indiceJoin['finished'] ?></option>
  <?php 
      $table = "passages";
      $indices = GetInDb($table);
      while($indice = pg_fetch_assoc($indices))
    {
  ?>
  <option value="<?php echo $indice['id'] ?>">
  <?php echo $indice['started'] ?> -- <?php echo $indice['finished'] ?></option>
  <?php } ?> 
  </select><br>
  Valor: 
  <input value="<?php echo $indiceJoin['value'] ?>" name="valor" type="text"><br>
  Destino: 
  <input value="<?php echo $indiceJoin['destiny'] ?>" name="destino" type="text"><br>
  <input type="submit" name="b" value="Cadastrar" />
  </form>
  <?php
 }
 else if($_GET["tipo"] == 'cliente')
 {
  $table = "clients";
  $indice = GetUserInDb($table , $id);
   ?>
 <h1>Cadastro de cliente</h1>
  <form class="form centro" action="editar.php"  method="POST">
  ID:
  <input name="id" readonly value="<?php echo $indice['id'] ?>" type="text"><br>
  Nome: 
  <input name="nome" value="<?php echo $indice['nome'] ?>" type="text"><br>
  Cpf: 
  <input name="cpf" value="<?php echo $indice['cpf'] ?>" type="text"><br>
  <input type="submit" name="c" value="Cadastrar" />
  </form>
  <?php
 }else if($_GET["tipo"] == 'rota')
 {
  $table = "passages";
  $indice = GetUserInDb($table , $id);
   ?>
  <h1>Cadastro de Rota</h1>
  <form class="form centro" action="editar.php" method="POST">
  <input name="id" readonly value="<?php echo $indice['id'] ?>" type="text"><br>
  Inicio: 
  <input name="inicio" value="<?php echo $indice['started'] ?>" type="text"><br>
  Fim: 
  <input name="fim" value="<?php echo $indice['finished'] ?>" type="text"><br>
  <input type="submit" name="p" value="Cadastrar" />
  </form>
  <?php
 }
 else {
   echo 'Erro, tente novamente';
 }
 }
 ?>

<br>
<a href="index.php" >Voltar</a>
</body>
</html>