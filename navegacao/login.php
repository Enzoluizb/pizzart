<?php
$title = "Pizzart | Login";
include "header.php";
include "../include/MySql.php";
include "../include/functions.php";

session_start();
$_SESSION['nome'] = "";
$_SESSION['administrador'] = "";

$email = "";
$emailErro = "";
$senha = "";
$senhaErro = "";
$msgErro = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['email'])) {
        $emailErro = "Email é obrigatório";
    } else {
        $email = test_input($_POST['email']);
    }

    if (empty($_POST['senha'])) {
        $senhaErro = "Senha é obrigatório";
    } else {
        $senha = test_input($_POST['senha']);
    }

    if ($email && $senha) {
        $sql = $pdo->prepare("SELECT * FROM USUARIO WHERE email=? AND senha=?");
        if ($sql->execute(array($email, MD5($senha)))) {
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            if (count($info) > 0) {
                foreach ($info as $key => $values) {
                    $_SESSION['nome'] = $values['nome'];
                    $_SESSION['administrador'] = '1';
                    header('location:index.php');
                }
            } else {
                $msgErro = "Usuário não cadastrado!";
            }
        } else {
            $msgErro = "Usuário não cadastrado!";
        }
    }
}



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/75cc8e2d46.js" crossorigin="anonymous"></script>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <main class="conteudo mx-auto container">
        <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <!-- <img class="conteudo-principal-imagem" src="assets/img/logo.jpg" alt=""> -->
                <h1 class="conteudo-principal-escrito-titulo ">PIZZART</h1>
                <h2 class="conteudo-principal-escrito-subtitulo ">Você está quase lá</h2>
            </div>
            <div class="col-md-6">
                <div class="login-screen">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form p-1 pt-5">
                        <fieldset>
                            <legend>Login</legend>
                            <label for="email">Email:</label>
                            <input type="text" name="email" placeholder="Email" class="rounded-3 border border-dark px-3 mb-2" value="<?php echo $email ?>">
                            <br>
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" placeholder="Email" class="rounded-3 border border-dark px-3 mb-2" value="<?php echo $senha ?>">
                            <br>
                            <input type="submit" value="Login" name="login" class="h5 w-25">
                            <p>Não tem conta?<a href="cadUsuario.php"> Clique aqui!</a></p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <br>
</body>

</html>

<?php
include "footer.php";
?>