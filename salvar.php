<?php require_once 'validacoes.php' ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Produtos</title>
</head>

<body>

    <h1>Salvar Produtos</h1>


    <?php
    // TODO: Inserir validações antes de incluir o arquivo de conexão
    if (form_nao_enviado()) {
        exit('<h3>Por favor, retorne à home e preencha o formulario.</h3> ');
    }

    if (existe_campos_em_branco($_POST)) {
        exit('<h3>Por favor, preencha todos os campos do form</h3>');
    }

    require_once 'conexao.php'; // incluir arquivos de conexão
    
    // armazenar dados do form em variáveis locaix
    $nome = $_POST['nome'];
    $preco = number_format((float)$_POST['preco'], 2, '.', '');
    $quantidade = $_POST['quantidade'];

    // estabelecer a conexão com o banco de dados
    $conn = conectar_banco();

    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        exit("Erro na preparação de consulta. Preencha o form novamente");
    }

    // bind (associação) dos parametros
    // Basicamente, vamos substituir as '?' pelos valores das variaveis
    mysqli_stmt_bind_param($stmt, "sdi", $nome, $preco, $quantidade);

    // Executa o comando e verifica o retorno
    if (mysqli_stmt_execute($stmt)) {
        echo "<h3>Produto cadastrado com sucesso!</h3>";
    } else {
        echo "<h3>Erro ao salvar: " . mysqli_stmt_error($stmt) . "</h3>";
    }

    mysqli_close($conn); // encerra a conexão do banco
    
    ?>


    <p>
        <a href="index.php"> Voltar a Home</a>
    </p>
</body>

</html>