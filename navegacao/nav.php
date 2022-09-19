<?php session_start(); ?>

<header class="cabecalho">
    <a href="index.php"><img class="cabecalho-imagem" src="../assets/imgs/pizzartpng.png" alt="Logo da pizzart"></a>
    <nav class="cabecalho-menu">
        <a class="cabecalho-menu-item" href="monte.php">Monte sua pizza</a>
        <a class="cabecalho-menu-item" href="suporte.php">Suporte</a>
        <a class="cabecalho-menu-item" href="login.php">Login/Inscreva-se</a>
    </nav>
    <div class="sessao">
    <?php if (empty($_SESSION['nome'])){?>
            <h1 class="logado">Você não está logado!</h1>
            <h3><a href="login.php">Login</a></h3>
        <?php } else { ?>
            <h1>Olá <?php echo $_SESSION['nome'] ?>!</h1>
            <h3><a href="logout.php">Encerrar sessão</a></h3>
        <?php } ?>
    </div>
</header>