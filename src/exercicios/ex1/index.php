<?php include ('../funcoes.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imc</title>
    <link href="./css.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="centro form">
    <div class="centro form">    
    <h1 >Exercicio 1</h1>
    <h3>Calculo do indice de massa corpórea</h3>
    <a href="../../../portal.php">Voltar</a>
    </div>
    <div class="col-12 form">
    <?php 
    $table = "indice";
    $indices = GetInDb($table);
    ?>
    <a href="cadastro.php">Cadastrar nova verificação</a>
    <h1>Todos os registros</h1>
    <table border="1" title="indices">
    <tr>
    <td>AÇÔES</td>
    <td>ID</td>
    <td>NOME</td>
    <td>PESO</td>
    <td>ALTURA</td>
    <td>IMC </td>
    </tr>

    <?php 
    while($indice = pg_fetch_assoc($indices))
    { ?>
    <tr>
    <td>
    <a href="editar.php?p=editar&codigo=<?php echo $indice['id'] ?>">Editar</a>
    <a href="excluir.php?p=excluir&codigo=<?php echo $indice['id'] ?>">Excluir</a></td>
    <td><?php echo $indice['id'] ?></td>
    <td><?php echo $indice['nome'] ?></td>
    <td><?php echo $indice['peso'] ?></td>
    <td><?php echo $indice['altura'] ?></td>
    <td><?php echo $indice['imc'] ?></td>
    </tr>
    <?php
    }
    ?>

    </table>
    </div>
    </div>
</body>
</html>