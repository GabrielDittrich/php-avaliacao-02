<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Avaliação 02</title>
</head>
<body>
    <h2>Home - Avaliação 02</h2>

    <form action="produtos.php" method="post">
        <label for="produto">Nome do produto: </label>
        <input type="text" name="produto" id="produto"><br>
        
        <label for="preco">Preço: </label>
        <input type="number" name="preco" id="preco" step="0.01"><br>

        <label for="quantidade">Quantidade do lote: </label>
        <input type="number" name="quantidade" id="quantidade"><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>