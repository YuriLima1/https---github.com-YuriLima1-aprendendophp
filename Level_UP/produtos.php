<?php
require_once 'includes/db_connect.php';

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['jogos'])) {
        $quantidade_produtos = count($_POST['jogos']);

        // Início da transação
        $conn->begin_transaction();

        try {
            foreach ($_POST['jogos'] as $id_produto) {
                // Seleciona o produto pelo ID
                $sql_select_produto = "SELECT id_produto, nome_prod, q_estoque FROM produtos WHERE id_produto = ?";
                $stmt = $conn->prepare($sql_select_produto);
                $stmt->bind_param("i", $id_produto);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $nome_produto = $row['nome_prod'];
                    $quantidade_estoque = $row['q_estoque'];

                    $sql_insert_pedido = "INSERT INTO itens_pedidos (id_pedido, id_produto, quantidade) VALUES (?, ?, 1)";
                    $stmt = $conn->prepare($sql_insert_pedido);
                    $id_pedido = $_SESSION['id_pedido'];  // ID do pedido criado anteriormente
                    $stmt->bind_param("ii", $id_pedido, $id_produto);
                    $stmt->execute();

                    $nova_quantidade = $quantidade_estoque - 1;
                    $sql_update_estoque = "UPDATE produtos SET q_estoque = ? WHERE id_produto = ?";
                    $stmt = $conn->prepare($sql_update_estoque);
                    $stmt->bind_param("ii", $nova_quantidade, $id_produto);
                    $stmt->execute();
                }
            }

            $conn->commit();

            header("Location: confirmar_pedido.php");
            exit();
        } catch (Exception $e) {
            $conn->rollback();
            echo "Erro ao processar pedido: " . $e->getMessage();
        }
    } else {
        echo "Por favor, selecione ao menos um jogo.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | Level UP</title>
    <link rel="stylesheet" href="CSS/estilos.css" type="text/css">
    <link rel="shortcut icon" href="multimidia/Produto.png" type="image/x-icon">
</head>
<body>
    
    <h1> SELECIONE SEU JOGO LOGO ABAIXO </h1>

    <form action="pedido.php" method="post">

        Call of Duty Vanguard:
        <input type="checkbox" name="jogos" value="Call of Duty Vanguard" id="call"> <br>

        Metro 2033:
        <input type="checkbox" name="jogos" value="Metro 2033" id="metro"> <br>

        Grand Theft Auto V:
        <input type="checkbox" name="jogos" value="Grand Theft Auto V" id="gta5"> <br>

        The Legend of Zelda: Tears of the Kingdom:
        <input type="checkbox" name="jogos" value="The Legend of Zelda" id="zelda"> <br>

        Super Mario Bros Wonder:
        <input type="checkbox" name="jogos" value="Super Mario Bros" id="mario"> <br>

        <br>
        <input type="submit" value="Enviar Pedido">

    </form>

</body>
</html>