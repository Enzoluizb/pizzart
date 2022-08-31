<?php
    include "header.php";
    include "../include/MySql.php";
    include "../include/functions.php";

    session_start();
    $_SESSION['nome'] = "";
    $_SESSION['administrador'] = "";

    $email="";
    $emailErro="";
    $senha="";
    $senhaErro="";
    $msgErro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (empty($_POST['email'])){
            $emailErro = "Email é obrigatório";
        } else {
            $email = test_input($_POST['email']);
        }

        if (empty($_POST['senha'])){
            $senhaErro = "Senha é obrigatório";
        } else {
            $senha = test_input($_POST['senha']);
        }

        if ($email && $senha){
            $sql = $pdo->prepare("SELECT * FROM USUARIO WHERE email=? AND senha=?");
            if ($sql->execute(array($email, MD5($senha)))){
                $info = $sql->fetchAll(PDO::FETCH_ASSOC);
                if (count($info) > 0){
                    foreach($info as $key=>$values){
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
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <fieldset>
            <legend>Login</legend>
            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo $email ?>">
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" value="<?php echo $senha?>">
            <br>
            <input type="submit" value="Login" name="login">
        </fieldset>
        <h3><a href="cadUsuario.php">Novo cadastro</a></h3>
    </form>
    <span><?php echo $msgErro?></span>

</body>
</html>

<?php
include "footer.php";
?>