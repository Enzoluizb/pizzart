<?php
$title = "Pizzart | Lista de Usuários";
include "header.php";
include "../include/mysql.php";

if ($_SESSION['administrador'] == 0) {
    echo "<h1>Você não tem permissão para acessar essa página</h1>";
    die();
}
?>

<?php

$sql = $pdo->prepare('SELECT * FROM usuario');
if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border='1'>";
    echo "<tr>";
    echo "  <th>Código</th>";
    echo "  <th>Nome</th>";
    echo "  <th>Email</th>";
    echo "  <th>Telefone</th>";
    echo "  <th>Senha</th>";
    echo "  <th>Endereço</th>";
    echo "  <th>Administrador</th>";
    echo "  <th>Alterar</th>";
    echo "  <th>Excluir</th>";
    echo "</tr>";
    foreach ($info as $key => $value) {
        echo "<tr>";
        echo "<td>" . $value['idusuario'] . "</td>";
        echo "<td>" . $value['nome'] . "</td>";
        echo "<td>" . $value['email'] . "</td>";
        echo "<td>" . $value['telefone'] . "</td>";
        echo "<td>" . $value['senha'] . "</td>";
        echo "<td>" . $value['endereco'] . "</td>";
        echo "<td>" . $value['administrador'] . "</td>";

        echo "<td><center><a href='altUsuario.php?id=" . $value['idusuario'] . "'>(+)</a></center></td>";
        echo "<td><center><a href='delUsuario.php?id=" . $value['idusuario'] . "'>(-)</a></center></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

<div class="botoes">
    <input id="li" type="button" value="Cadastrar" onclick="parent.location='cadUsuario.php'">
    <h3><a href="index.php">Principal</a></h3>
</div>




<?php
include "footer.php";
?>