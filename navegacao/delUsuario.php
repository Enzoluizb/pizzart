<?php

include "../include/MySql.php";
$msgErro = "";
$idusuario = "";

if (isset($_GET["id"])) {
    $codigo = $_GET['id'];
    $sql = $pdo->prepare("DELETE FROM usuario WHERE idusuario = ?");
    if ($sql->execute(array($idusuario))) {
        if ($sql->rowCount() > 0) {
            $msgErro = "Usuario Excluido com sucesso";
            header('location:listUsuarios.php');
        } else {
            $msgErro = "Codigo não localizado";
        }
    } else {
        $msgErro = "Erro ao excluir";
    }
}
echo "Mensagem de erro: $msgErro";
?>