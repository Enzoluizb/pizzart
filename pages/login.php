<?php
$title = "Pizzart | Login";
include "header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/75cc8e2d46.js" crossorigin="anonymous"></script>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="pizzart/assets/css/login.css">
</head>
    
    <main class="conteudo">
        <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <h1 class="conteudo-principal-escrito-titulo">PIZZART</h1>
                <h2 class="conteudo-principal-escrito-subtitulo">Você está quase lá</h2>
            </div>
            <img class="conteudo-principal-imagem" src="assets/img/logo.jpg" alt="">
        </section>

        <div class="container">
                            
            <div class="login-screen">
            
                <form class="form">
                    <h3 class="title">Entre Para Continuar</h3>
                    <input type="email" name="user" placeholder="Email" class="inputs" />
                    <input type="password" name="pass" placeholder="Senha" class="inputs" />
                    <button class="btn">Entrar</button>
                    <a href="#">Esqueceu a Senha?</a>
                    <p class="description">Criar Conta?<a href="cadastro.php">Clique Aqui</a></p>
                </form>
            </div>
        </div>
    </main>
<br> <br> <br> <br> <br> <br>

<?php
include "footer.php";
?>