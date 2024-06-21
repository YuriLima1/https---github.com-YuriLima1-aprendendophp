<?php
    
    require_once 'includes/connect.php';

    sec_session_start();

    if (login_check($mysqli)== true){
        $logged = 'Logado';
    }else{
        $logged = 'Deslogado';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login do Cliente</title>
        <link rel="stylesheet" href="styles/main.css" />        
        <script type="text/JavaScript" src="js/sha512.js"></script>         
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
        <?php
            if (isset($_GET['error'])) {            
                echo '<p class="error">Erro ao fazer o login!</p>';        
            }
        ?>

        <form action="includes/process_login.php" method="post" name="login_form">                                  
        
            Email: <input type="text" name="email" />            
    
            Senha: <input type="password" name="password" id="password"/>            
            <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" />         
        </form>

        <p>Se você não tem conta, porfavor <a href="cadastro.php">Cadastre-se</a></p> 
        <p><a href="includes/logout.php">Deslogar</a>.</p>
        <p>Atualmente você esta <?php echo $logged ?>.</p>
    </body>
</html>