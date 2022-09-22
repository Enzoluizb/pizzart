<?php
$title = "Pizzart | Finalizar pedido";
include "header.php";

$pedido = true;
$valor = 0;

if (!isset($_POST['tipo_massa']))
    $pedido = false;
else if (!isset($_POST['tipo_tamanho']))
    $pedido = false;
else if (!isset($_POST['tipo_molho']))
    $pedido = false;
else if (!isset($_POST['tipo_queijo']))
    $pedido = false;
else if (!isset($_POST['tipo_carne']))
    $pedido = false;
else if (!isset($_POST['tipo_complemento']))
    $pedido = false;
else if (!isset($_POST['tipo_bebida']))
    $pedido = false;


if ($pedido) {
    if (empty($_SESSION['nome'])) {
        header('location:login.php');
    } else {

        if ($_POST['tipo_massa'] == 'Tradicional') {
            $valor = $valor + 10;
        }
        if ($_POST['tipo_massa'] == 'Integral') {
            $valor = $valor + 12;
        }

        if ($_POST['tipo_tamanho'] == 'Pequena') {
            $valor = $valor + 20;
        }
        if ($_POST['tipo_tamanho'] == 'Média') {
            $valor = $valor + 30;
        }
        if ($_POST['tipo_tamanho'] == 'Grande') {
            $valor = $valor + 40;
        }

        if ($_POST['tipo_molho'] == 'Tomate') {
            $valor = $valor + 10;
        }
        if ($_POST['tipo_molho'] == 'Pimenta') {
            $valor = $valor + 10;
        }
        if ($_POST['tipo_molho'] == 'Pesto') {
            $valor = $valor + 15;
        }

        if ($_POST['tipo_queijo'] == 'Gorgonzola') {
            $valor = $valor + 15;
        }
        if ($_POST['tipo_queijo'] == 'Mussarela') {
            $valor = $valor + 10;
        }
        if ($_POST['tipo_queijo'] == 'Parmesão') {
            $valor = $valor + 10;
        }

        if ($_POST['tipo_carne'] == 'Bacon') {
            $valor = $valor + 15;
        }
        if ($_POST['tipo_carne'] == 'Calabresa') {
            $valor = $valor + 10;
        }
        if ($_POST['tipo_carne'] == 'Frango') {
            $valor = $valor + 10;
        }

        if ($_POST['tipo_complemento'] == 'Cebola') {
            $valor = $valor + 10;
        }
        if ($_POST['tipo_complemento'] == 'Ovo') {
            $valor = $valor + 10;
        }
        if ($_POST['tipo_complemento'] == 'Tomate Cereja') {
            $valor = $valor + 10;
        }

        if ($_POST['tipo_bebida'] == 'COCA-COLA 2L') {
            $valor = $valor + 12;
        }
        if ($_POST['tipo_bebida'] == 'FANTA 2L') {
            $valor = $valor + 12;
        }
        if ($_POST['tipo_bebida'] == 'GUARANA 2L') {
            $valor = $valor + 12;
        }
    }
} else {
    //echo "falta complementos";
}



// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

?>

<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/75cc8e2d46.js" crossorigin="anonymous"></script>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../assets/css/pedido.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head> -->

<table>
    <tr>
        <th>Você escolheu o massa: <?php echo isset($_POST['tipo_massa']) ? $_POST['tipo_massa'] : "Não informado" ?></th>
    </tr>
    <tr>
        <th>Você escolheu o tamanho: <?php echo isset($_POST['tipo_tamanho']) ? $_POST['tipo_tamanho'] : "Não informado" ?></th>
    </tr>
    <tr>
        <th>Você escolheu o molho: <?php echo isset($_POST['tipo_molho']) ? $_POST['tipo_molho'] : "Não informado" ?></th>
    </tr>
    <tr>
        <th>Você escolheu o queijo: <?php echo isset($_POST['tipo_queijo']) ? $_POST['tipo_queijo'] : "Não informado" ?></th>
    </tr>
    <tr>
        <th>Você escolheu a carne: <?php echo isset($_POST['tipo_carne']) ? $_POST['tipo_carne'] : "Não informado" ?></th>
    </tr>
    <tr>
        <th>Você escolheu o complemento: <?php echo isset($_POST['tipo_complemento']) ? $_POST['tipo_complemento'] : "Não informado" ?></th>
    </tr>
    <tr>
        <th>Você escolheu a bebida: <?php echo isset($_POST['tipo_bebida']) ? $_POST['tipo_bebida'] : "Não informado" ?></th>
    </tr>
    <tr>
        <th>Preço total: <?php echo $valor; ?></th>
    </tr>
    <tr>
        <th>
            <select name="select">
                <option value="valor1" selected>Pix</option>
                <option value="valor2">Cartão</option>
                <option value="valor3">Dinheiro</option>
            </select>
        </th>
    </tr>
    <tr>
        <th>
            Endereço: <input type="text">
        </th>
    </tr>
    <tr>
        <th><button style="padding: 5px; border: none; background: #bdbdbd; color: black; border-radius: 5px;">Finalizar pedido</button></th>
    </tr>
</table>

<?php
include "footer.php";
?>