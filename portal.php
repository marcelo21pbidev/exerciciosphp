<?php include ("./src/services/conexao.php");?>
<?php include ("./src/services/validarcookie.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema</title>
<link href="./src/style/css1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- begin div container -->
<div class="container">
	<!-- begin div header-->
	<div style="padding: 10px" class="header white">
    <a href="#"><img src="./assets/ceplogo.png"/></a>
    </div><!-- end div header-->
    	<!-- begin div sidebar1-->
    	<div class="sidebar1">
        <ul class="nav">
    		<li><a href="./src/exercicios/ex1"><img src="./assets/ex1.png" width="100%" height="100"/></a></li>
      		<li><a href="./src/exercicios/ex2"><img src="./assets/ex2.png" width="100%" height="100"/></a></li>
     		 <li><a href="./src/exercicios/ex3"><img src="./assets/ex3.png" width="100%" height="100"/></a></li>
      		 <li><a href="#"><img src="./assets/semitem.png" width="100%" height="100"/></a></li>
   		  </ul>
        </div><!-- end div sidebar1-->
        <!-- begin div sidebar2-->
  <div class="sidebar2">
        <ul class="nav">
    		<li><a href="solda/solda.php"><img src="./assets/semitem.png" width="100%" height="100"/></a></li>
      		<li><a href="#"><img src="./assets/semitem.png" width="100%" height="100"/></a></li>
     		 <li><a href="#"><img src="./assets/semitem.png" width="100%" height="100"/></a></li>
      		 <li><a href="#"><img src="./assets/semitem.png" width="100%" height="100"/></a></li>
   		  </ul>
  </div><!-- end div sidebar2-->
        <!-- begin div sidebar3-->
  <div class="sidebar3">
        <ul class="nav">
    		<li><a target="_blank" href="pintura/pintura.php"><img src="./assets/semitem.png" width="100%" height="100"/></a></li>
      		<li><a href="#"><img src="./assets/semitem.png" width="100%" height="100"/></a></li>
     		 <li><a href="#"><img src="./assets/semitem.png" width="100%" height="100"/></a></li>
      		 <li><a href="#"><img src="./assets/semitem.png" width="100%" height="100"/></a></li>
   		  </ul>
  </div><!-- end div sidebar3-->
            	<!-- begin div footer-->
  <div class="footer">
  <h1 class="white">
  Bem Vindo(a) <?php echo $nome_usuario ?>
	&nbsp;
  <a href="./src/services/logout.php">Sair</a>
	</h1>

                </div>

  <!-- end div container -->
</div>
</body>
</html>