
<?php
require_once 'connect.php';
?>
 
<div class="container">
 
<?php
 
if( empty($_POST['nome']) || empty($_POST['tele_cli']) || empty($_POST['endereco']) || empty($_POST['cpf']) )
{
    echo "Preencha todos os campos";
}else{
 
    $nome = $_POST['nome'];
    $tele_Cli = $_POST['tele_cli'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $sql = "INSERT cliente SET nome='{$nome}', tele_Cli = '{$tele_Cli}', endereco = '{$endereco}', cpf = '{$cpf}' WHERE Cli_id=". $_POST['Cli_id'];
 
                    if( $con->query($sql) === TRUE ){
                            echo "<div class='alert alert-success'>Usuário adicionado com sucesso</div>";
                    }else{
                            echo "<div class='alert alert-danger'>Error: houve um erro ao adicionar um novo usuário</div>";
                    }
                }
    
    ?>