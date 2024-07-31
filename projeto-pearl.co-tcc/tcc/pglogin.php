<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylepglogin.css">
    <title>PEARL.CO - Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça seu login agora<br> E venha descobrir as maiores tendências de acessórios!</h1>
            <img src="imagem.svg" class="left-login-image" alt="Imagem">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <form action="processa_login.php" method="post">
                    <div class="textfield">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    </div>
                    <button type="submit" class="btn-login" >Login</button>
                </form>
                <h5>Não tem ainda uma conta?<br>Cadastre-se aqui!</h5>
                <a href="pgformcadastro.html">Cadastre-se</a>
            </div>
        </div>
    </div>
</body>
</html>
