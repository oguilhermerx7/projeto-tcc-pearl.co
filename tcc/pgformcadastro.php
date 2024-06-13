<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylepgformcad.css">
    <title>PEARL.CO - Formulário</title>
</head>
<body>
    <div class="container">
        <div class="imagem-formulario">
            <img src="imgform.svg" alt="Imagem Formulário">
        </div>
        <div class="formulario">
            <form action="processa_cadastro.php" method="post">
                <div class="header-formulario">
                    <div class="titulo-formulario">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="botao-login">
                        <a href="login.html">Entrar</a>
                    </div>
                </div>
                <div class="inputs">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite seu primeiro nome" required>
                    </div>
                    <div class="input-box">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu E-mail" required>
                    </div>
                    <div class="input-box">
                        <label for="celular">Celular</label>
                        <input type="tel" name="celular" id="celular" placeholder="(xx) xxxx-xxxx" required>
                    </div>
                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="input-box">
                        <label for="confirmasenha">Confirme a Senha</label>
                        <input type="password" name="confirmasenha" id="confirmasenha" placeholder="Confirme sua senha" required>
                    </div>
                </div>
                <div class="inputs-genero">
                    <div class="titulo-genero">
                        <h6>Gênero</h6>
                    </div>
                    <div class="grupo-inputs-genero">
                        <div class="input-genero">
                            <input type="radio" id="masculino" name="genero" value="masculino" required>
                            <label for="masculino">Masculino</label>
                        </div>
                        <div class="input-genero">
                            <input type="radio" id="feminino" name="genero" value="feminino" required>
                            <label for="feminino">Feminino</label>
                        </div>
                        <div class="input-genero">
                            <input type="radio" id="outros" name="genero" value="outros" required>
                            <label for="outros">Outros</label>
                        </div>
                        <div class="input-genero">
                            <input type="radio" id="prefiro-nao-dizer" name="genero" value="prefiro-nao-dizer" required>
                            <label for="prefiro-nao-dizer">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>
                <div class="botao-cadastro">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
            <div class="botao-continuar">
                <a href="../html/principal.html" class="button-link">Continuar</a>
            </div>
        </div>
    </div>
</body>
</html>
