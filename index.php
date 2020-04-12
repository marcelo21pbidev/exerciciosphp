<?php include ("./src/services/conexao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./src/style/css1.css" rel="stylesheet" type="text/css" />
<title>Login</title>
</head>

<body>
<table bgcolor="#FFFFFF" width="250" border="0" align="center" cellspacing="0"> 
    <table border="2" width="50%" align="center"> 
    <tr>
    <td><img src="./assets/ceplogo.png" width="200" height="145" /></td></tr> 
    </td>
    <td>
      <table width="25%" border="0" cellpadding="0" cellspacing="0" align="center">
		<FORM ACTION="./src/services/acesso.php" method="post">
          <tr> 
            <td width="41%" height="35" align="right">Usuario</td>
            <td width="59%" height="35" align="left">  <input type="text" name="login" value=""></td>
          </tr>
		  
          <tr> 
            <td height="35" align="right">Senha</td>
            <td height="35" align="left"> <input type="password" name="senha" value=""><td>
          </tr>
		  
          <tr> 
            <td height="24" colspan="2" align="center"> <input name="submit" type="submit" value="Entrar"></td>
          </tr> 
		</FORM>
        </table>
        </td>
        </tr>
       </table>
       </td>
       </tr>
    </table>
 
</body>
</html>
