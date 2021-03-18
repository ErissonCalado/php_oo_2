<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <h1>Cadastrar Usuário</h1>
    <form method="POST" action="processo.php">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome completo:"><br><br>

        <label>Matrícula: </label>
        <input type="text" name="nome" placeholder="Sua matrícula:"><br><br>

        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Senha:"><br><br>
        <?php if (isset($_GET['cadastro']) && $_GET['cadastro'] == 'ok') { ?>
        <div class="alert alert-success" role="alert">
            Usuário cadastrado
        </div>
        <?php } ?>
        <?php if (isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro') { ?>
        <div class="alert alert-warning" role="alert">
            Usuário já cadastrado
        </div>
        <?php } ?>
        <input type="submit" value="Cadastrar">

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>

</body>

</html>