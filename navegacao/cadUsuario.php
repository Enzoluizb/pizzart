<?php
$title = "Pizzart | Cadastro";
include "header.php";
include "../include/MySql.php";

$nome = "";
$email = "";
$telefone = "";
$senha = "";
$administrador = "";
$endereco = "";

$nomeErro = "";
$emailErro = "";
$telefoneErro = "";
$cidadeErro = "";
$senhaErro = "";
$enderecoErro = "";
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

    if (empty($_POST['endereco']))
        $enderecoErro = "Endereço é obrigatório!";
    else
        $endereco = $_POST['endereco'];

    if (isset($_POST['administrador']))
        $administrador = 1;
    else
        $administrador = 0;

    if ($email && $nome && $senha && $telefone) {
        //Verificar se ja existe o email
        $sql = $pdo->prepare("SELECT * FROM USUARIO WHERE email = ?");
        if ($sql->execute(array($email))) {
            if ($sql->rowCount() <= 0) {
                $sql = $pdo->prepare("INSERT INTO USUARIO (idusuario, nome, email, telefone, senha, endereco, administrador)
                                                VALUES (null, ?, ?, ?, ?, ?, ?)");
                if ($sql->execute(array($nome, $email, $telefone, md5($senha), $endereco, $administrador))) {
                    $msgErro = "Dados cadastrados com sucesso!";
                    $nome = "";
                    $email = "";
                    $telefone = "";
                    $senha = "";
                    $endereco = "";
                } else {
                    $msgErro = "Dados não cadastrados!";
                }
            } else {
                $msgErro = "Email de usuário já cadastrado!!";
            }
        } else {
            $msgErro = "Erro no comando SELECT!";
        }
    } else {
        $msgErro = "Dados não cadastrados!";
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
    <link rel="stylesheet" href="../assets/css/cadastro.css">
</head>

<body>
    <main class="conteudo container">
        <section class="conteudo-principal row">
            <!-- text-md-end -->
            <div class="conteudo-principal-escrito col-md-6">
                <h1 class="conteudo-principal-escrito-titulo">PIZZART</h1>
                <h2 class="conteudo-principal-escrito-subtitulo">Você está quase lá</h2>
            </div>
            <div class="col-md-6">
                <div class="login-screen mt-5 row">
                    <form method="POST" enctype="multipart/form-data" class="form p-1 pt-5 h-75 d-inline-block w-100">
                        <fieldset class="fieldsetc">
                            <legend>Cadastro de Usuário</legend>
                            <label for="email">Nome:</label>
                            <input type="text" name="nome" class="rounded-3 border border-dark px-3 mb-2 w-75 h-25" placeholder="Digite seu nome" value="<?php echo $nome ?>">
                            <span class="obrigatorio"><?php echo $nomeErro ?></span>
                            <label for="email">Email:</label>
                            <input type="text" name="email" class="rounded-3 border border-dark px-3 mb-2 w-75 h-25" placeholder="Digite seu email" value="<?php echo $email ?>">
                            <span class="obrigatorio"><?php echo $emailErro ?></span>
                            <label for="email">Telefone:</label>
                            <input type="text" name="telefone" class="rounded-3 border border-dark px-3 mb-2 w-75 h-25" placeholder="Digite seu telefone" value="<?php echo $telefone ?>">
                            <span class="obrigatorio"><?php echo $telefoneErro ?></span>
                            <label for="email">Senha:</label>
                            <input type="password" name="senha" class="rounded-3 border border-dark px-3 mb-2 w-75 h-25" placeholder="Digite sua senha" value="<?php echo $senha ?>">
                            <span class="obrigatorio"><?php echo $senhaErro ?></span>
                            <label for="email">Endereço:</label>
                            <input type="text" name="endereco" class="rounded-3 border border-dark px-3 mb-2 w-75 h-25" placeholder="Digite seu endereço" value="<?php echo $endereco ?>">
                            <span class="obrigatorio"><?php echo $enderecoErro ?></span>
                            <input type="submit" value="Salvar" name="submit" class="h5">
                            <span><?php echo $msgErro ?></span>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>


</html>

<?php
include "footer.php";
?>