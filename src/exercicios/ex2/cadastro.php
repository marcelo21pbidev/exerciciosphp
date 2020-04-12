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
  $table = 'clients';
  $a = 1;
  $b = 1;
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];

  $result = InsertInDb($table , $nome , $cpf, $a , $b);
  echo $result;
}
else if (@$_POST["p"]){
  $a = 1;
  $b = 1;
  $table = 'passages';
  $inicio = $_POST['inicio'];
  $fim = $_POST['fim'];

  $result = InsertInDb($table , $inicio , $fim, $a , $b);
  echo $result;
}
else if (@$_POST["b"]){
  $table = 'movimentatios';
  $cliente = $_POST['cliente'];;
  $rota = $_POST['rota'];;
  $valor = $_POST['valor'];
  $destino = $_POST['destino'];

  $result = InsertInDb($table , $cliente , $rota, $valor , $destino);
  echo $result;
}
else {
  ?>
 <?php 
 if($_GET["tipo"] == "compra") {
  ?>
   <h1>Cadastro de compra de passagem</h1>
  <form class="centro form" action="cadastro.php" method="POST">
  <select name="cliente">
    <option>Selecione o cliente...</option>
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
    <option>Selecione a rota...</option>
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
  <input name="valor" type="text"><br>
  Destino: 
  <input name="destino" type="text"><br>
  <input type="submit" name="b" value="Cadastrar" />
  </form>
  <?php
 }
 else if($_GET["tipo"] == 'cliente')
 {
   ?>
 <h1>Cadastro de cliente</h1>
  <form class="centro form" action="cadastro.php" method="POST">
  Nome: 
  <input name="nome" type="text"><br>
  Cpf: 
  <input name="cpf" type="text"><br>
  <input type="submit" name="c" value="Cadastrar" />
  </form>
  <?php
 }else if($_GET["tipo"] == 'rota')
 {
   ?>
  <h1>Cadastro de Rota</h1>
  <form class="centro form" action="cadastro.php" method="POST">
  Inicio: 
  <input name="inicio" type="text"><br>
  Fim: 
  <input name="fim" type="text"><br>
  <input type="submit" name="p" value="Cadastrar" />
  </form>
  <?php
 }
 else {
   echo 'Erro, tente novamente';
 }
 ?>
 
  <br>
<?php
}
?>
<br>
<a href="index.php" >Voltar</a>
</body>
</html>