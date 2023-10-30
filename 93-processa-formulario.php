<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro</title>
</head>
<body>
    <form action="92-processa-formulario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Chame a função de cadastro
    cadastrarUsuario($nome, $email);
}

// Função para cadastrar o usuário
function cadastrarUsuario($nome, $email) {
    // Aqui você pode adicionar a lógica para inserir os dados no banco de dados ou fazer qualquer outra operação necessária.

    // Exemplo: Inserir dados em um banco de dados
    $conexao = new mysqli("localhost", "usuario", "senha", "banco_de_dados");

    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

    if ($conexao->query($sql) === TRUE) {
        echo "Cadastro bem-sucedido!";
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }

    $conexao->close();
}
?>
