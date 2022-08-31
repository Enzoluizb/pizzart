<?php
$title = "Pizzart | Cadastro";
include "header.php";

include "include/mysql.php";


$nome = "";
$email = "";
$telefone = "";
$senha = "";
$cidade = "";
$administrador = "";

$nomeErro = "";
$emailErro = "";
$telefoneErro = "";
$senhaErro = "";
$cidadeErro = "";
$msgErro = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
            if (empty($_POST['nome']))
                $nomeErro = "Nome é obrigatório!";
            else
                $nome = $_POST['nome'];

            if (empty($_POST['email']))
                $emailErro = "Email é obrigatório!";
            else
                $email = $_POST['email'];

            if (empty($_POST['telefone']))
                $telefoneErro = "Telefone é obrigatório!";
            else
                $telefone = $_POST['telefone'];

            if (empty($_POST['senha']))
                $senhaErro = "Senha é obrigatório!";
            else
                $senha = $_POST['senha'];

            if (isset($_POST['administrador']))
                $administrador = 1;
            else
                $administrador = 0;

            if ($email && $nome && $senha && $telefone && $cidade) {
                $sql = $pdo->prepare("SELECT * FROM USUARIO WHERE email = ?");
                if ($sql->execute(array($email))) {
                    if ($sql->rowCount() <= 0) {
                        $sql = $pdo->prepare("INSERT INTO USUARIO (codigo, nome, email, telefone, senha, administrador, cidade)
                                                VALUES (null, ?, ?, ?, ?, ?, ?)");
                        if ($sql->execute(array($nome, $email, $telefone, md5($senha), $administrador, $cidade))) {
                            $msgErro = "Dados cadastrados com sucesso!";
                            $nome = "";
                            $email = "";
                            $telefone = "";
                            $senha = "";
                            $cidade = "";
                            header('location: login.php');
                        } else {
                            $msgErro = "Dados não cadastrados!";
                        }
                    } else {
                        $msgErro = "Email de usuário já cadastrado!";
                    }
                } else {
                    $msgErro = "Erro no comando select!";
                }
            } else {
                $msgErro = "Dados não cadastrados!";
            }
        }
    



?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/75cc8e2d46.js" crossorigin="anonymous"></script>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="assets/css/cadastro.css">
</head>

<main class="conteudo container">
    <section class="conteudo-principal row"> <!-- text-md-end -->
        <div class="conteudo-principal-escrito col-md-6">
            <h1 class="conteudo-principal-escrito-titulo">PIZZART</h1>
            <h2 class="conteudo-principal-escrito-subtitulo">Você está quase lá</h2>
        </div>
        <div class="col-md-6">

            <div class="login-screen mt-5 w-75 p-3 row py-5">
                <form class="form p-3 mt-2">
                    <legend>Cadastro de Usuário</legend>
                    <h3 class="title">Entre Para Continuar</h3>
                    <input type="text" name="username" placeholder="Nome" class="rounded-3 border border-dark px-3 mb-2" value="<?php echo $nome ?>" />
                    <span class="obrigatorio"><?php echo $nomeErro ?></span>

                    <input type="email" name="email" placeholder="Email" class="rounded-3 border border-dark px-3 mb-2" value="<?php echo $email ?>" />
                    <span class="obrigatorio"><?php echo $emailErro ?></span>

                    <input type="password" name="pass" placeholder="Senha" class="rounded-3 border border-dark px-3 mb-2" value="<?php echo $senha ?>" />
                    <span class="obrigatorio"><?php echo $senhaErro ?></span>
                    
                    <input type="text" name="telefone" placeholder="telefone" class="rounded-3 border border-dark px-3 mb-2" value="<?php echo $telefone ?>" />
                    <span class="obrigatorio"><?php echo $telefoneErro ?></span>

                    <input type="text" name="endereco" placeholder="endereço" class="rounded-3 border border-dark px-3 mb-2" value="<?php echo $cidade ?>" />
                    <span class="obrigatorio"><?php echo $cidadeErro ?></span>

                    
            <select name="cidade" id="" class="rounded-3 border border-dark px-3" >
                <?php
                $sql1 = $pdo->prepare('SELECT * FROM cidade');
                if ($sql1->execute()) {
                    $info = $sql1->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($info as $key => $value)
                        echo '<option value='.$value['codigo'].'>'.$value['nome'].'</option>';
                }
                ?>
            </select>

                    <label class="container_1">administrador
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>

                    <input class="btn" type="submit" value="Enviar" name="submit">
                    <p class="description"><a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </section>
</main>

<span><?php echo $msgErro ?></span>

<?php
include "footer.php";
?>