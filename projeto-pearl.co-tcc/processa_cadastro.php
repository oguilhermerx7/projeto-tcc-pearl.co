<?php
include 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$senha = $_POST['senha'];
$genero = $_POST['genero'];


$sql = "INSERT INTO clientes (nome, sobrenome, email, celular, senha, genero) VALUES ('$nome','$sobrenome', '$email','$celular','$senha','$genero')";

if ($conn->query($sql) === TRUE) {
    header("Location: pglogin.php");
    exit();
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>