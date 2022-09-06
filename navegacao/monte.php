<?php
$title = "Pizzart | Monte sua Pizza";
include "header.php";
include "../include/MySql.php";
?>


<main class="conteudo">
    <section class="conteudo-principal">
        <div class="conteudo-principal-escrito">
            <h1 class="conteudo-principal-escrito-titulo">PIZZART</h1>
            <h2 class="conteudo-principal-escrito-subtitulo">Monte sua pizza da maneira que quiser!</h2>
        </div>
        <img class="conteudo-principal-imagem" src="../assets/imgs/pizzartpng.png" alt="">
    </section>

    <section class="conteudo-secundario">
        <h3 class="conteudo-secundario-titulo"><strong>Quer saber como montar?</strong></h3>
        <p class="conteudo-secundario-paragrafo">1.Basta você <strong>clicar nos ingredientes</strong> para seleciona-los
        </p>
        <p class="conteudo-secundario-paragrafo">2.Após clicar, finalize seu pedido clicando no botão <em>"finalizar
                pedido"</em></p>
    </section>
</main>
<form action="pedido.php" method="POST">
    <section>
        <div class="nome">
            <h1>MASSA</h1>
            <p>Escolha uma opção</p>
        </div>
        <div class="massa">
        </div>
        <div class="escrito-massa">
            <div class="ui radio checkbox">
                <label for="massa_trad">
                    <img src="../assets/imgs/massas/tradicional.jpg" alt="">
                    Tradicional
                </label>
                <input type="radio" name="tipo_massa" value="Tradicional" id="massa_trad">
            </div>
            <div class="ui radio checkbox">
                <label for="massa_int">
                    <img src="../assets/imgs/massas/integral.jpg" alt="">
                    Integral
                </label>
                <input type="radio" name="tipo_massa" value="Integral" id="massa_int">
            </div>
        </div>
        <div class="nome">
            <h1>TAMANHO</h1>
            <p>Escolha o tamanho</p>
        </div>
        <div class="escrito-tamanho">
            <div class="ui radio checkbox">
                <label for="massa_peq">
                    <img src="../assets/imgs/tamanho/20CM.png" alt="">
                    Pequena</label>
                <input type="radio" name="tipo_tamanho" value="Pequena" id="massa_peq">
            </div>
            <div class="ui radio checkbox">
                <label for="massa_med">
                    <img src="../assets/imgs/tamanho/30CM.png" alt="">
                    Média</label>
                <input type="radio" name="tipo_tamanho" value="Média" id="massa_med">
            </div>
            <div class="ui radio checkbox">
                <label for="massa_gra">
                    <img src="../assets/imgs/tamanho/40CM.png" alt="">
                    Grande</label>
                <input type="radio" name="tipo_tamanho" value="Grande" id="massa_gra">
            </div>
        </div>
        <div class="nome">
            <h1>MOLHO</h1>
            <p>Escolha seu molho</p>
        </div>
        <div class="escrito-molho">
            <div class="ui radio checkbox">
                <label for="molho_tom">
                    <img src="../assets/imgs/molho/tomate.png" alt="">
                    Tomate</label>
                <input type="radio" name="tipo_molho" value="Tomate" id="molho_tom">
            </div>
            <div class="ui radio checkbox">
                <label for="molho_pim">
                    <img src="../assets/imgs/molho/pimenta.png" alt="">
                    Pimenta</label>
                <input type="radio" name="tipo_molho" value="Pimenta" id="molho_pim">
            </div>
            <div class="ui radio checkbox">
                <label for="molho_pes">
                    <img src="../assets/imgs/molho/pesto.png" alt="">
                    Pimenta</label>
                <input type="radio" name="tipo_molho" value="Pesto" id="molho_pes">
            </div>
        </div>
        <div class="nome">
            <h1>QUEIJOS</h1>
            <p>Escolha um queijo</p>
        </div>
        <div class="escrito-queijo">
            <div class="ui radio checkbox">
                <label for="queijo_gor">
                    <img src="../assets/imgs/queijos/gorgonzola.jpg" alt="">
                    Gorgonzola</label>
                <input type="radio" name="tipo_queijo" value="Gorgonzola" id="queijo_gor">
            </div>
            <div class="ui radio checkbox">
                <label for="queijo_mus">
                    <img src="../assets/imgs/queijos/mussarela.webp" alt="">
                    Mussarela</label>
                <input type="radio" name="tipo_queijo" value="Mussarela" id="queijo_mus">
            </div>
            <div class="ui radio checkbox">
                <label for="queijo_par">
                    <img src="../assets/imgs/queijos/parmesao.webp" alt="">
                    Parmesão</label>
                <input type="radio" name="tipo_queijo" value="Parmesão" id="queijo_par">
            </div>
        </div>
        <div class="nome">
            <h1>CARNES</h1>
            <p>Escolha uma carne</p>
        </div>
        <div class="escrito-carne">
            <div class="ui radio checkbox">
                <label for="carne_bac">
                    <img src="../assets/imgs/carnes/bacon.png" alt="">
                    Bacon</label>
                <input type="radio" name="tipo_carne" value="Bacon" id="carne_bac">
            </div>
            <div class="ui radio checkbox">
                <label for="carne_cal">
                    <img src="../assets/imgs/carnes/calabresa.png" alt="">
                    Calabresa</label>
                <input type="radio" name="tipo_carne" value="Calabresa" id="carne_cal">
            </div>
            <div class="ui radio checkbox">
                <label for="carne_fra">
                    <img src="../assets/imgs/carnes/frango.png" alt="">
                    Frango</label>
                <input type="radio" name="tipo_carne" value="Frango" id="carne_fra">
            </div>
        </div>
        <div class="nome">
            <h1>COMPLEMENTOS</h1>
            <p>Escolha um complemento</p>
        </div>
        <div class="escrito-carne">
            <div class="ui radio checkbox">
                <label for="complemento_ceb">
                    <img src="../assets/imgs/complementos/cebola.jpg" alt="">
                    Cebola</label>
                <input type="radio" name="tipo_complemento" value="Cebola" id="complemento_ceb">
            </div>
            <div class="ui radio checkbox">
                <label for="complemento_ovo">
                    <img src="../assets/imgs/complementos/ovo.jpg" alt="">
                    Ovo</label>
                <input type="radio" name="tipo_complemento" value="Ovo" id="complemento_ovo">
            </div>
            <div class="ui radio checkbox">
                <label for="complemento_tomatecereja">
                    <img src="../assets/imgs/complementos/tomatecereja.jpg" alt="">
                    Tomate cereja</label>
                <input type="radio" name="tipo_complemento" value="Tomate Cereja" id="complemento_tomatecereja">
            </div>
        </div>
        <div class="nome">
            <h1>Bebidas</h1>
            <p>Escolha uma bebida</p>
        </div>
        <div class="escrito-carne">
            <div class="ui radio checkbox">
                <label for="bebida_coca">
                    <img src="../assets/imgs/bebidas/coca.jfif" alt="">
                    COCA-COLA 2L</label>
                <input type="radio" name="tipo_bebida" value="COCA-COLA 2L" id="bebida_coca">
            </div>
            <div class="ui radio checkbox">
                <label for="bebida_fanta">
                    <img src="../assets/imgs/bebidas/fanta.webp" alt="">
                    FANTA 2L</label>
                <input type="radio" name="tipo_bebida" value="FANTA 2L" id="bebida_fanta">
            </div>
            <div class="ui radio checkbox">
                <label for="bebida_guarana">
                    <img src="../assets/imgs/bebidas/guarana.webp" alt="">
                    GUARANÁ 2L</label>
                <input type="radio" name="tipo_bebida" value="GUARANÁ 2L" id="bebida_guarana">
            </div>
        </div>
        <div class="finalizar">
            <input type="submit" value="Finalizar pedido">
        </div>
    </section>
</form>
<?php
include "footer.php";
?>