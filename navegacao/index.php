<?php 
$title = "Pizzart | Página Inicial";
include "header.php";
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/75cc8e2d46.js" crossorigin="anonymous"></script>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../assets/css/monte.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<?php if ($_SESSION['nome'] != "") { ?>
        <h1>Olá <?php echo $_SESSION['nome'] ?>!</h1>
        <h3><a href="logout.php">Encerrar sessão</a></h3>
    <?php } else { ?>
        <h1>Você não está logado!</h1>
        <h3><a href="login.php">Login</a></h3>
    <?php } ?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/imgs/carrossel/carrossel2.png" class="img-responsive" width="1920" height="700" alt="">
    </div>
    <div class="carousel-item">
      <img src="../assets/imgs/carrossel/carrossel1.png" class="img-responsive" width="1920" height="700" alt="">
    </div>
    <div class="carousel-item">
      <img src="../assets/imgs/carrossel/carrossel3.png" class="img-responsive" width="1920" height="700" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="principal1">
    <h1>CONFIRA NOSSAS PIZZAS</h1>
</div>
<div class="principalimg">
    <a href="parma.php"><img src="../assets/imgs/principal/parma.webp" alt=""></a>
    <a href="berbere.php"><img src="../assets/imgs/principal/berbere.png" alt=""></a>
    <a href="shitake.php"><img src="../assets/imgs/principal/shitake.webp" alt=""></a>
</div>
<div class="imagenss">
<div class="principalimg2">
<img src="../assets/imgs/inicial.png" alt="">
</div>
<div class="principalimg3">
<img src="../assets/imgs/felicidade.png" alt="">
</div>
</div>
<?php 
include "footer.php";
?>

