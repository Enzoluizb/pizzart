<?php
$title = "Pizzart | Finalizar pedido";
include "header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/75cc8e2d46.js" crossorigin="anonymous"></script>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../assets/css/pedido.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


<div class="container">
    <div class="ingredientes-escolhidos">
        <h1>Ingredientes escolhidos</h1>
        <p class="valor">Valor dos Ingredientes</p>
        <p>Massa: R$00,00</p>
        <p>Tamanho: R$00,00</p>
        <p>Molho: R$00,00</p>
        <p>Queijos: R$00,00</p>
        <p>Carnes: R$00,00</p>
        <p>Complementos: R$00,00</p>
    </div>
    <div class="bebidas-escolhidas">
        <h1>Bebidas escolhidas</h1>
        <p>1x COCA-COLA 2L R$00,00<img src="../assets/imgs/bebidas/coca.jfif"></p>
        <p>1x FANTA 2L R$00,00 <img class="fantaimg" src="../assets/imgs/bebidas/fanta.webp"></p>
        <p>1x GUARANÁ 2L R$00,00 <img class="guaranaimg" src="../assets/imgs/bebidas/guarana.webp"></p>
    </div>
    <div class="pagamento">
        <h1>Forma de pagamento</h1>
        <p>Total bebida + pizza: valor</p>
        <p><input type="checkbox" name="" id="">PIX</p>
        <p>CARTÃO <select name="select">
                  <option value="valor1">DÉBITO</option>
                  <option value="valor3">CRÉDITO</option>
                  </select>
        </p>
        <p><input type="checkbox" name="" id="">DINHEIRO</p>
    </div>
</div>


<?php
include "footer.php";
?>