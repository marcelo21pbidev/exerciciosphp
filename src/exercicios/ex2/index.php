<?php include ('../funcoes.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de passagens</title>
    <link href="./css.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="centro form">
    <div class="col-12 form">    
    <h1 >Exercicio 2</h1>
    <h3>Sistema de gestão de compra de passágens</h3>
    <a href="../../../portal.php">Voltar</a>
    </div>
    <!-- Gestão de passagens -->
    <div class="col-12 form">
    <?php 
    $table = "movimentatios";
    $indices = GetJoinInDb($table);
    ?>
    <a href="cadastro.php?tipo=compra">Cadastrar nova compra de passagem</a>
    <h1>Todos os registros</h1>
    <table border="1" title="indices">
    <tr>
    <td>AÇÔES</td>
    <td>ID</td>
    <td>CLIENTE</td>
    <td>CPF</td>
    <td>INICIO</td>
    <td>FIM</td>
    <td>VALOR</td>
    <td>DESTINO</td>
    </tr>

    <?php 
    while($indice = pg_fetch_assoc($indices))
    { ?>
    <tr>
    <td>
    <a href="editar.php?p=editar&codigo=<?php echo $indice['id'] ?>&tipo=compra">Editar</a>
    <a href="excluir.php?p=excluir&codigo=<?php echo $indice['id'] ?>&tipo=compra">Excluir</a></td>
    <td><?php echo $indice['id'] ?></td>
    <td><?php echo $indice['nome'] ?></td>
    <td><?php echo $indice['cpf'] ?></td>
    <td><?php echo $indice['started'] ?></td>
    <td><?php echo $indice['finished'] ?></td>
    <td><?php echo $indice['value'] ?></td>
    <td><?php echo $indice['destiny'] ?></td>
    </tr>
    <?php
    }
    ?>

    </table>
    </div>

     <!-- Clientes -->
     <div class="col-12 form">
    <?php 
    $table = "clients";
    $indices = GetInDb($table);
    ?>
    <a href="cadastro.php?tipo=cliente">Cadastrar novo cliente</a><br>
    <h1>Todos os Clientes</h1>
    <table border="1" title="indices">
    <tr>
    <td>AÇÔES</td>
    <td>ID</td>
    <td>NOME</td>
    <td>CPF</td>
    </tr>

    <?php 
    while($indice = pg_fetch_assoc($indices))
    { ?>
    <tr>
    <td>
    <a href="editar.php?p=editar&codigo=<?php echo $indice['id'] ?>&tipo=cliente">Editar</a>
    <a href="excluir.php?p=excluir&codigo=<?php echo $indice['id'] ?>&tipo=cliente">Excluir</a></td>
    <td><?php echo $indice['id'] ?></td>
    <td><?php echo $indice['nome'] ?></td>
    <td><?php echo $indice['cpf'] ?></td>
    </tr>
    <?php
    }
    ?>

    </table>
    </div>

     <!-- Rotas -->
     <div class="col-12 form">
    <?php 
    $table = "passages";
    $indices = GetInDb($table);
    ?>
    <a href="cadastro.php?tipo=rota">Cadastrar nova rota</a>
    <h1>Todas as Rotas</h1>
    <table border="1" title="indices">
    <tr>
    <td>AÇÔES</td>
    <td>ID</td>
    <td>INICIO</td>
    <td>FIM</td>
    </tr>

    <?php 
    while($indice = pg_fetch_assoc($indices))
    { ?>
    <tr>
    <td>
    <a href="editar.php?p=editar&codigo=<?php echo $indice['id'] ?>&tipo=rota">Editar</a>
    <a href="excluir.php?p=excluir&codigo=<?php echo $indice['id'] ?>&tipo=rota">Excluir</a></td>
    <td><?php echo $indice['id'] ?></td>
    <td><?php echo $indice['started'] ?></td>
    <td><?php echo $indice['finished'] ?></td>
    </tr>
    <?php
    }
    ?>

    </table>
    </div>

    </div>
</body>
</html>