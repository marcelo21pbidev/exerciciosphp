<?php include ('../funcoes.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de convidados</title>
    <link href="./css.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="centro form">
    <div class="centro form">    
    <h1 >Exercicio 3</h1>
    <h3>Criar e gerenciar minha lista de convidados</h3>
    <a href="../../../portal.php">Voltar</a>
    </div>
    <div class="col-12 form">
    <?php 
    $table = "guests";
    $indices = GetInDb($table);
    ?>
    <a href="cadastro.php">Cadastrar novo convidado</a>
    <h1>Todos os convidados</h1>
    <table border="1" title="indices">
    <tr>
    <td>AÇÔES</td>
    <td>ID</td>
    <td>NOME</td>
    <td>FONE</td>
    <td>ACOMPANHANTES</td>
    <td>STATUS</td>
    </tr>

    <?php 
    while($indice = pg_fetch_assoc($indices))
    { ?>
    <tr>
    <td>
    <a href="editar.php?p=editar&codigo=<?php echo $indice['id'] ?>">Editar</a>
    <a href="excluir.php?p=excluir&codigo=<?php echo $indice['id'] ?>">Excluir</a></td>
    <td><?php echo $indice['id'] ?></td>
    <td><?php echo $indice['name'] ?></td>
    <td><?php echo $indice['phone'] ?></td>
    <td><?php echo $indice['companions'] ?></td>
    <td><?php echo $indice['status'] ?></td>
    </tr>
    <?php
    }
    ?>

    </table>
    </div>
    </div>
</body>
</html>