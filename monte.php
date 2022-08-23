<?php 
$title = "Pizzart | Monte sua Pizza";
include "header.php";
?>


<main class="conteudo">
        <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <h1 class="conteudo-principal-escrito-titulo">PIZZART</h1>
                <h2 class="conteudo-principal-escrito-subtitulo">Monte sua pizza da maneira que quiser!</h2>
            </div>
            <img class="conteudo-principal-imagem" src="assets/imgs/pizzartpng.png" alt="">
        </section>

        <section class="conteudo-secundario">
            <h3 class="conteudo-secundario-titulo"><strong>Quer saber como montar?</strong></h3>
            <p class="conteudo-secundario-paragrafo">1.Basta você <strong>clicar nos ingredientes</strong> para seleciona-los
            </p>
            <p class="conteudo-secundario-paragrafo">2.Após clicar, finalize seu pedido clicando no botão <em>"finalizar
                    pedido"</em></p>
        </section>
    </main>
    <section>
        <div class="nome">
            <h1>MASSA</h1>
            <p>Escolha uma opção</p>
        </div>
        <div class="massa">
            <img src="assets/imgs/massas/tradicional.jpg" alt="">
            <img src="assets/imgs/massas/integral.jpg" alt="">
        </div>
        <div class="escrito-massa">
            <p>Tradicional</p>
            <p>Integral</p>
        </div>
        <div class="nome">
            <h1>TAMANHO</h1>
            <p>Escolha o tamanho</p>
        </div>
        <div class="tamanho">
            <img src="assets/imgs/tamanho/20CM.png" alt="">
            <img src="assets/imgs/tamanho/30CM.png" alt="">
            <img src="assets/imgs/tamanho/40CM.png" alt="">
        </div>
        <div class="escrito-tamanho">
            <p>Pequena</p>
            <p>Média</p>
            <p>Grande</p>
        </div>
        <div class="nome">
            <h1>MOLHO</h1>
            <p>Escolha seu molho</p>
        </div>
        <div class="molho">
            <img src="assets/imgs/molho/tomate.png" alt="">
            <img src="assets/imgs/molho/pimenta.png" alt="">
            <img src="assets/imgs/molho/pesto.png" alt="">
        </div>
        <div class="escrito-molho">
            <p>Tomate</p>
            <p>Pimenta</p>
            <p>Pesto</p>
        </div>
        <div class="nome">
            <h1>QUEIJOS</h1>
            <p>Escolha um queijo</p>
        </div>
        <div class="queijo">
            <img src="assets/imgs/queijos/gorgonzola.jpg" alt="">
            <img src="assets/imgs/queijos/mussarela.webp" alt="">
            <img src="assets/imgs/queijos/parmesao.webp" alt="">
        </div>
        <div class="escrito-queijo">
            <p>Gorgonzola</p>
            <p>Mussarela</p>
            <p>Parmesão</p>
        </div>
        <div class="nome">
            <h1>CARNES</h1>
            <p>Escolha uma carne</p>
        </div>
        <div class="carne">
            <img src="assets/imgs/carnes/bacon.png" alt="">
            <img src="assets/imgs/carnes/calabresa.png" alt="">
            <img src="assets/imgs/carnes/frango.png" alt="">
        </div>
        <div class="escrito-carne">
            <p>Bacon</p>
            <p>Calabresa</p>
            <p>Frango</p>
        </div>
        <div class="nome">
            <h1>COMPLEMENTOS</h1>
            <p>Escolha seu complemento</p>
        </div>
        <div class="complemento">
            <img src="assets/imgs/complementos/cebola.jpg" alt="">
            <img src="assets/imgs/complementos/ovo.jpg" alt="">
            <img src="assets/imgs/complementos/tomatecereja.jpg" alt="">
        </div>
        <div class="escrito-complemento">
            <p>Cebola</p>
            <p>Ovo</p>
            <p>Tomate</p>
        </div>
    </section>
    <div class="finalizar">
    <input type="button" value="Finalizar pedido">
    </div>
<?php 
include "footer.php";
?>

