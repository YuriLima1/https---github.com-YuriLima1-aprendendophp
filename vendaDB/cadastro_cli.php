<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="estilos.css" type="text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>

    </head>
    <body>
        <h1>Cadastro do Cliente</h1>
        <form action="insert.php" method="POST">
            <label for="name"> Nome: </label>
            <input type="text" name="nome" id="" placeholder="Coloque seu Nome"><br>
            <br>
            <label for="name"> Telefone: </label>
            <input type="text" name="tele_cli" id="" placeholder="Coloque seu Telefone"><br>
            <br>
            <label for="name"> Endereço: </label>
            <input type="text" name="endereco" id="" placeholder="Coloque seu Endereço"><br>
            <br>
            <label for="name"> CPF: </label>
            <input type="text" name="cpf" id="" placeholder="Coloque seu CPF"><br>
            <br>
            <input type="submit" value="Cadastrar">
        </form>

        <p>Ja tem uma conta? Faça <a href="Login" class="link">Login</a></p><br>
    </body>
</html> 