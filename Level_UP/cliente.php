<?php
require_once 'includes/db_connect.php';

if (isset($_POST['register'])) {

    if (empty($_POST['nome']) || empty($_POST['celphone']) || empty($_POST['rua']) || empty($_POST['cidade']) || empty($_POST['cpf_cnpj'])) {
        echo "Por favor, preencha todos os campos obrigatórios.";
    } else {

        $nome_cli = $_POST['nome'];
        $telefone = $_POST['celphone'];
        $rua = $_POST['rua'];
        $genero = $_POST['genero'];
        $cidade = $_POST['cidade'];
        $cpf = $_POST['cpf_cnpj'];

        $sql = "INSERT INTO cliente (nome_cli, telefone, rua, genero, cidade, cpf) VALUES ('$nome_cli', '$telefone', '$rua', '$genero', '$cidade', '$cpf')";

        if ($con->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Usuário registrado com sucesso!</div>";
        } else {
            echo "<div class='alert alert-danger'>Erro: " . $con->error . "</div>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="shortcut icon" href="multimidia/Cadastro.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/estilos.css" type="text/css">
    <style>
        * {
            text-align: center;
        }
    </style>
</head>
<body>
    
    <?php
    require_once 'header.php'; 
    ?>

    <form action="" method="post" name="registration_form">

        Nome: <br> 
        <input type="text" name="nome" placeholder="Digite seu nome"> <br>
        <br>
        Telefone: <br>
        <input type="tel" name="celphone" placeholder="xx xx-xxxxxxxxx"> <br>
        <br>
        Rua: <br>
        <input type="text" name="rua" placeholder="Digite sua rua"> <br>
        <br>
        Cidade: <br>
        <input type="text" name="cidade" placeholder="Digite sua cidade"> <br>
        <br>
        Qual seu gênero: <br>
        <br>
        Masculino <br>
        <input type="radio" name="genero" id="masculino" value="masculino"> <br>
        <br>
        Feminino <br>
        <input type="radio" name="genero" id="feminino" value="feminino"> <br>
        <br>
        Prefiro não dizer <br>
        <input type="radio" name="genero" id="nao_dizer" value="nao_dizer"> <br>
        <br>
        SELECIONE SE VOCÊ USA CPF OU CNPJ: <br>
        <br>
        CPF/Cliente <br>
        <input type="radio" name="cpf" id="cpf" value="cpf"> <br>
        <br>
        CNPJ/Jurídico <br>
        <input type="radio" name="cpf" id="cnpj" value="cnpj"> <br>
        <br>
        <input type="submit" name="register" value="Cadastrar-se">
        <br><br>
        <a href="index.php"> Deseja voltar para o clique </a>

    </form>
    <?php
    require_once 'footer.php';
    ?>
</body>
</html>