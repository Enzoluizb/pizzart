<?php
$title = "Pizzart | Suporte";
include "header.php";



$nome = "";
$email = "";
$telefone = "";
$mensagem = "";

$nomeErro = "";
$emailErro = "";
$telefoneErro = "";
$mensagemErro = "";
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

    if (empty($_POST['mensagem']))
        $mensagemErro = "Mensagem é obrigatório!";
    else
        $mensagem = $_POST['mensagem'];

    if ($email && $nome && $mensagem && $telefone) {
        //Verificar se ja existe o email
        $sql = $pdo->prepare("SELECT * FROM SUPORTE WHERE email = ?");
        if ($sql->execute(array($email))) {
            if ($sql->rowCount() <= 0) {
                $sql = $pdo->prepare("INSERT INTO SUPORTE (codigo, nome, email, telefone, mensagem)
                                                VALUES (null, ?, ?, ?, ?)");
                if ($sql->execute(array($nome, $email, $telefone, $mensagem))) {
                    $msgErro = "Dados cadastrados com sucesso!";
                    $nome = "";
                    $email = "";
                    $telefone = "";
                    $mensagem = "";
                   // header('location:.php');
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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/75cc8e2d46.js" crossorigin="anonymous"></script>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="assets/css/suporte.css">
</head>

<main class="conteudo">
        <div class="centro">
            <form method="POST" enctype="multipart/form-data" class="form p-3 mt-2">
                <div class="div-lado1">
                    <h2><b>MANDE SUA MENSAGEM</b></h2>
                    <div class="form-contro">
                        <label for="nome">Digite seu nome:</label>
                        <input type="text" name="nome" placeholder="Nome" class="rounded-3 border border-dark px-3 mb-2 p-50 h5" value="<?php echo $nome ?>" />
                        <span class="obrigatorio"><?php echo $nomeErro ?></span>
                    </div>
                    <div class="form-contro">
                        <label for="nome">Digite seu email:</label>
                        <input type="text" name="email" placeholder="Email" class="rounded-3 border border-dark px-3 mb-2 h5" value="<?php echo $email ?>" />
                        <span class="obrigatorio"><?php echo $emailErro ?></span>
                    </div>
                    <div class="form-contro">
                        <label for="idade">Digite seu telefone:</label>
                        <input type="text" name="telefone" placeholder="Número com DDD" class="rounded-3 border border-dark px-3 mb-2 h5" value="<?php echo $telefone ?>">
                        <span class="obrigatorio"><?php echo $telefoneErro ?></span>
                    </div>
                    <div class="form-contro">
                        <label for="mensagem">Digite sua mensagem:</label>
                        <input type="text" name="mensagem" placeholder="Escreva sua mensagem" class="rounded-3 border border-dark px-3 mb-2 h5" value="<?php echo $mensagem ?>">
                        <span class="obrigatorio"><?php echo $mensagemErro ?></span>
                    </div>
                    <div class="enviar">
                        <input type="submit" value="Enviar" name="submit">
                    </div>
                </div>
            </form>

            <div class="div-lado2">
                <div class="contato">
                    <h2><b>CONTATO</b></h2>
                    <div class="numero">
                        <div class="numimg">
                            <div><img class="tele" src="assets/imgs/suporte/telefone.png"></div>
                            <div>(47) 9999-9999</div>
                        </div>
                        <br>
                        <div class="numimg">
                            <div><img class="tele" src="assets/imgs/suporte/app.png"></div>
                            <div>(47) 97777-6666</div>
                        </div>
                        <h2><b>LOCALIZAÇÃO</b></h2>
                        <div class="local">
                            <div>R. Visc. de Taunay, 730,</div>
                            <div>Atiradores, Joinville - SC</div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
<?php
include "footer.php";
?>