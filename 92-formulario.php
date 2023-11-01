<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];


    cadastrarUsuario($nome, $email);
}

function cadastrarUsuario($nome, $email) {


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
