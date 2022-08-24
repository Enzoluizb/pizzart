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
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<main class="conteudo mx-auto container">
    <section class="conteudo-principal row py-5">
        <div class="conteudo-principal-escrito col-md-6">
            <!-- <img class="conteudo-principal-imagem" src="assets/img/logo.jpg" alt=""> -->
            <h1 class="conteudo-principal-escrito-titulo ">PIZZART</h1>
            <h2 class="conteudo-principal-escrito-subtitulo ">Você está quase lá</h2>
        </div>
        <div class="col-md-6">
            <div class="login-screen">
                <form class="form p-2 pt-5">
                    <h3 class="title">Entre Para Continuar</h3>
                    <input type="email" name="user" placeholder="Email" class="rounded-3 border border-dark px-3 mb-2" />
                    <input type="password" name="pass" placeholder="Senha" class="rounded-3 border border-dark px-3 mb-2" />
                    <button class="btn">Entrar</button>
                    <a href="#">Esqueceu a Senha?</a>
                    <p class="description">Criar Conta?<a href="cadastro.php">Clique Aqui</a></p>
                </form>
            </div>
        </div>
    </section>
    <br>
</main>


<?php
include "footer.php";
?>