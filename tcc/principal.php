<?php
include('protect.php');
if(!isset($_SESSION)){
    session_start();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEARL.CO</title>
    <link rel="stylesheet" href="stylepginicial.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;900&family=Shadows+Into+Light&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <div class="header">
            <nav>
                <a class="header-logo"><span>PEARL.CO</span></a>
                <ul class="nav-list">
                    <li><a href="/"> Sobre nós</a></li>
                    <li><a href="/"> Contato</a></li>
                    <li><a href="/"> Produtos</a></li>
                    <li><a href="/"> Carrinho</a></li>
                    <li><a href="logout.php"> Sair </a></li>

                </ul>
                <form>
                    <input class="input-pesquisa" type="search" placeholder="Pesquise...">
                    <input class="input-enviar" type="submit" value="Pesquise">
                </form>
            </nav>
        </div>

        <h1>MAIORES DESTAQUES DO MOMENTO!</h1>
        <div class="produto">
            <div class="fundo-produtos">
                <div class="card-produtos">
                    <span class="card-titulo-produto">CORRENTE DE PRATA 925</span>
                </div>
                <div class="card-imagem">
                    <img src="img/correnteprata.jpeg" class="card-imagem" alt="Corrente de Prata">
                </div>
                <p class="card-valor-produto">R$ 99,99</p>
                <a href=".." class="card-botao-redireciona">Veja Mais</a>
            </div>

            <div class="fundo-produtos">
                <div class="card-produtos">
                    <span class="card-titulo-produto">ANEL DE PÉROLA</span>
                </div>
                <div class="card-imagem">
                    <img src="img/anelperola.jpeg" class="card-imagem" alt="Anel Perola">
                </div>
                <p class="card-valor-produto">R$ 149,99</p>
                <a href=".." class="card-botao-redireciona">Veja Mais</a>
            </div>

            <!-- Mais produtos podem ser adicionados aqui -->

        </div>
    </main>
    <footer>
        <div class="container">
            <ul>
                <h2> PEARL </h2>
                <p> Na PEARL.CO voce e o luxo se encontra com a elegância atemporal, celebrando a beleza eterna com um toque de sofisticação inspirado nas antigas musas gregas.</p>
                <div class="icon-redessociais">
                    <img src="img/facebook.svg" alt="facebook">
                    <img src="img/twitter.svg" alt="twitter">
                    <img src="img/instagram.svg" alt="instagram">
                    <img src="img/linkedin.svg" alt="linkedin">
                </div>
            </ul>
            <ul>
                <h3>Link</h3>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="#">Direitos</a></li>
                <li><a href="#">Algo sobre nós</a></li>
            </ul>
            <ul>
                <h3>Suporte</h3>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Informativo</a></li>
                <li><a href="#">Comunicando</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <ul>
                <h3>Entre em contato conosco</h3>
                <li>+45 99855-0571</li>
                <li>@guilherme.schmidt14@escola.pr.gov.br</li>
                <li>+45 99855-0571</li>
                <li>+45 99855-0571</li>
            </ul>
        </div>
    </footer>
</body>

</html>
