<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home - Avaliação 02</title>
</head>
<body>
    <h2>Home - Avaliação 02</h2>

    <form action="salvar.php" method="post">
        <label for="nome">Nome do produto: </label>
        <input type="text" name="nome" id="nome" required><br>
        
        <label for="preco">Preço: </label>
        <input type="number" name="preco" id="preco" step="0.01" required><br>

        <label for="quantidade">Quantidade do lote: </label>
        <input type="number" name="quantidade" id="quantidade" required><br>

        <button type="submit">Cadastrar</button>
    </form>

    <p>
        <a href="listar.php">Ver Clientes Cadastrados</a>
    </p>
</body>
</html>