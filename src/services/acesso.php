<?php include ("conexao.php");
//$conexao = pg_connect("host=localhost port=5432 dbname=schumann user=postgres password=123456") or die("nao foi possivel fazer a conexão com o banco de dados");

$login = $_POST["login"];
$senha = $_POST["senha"];


	$sql= "select * from users WHERE name = '$login' and password = '$senha' "; 
	$query = pg_query($conexao,$sql) or die("deu ruim");
	
	$linhas = pg_num_rows($query);
	
	if ($linhas == 0)
	{
		echo $sql;
		print "deu ruim";
		header("location:../../index.php");
	}
	else
	{
		
		$sql1="select * from users WHERE name = '$login' and password = '$senha'"; 
		$result = pg_query($conexao,$sql1);
		$linha= pg_fetch_assoc($result);
		
			$codigo		= $linha["id"];
			$usuario 	= $linha["name"];
			$senha 		= $linha["password"];
	
		setcookie("id", $codigo);		
		setcookie("nome",$usuario);
		setcookie("senha",$senha);	
		echo $codigo, $usuario, $senha;		
				
		header("location:../../portal.php");
				
	}


?>
