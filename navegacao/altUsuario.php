<?php

include "../include/MySql.php";

$idusuario = "";
$nome = "";
$email = "";
$telefone = "";
$endereco = "";
$senha = "";
$administrador = "";

$nomeErro = "";
$emailErro = "";
$telefoneErro = "";
$enderecoErro = "";
$senhaErro = "";
$msgErro = "";

if (isset($_GET['id'])) {
    $idusuario = $_GET['id'];
    $sql = $pdo->prepare("SELECT * FROM USUARIO WHERE idusuario = ?");
    if ($sql->execute(array($idusuario))) {
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($info as $key => $value) {
            $idusuario = $value['idusuario'];
            $nome = $value['nome'];
            $email = $value['email'];
            $telefone = $value['telefone'];
            $endereco = $value['endereco'];
            $administrador = $value['administrador'];
            $senha = '';
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {

    if (empty($_POST['nome']))
        $nomeErro = "Nome é obrigatório!";
    else
        $nome = $_POST['nome'];

    if (empty($_POST['email']))
        $emailErro = "Email é obrigatório";
    else
        $email = $_POST['email'];

    if (empty($_POST['telefone']))
        $telefoneErro = "Telefone é obrigatório!";
    else
        $telefone = $_POST['telefone'];

    if (empty($_POST['endereco']))
        $enderecoErro = "Endereço é obrigatório!";
    else
        $endereco = $_POST['endereco'];

    if (empty($_POST['senha']))
        $senhaErro = "Senha é obrigatório!";
    else
        $senha = $_POST['senha'];

    if (isset($_POST['administrador']))
        $administrador = 1;
    else
        $administrador = 0;


    if ($email && $nome && $senha && $telefone && $endereco) {
        //Verificar se ja existe o email
        $sql = $pdo->prepare("SELECT * FROM USUARIO WHERE email = ? AND idusuario <> ?");
        if ($sql->execute(array($email, $idusuario))) {
            if ($sql->rowCount() <= 0) {
                if ($email && $nome && $senha && $telefone && $endereco) {
                    $sql = $pdo->prepare("UPDATE USUARIO SET idusuario=?,nome=?,email=?,telefone=?, endereco=?, senha=?, administrador=? WHERE idusuario=?");
                    if ($sql->execute(array($idusuario, $nome, $email, $telefone, $endereco, md5($senha), $administrador, $idusuario))) {
                        $msgErro = "Dados alterados com sucesso!";
                        header('location:listUsuarios.php');
                    } else {
                        $msgErro = "Dados não cadastrados!";
                    }
                } else {
                    $msgErro = "Email de usuário já cadastrado!";
                }
            } else {
                $msgErro = "Erro no comando UPDATE";
            }
        } else {
            $msgErro = "Dados não alterados!";
        }
    }
}

include "header.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="../css/monte.css">
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <fieldset>
            <div class="from">
                <legend>Alterar Usuário</legend>
                Nome: <input type="text" name="nome" value="<?php echo $nome ?>">
                <span class="obrigatorio">*<?php echo $nomeErro ?></span>
                <br>
                Email:<input type="text" name="email" value="<?php echo $email ?>">
                <span class="obrigatorio">*<?php echo $emailErro ?></span>
                <br>
                Telefone:<input type="text" name="telefone" value="<?php echo $telefone ?>">
                <span class="obrigatorio">*<?php echo $telefoneErro ?></span>
                <br>
                Endereço:<input type="text" name="endereco" value="<?php echo $endereco ?>">
                <span class="obrigatorio">*<?php echo $enderecoErro ?></span>
                <br>
                Senha:<input type="password" name="senha" value="<?php echo $senha ?>">
                <span class="obrigatorio">*<?php echo $senhaErro ?></span>
                <br>
                <input type="checkbox" name="administrador" id="">Administrador
                <br>
                <br>
                <input class="submit" type="submit" value="Salvar" name="submit">
        </fieldset>
    </form>
    <span><?php echo $msgErro ?></span>
    </div>
</body>

</html>