<?php
include_once('conexao.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];

    $sqlatualiza = "UPDATE cliente SET nome='$nome', email='$email', telefone='$telefone', datan='$data_nasc', cidade='$cidade' WHERE id='$id'";
    $result = $conn->query($sqlatualiza);

    if ($result) {
        header('Location: listar.php');
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>
