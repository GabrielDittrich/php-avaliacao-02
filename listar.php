<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Produtos Cadastrados</title>
</head>

<body>

    <h1>Produtos Cadastrados</h1>

    <?php
    require_once 'conexao.php';

    $conn = conectar_banco();

    $query = "SELECT * FROM produtos";

    $resultado = mysqli_query($conn, $query);

    // se o retorno da minha consulta não for maior que zero,
    // significa que a consulta retornou nada, zero resultados.
    if (!mysqli_num_rows($resultado) > 0) {
        exit("<h3>Não há produtos Cadastrados</h3>");
    }

    echo "<h3>Lista de produtos Cadastrados</h3>";

    echo "<table>";
    echo "<tr>";
    echo "<th>ID #</th>";
    echo "<th>Produto </th>";
    echo "<th>Preço </th>";
    echo "<th>Quantidade</th>";
    echo "</tr>";
    
    // Criamos um laço para percorrer os valores de 'resultado' que, originalmente
    // é um objeto. Enquanto tiver registros transformaremos o registro atual, ou seja
    // aquele que está sendo acessado na interação atual do laço, em um array associativo
    // chamdo 'linha'. É este array 'linha' qye mostraremos na tela
    while ($linha = mysqli_fetch_assoc($resultado)) {

        echo "<tr>";
        echo "<td>" . $linha['id'] . "</td>";
        echo "<td>" . $linha["nome"] . "</td>";
        echo "<td>R$ " . number_format($linha["preco"], 2, ',', '.') . "</td>";
        echo "<td>" . $linha["quantidade"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($conn);

    ?>

    <p>
        <a href="index.php">Voltar à Home</a>
    </p>

</body>

</html>