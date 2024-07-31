<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $conn->query($sql_code);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['email'] = $usuario['email'];

        header("Location: principal.php");
    } else {
        $mensagem_erro = "Falha ao logar! E-mail ou senha incorretos ou usuário inativo";
    }
}
?>
