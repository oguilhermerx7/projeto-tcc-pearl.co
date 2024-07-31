<?php
session_start();
if(empty($_SESSION)){
    echo "<script>location.href='index.php';</script>";
    exit();
}

include_once('conexao.php');
$logado = $_SESSION['usuario'];

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

if (!$result) {
    die("Erro na consulta: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
    <link rel="stylesheet" href="stylepglistadados.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Listagem de Clientes</h1>
            <a href="logout.php" class="logout-button">Sair</a>
        </header>
        <main>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Gênero</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($user_data = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user_data['nome']); ?></td>
                            <td><?php echo htmlspecialchars($user_data['sobrenome']); ?></td>
                            <td><?php echo htmlspecialchars($user_data['email']); ?></td>
                            <td><?php echo htmlspecialchars($user_data['celular']); ?></td>
                            <td><?php echo htmlspecialchars($user_data['genero']); ?></td>
                            <td><a href="editar.php?id=<?php echo $user_data['id']; ?>"><img src="../img/editar.png" alt="Editar"></a></td>
                            <td><a href="excluir.php?id=<?php echo $user_data['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir este cliente?');"><img src="../img/excluir.png" alt="Excluir"></a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>
