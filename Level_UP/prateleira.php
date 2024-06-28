<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="multimidia/Prateleira.png" type="image/x-icon">
    <title>Prateleira | Level UP & Lan House</title>
</head>
<body>
    <?php
    require_once 'includes/db_connect.php';
    require_once 'header.php';

    if (isset($_POST['delete'])) {
        $sql = "DELETE FROM produtos WHERE id_prod=" . $_POST['id_prod'];
        if ($mysqli->query($sql) === TRUE) {
            echo "<h1 id='deletado'><strong>produto<strong> desabilitado com sucesso</h1>";
        }
    }

    $sql = "SELECT * FROM produtos";
    $result = $mysqli->query($sql);
    ?>

    <link rel="stylesheet" href="Style/style.css" type="text/css">
    <h2>Prateleira de Produtos</h2>
    <table border="1" class="tabelapra">
        <tr>
            <th>Id do Produto</th>
            <th>Nome do produto</th>
            <th>Preço</th>
            <th width="70px">Delete</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<form action='' method='POST'>";
                echo "<input type='hidden' value='" . $row['id_prod'] . "' name='id_prod' />";

                echo "<tr>";
                echo "<td>" . $row['id_prod'] . "</td>";
                echo "<td>" . $row['nome_prod'] . "</td>";
                echo "<td>" . $row['preco'] . "</td>";

                echo "<td><input type='submit' name='delete' value='Disable' class='delete' style='cursor: pointer;'/></td>"; // cria um input que serve como o botão de delete
        
                echo "</tr>";
                echo "</form>";
            }
        }
        ?>

    </table>
</body>
</html>