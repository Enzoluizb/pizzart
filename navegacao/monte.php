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
                <label for="massa_trad" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/massas/tradicional.jpg" alt="">
                    <p>Tradicional</p>
                    <input type="radio" name="tipo_massa" value="Tradicional" id="massa_trad" style="margin-top: -16px;">
                </label>
            </div>
            <div class="ui radio checkbox">
                <label for="massa_int" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/massas/integral.jpg" alt="">
                    <p>Integral</p>
                    <input type="radio" name="tipo_massa" value="Integral" id="massa_int" style="margin-top: -16px;">
                </label>
            </div>
        </div>
        <div class="nome">
            <h1>TAMANHO</h1>
            <p>Escolha o tamanho</p>
        </div>
        <div class="escrito-tamanho">
            <div class="ui radio checkbox">
                <label for="massa_peq" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/tamanho/20CM.png" alt="">
                    <p>Pequena</p>
                    <input type="radio" name="tipo_tamanho" value="Pequena" id="massa_peq" style="margin-top: -16px;">
                </label>
            </div>
            <div class="ui radio checkbox">
                <label for="massa_med" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/tamanho/30CM.png" alt="">
                    <p>Média</p>
                    <input type="radio" name="tipo_tamanho" value="Média" id="massa_med" style="margin-top: -16px;">
                </label>

            </div>
            <div class="ui radio checkbox">
                <label for="massa_gra" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/tamanho/40CM.png" alt="">
                    <p>Grande</p>
                    <input type="radio" name="tipo_tamanho" value="Grande" id="massa_gra" style="margin-top: -16px;">
                </label>
            </div>
        </div>
        <div class="nome">
            <h1>MOLHO</h1>
            <p>Escolha seu molho</p>
        </div>
        <div class="escrito-molho">
            <div class="ui radio checkbox">
                <label for="molho_tom" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/molho/tomate.png" alt="">
                    <p>Tomate</p>
                    <input type="radio" name="tipo_molho" value="Tomate" id="molho_tom" style="margin-top: -16px;">
                </label>
            </div>
            <div class="ui radio checkbox">
                <label for="molho_pim" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/molho/pimenta.png" alt="">
                    <p>Pimenta</p>
                    <input type="radio" name="tipo_molho" value="Pimenta" id="molho_pim" style="margin-top: -16px;">
                </label>

            </div>
            <div class="ui radio checkbox">
                <label for="molho_pes" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/molho/pesto.png" alt="">
                    <p>Pesto</p>
                    <input type="radio" name="tipo_molho" value="Pesto" id="molho_pes" style="margin-top: -16px;">
                </label>
            </div>
        </div>
        <div class="nome">
            <h1>QUEIJOS</h1>
            <p>Escolha um queijo</p>
        </div>
        <div class="escrito-queijo">
            <div class="ui radio checkbox">
                <label for="queijo_gor" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/queijos/gorgonzola.jpg" alt="">
                    <p>Gorgonzola</p>
                    <input type="radio" name="tipo_queijo" value="Gorgonzola" id="queijo_gor" style="margin-top: -16px;">
                </label>
            </div>
            <div class="ui radio checkbox">
                <label for="queijo_mus" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/queijos/mussarela.webp" alt="">
                    <p>Mussarela</p>
                    <input type="radio" name="tipo_queijo" value="Mussarela" id="queijo_mus" style="margin-top: -16px;">
                </label>

            </div>
            <div class="ui radio checkbox">
                <label for="queijo_par" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/queijos/parmesao.webp" alt="">
                    <p>Parmesão</p>
                    <input type="radio" name="tipo_queijo" value="Parmesão" id="queijo_par" style="margin-top: -16px;">
                </label>
            </div>
        </div>
        <div class="nome">
            <h1>CARNES</h1>
            <p>Escolha uma carne</p>
        </div>
        <div class="escrito-carne">
            <div class="ui radio checkbox">
                <label for="carne_bac" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/carnes/bacon.png" alt="">
                    <p>Bacon</p>
                    <input type="radio" name="tipo_carne" value="Bacon" id="carne_bac" style="margin-top: -16px;"> 
                </label>
            </div>
            <div class="ui radio checkbox">
                <label for="carne_cal" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/carnes/calabresa.png" alt="">
                    <p>Calabresa</p>
                    <input type="radio" name="tipo_carne" value="Calabresa" id="carne_cal" style="margin-top: -16px;">
                </label>
            </div>
            <div class="ui radio checkbox">
                <label for="carne_fra" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/carnes/frango.png" alt="">
                    <p>Frango</p>
                    <input type="radio" name="tipo_carne" value="Frango" id="carne_fra" style="margin-top: -16px;">
                </label>
            </div>
        </div>
        <div class="nome">
            <h1>COMPLEMENTOS</h1>
            <p>Escolha um complemento</p>
        </div>
        <div class="escrito-carne">
            <div class="ui radio checkbox">
                <label for="complemento_ceb" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/complementos/cebola.jpg" alt="">
                    <p>Cebola</p>
                    <input type="radio" name="tipo_complemento" value="Cebola" id="complemento_ceb" style="margin-top: -16px;">
                </label>
            </div>
            <div class="ui radio checkbox">
                <label for="complemento_ovo" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/complementos/ovo.jpg" alt="">
                    <p>Ovo</p>
                    <input type="radio" name="tipo_complemento" value="Ovo" id="complemento_ovo" style="margin-top: -16px;">
                </label>
            </div>
            <div class="ui radio checkbox">
                <label for="complemento_tomatecereja" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/complementos/tomatecereja.jpg" alt="">
                    <p>Tomate Cereja</p>
                    <input type="radio" name="tipo_complemento" value="Tomate Cereja" id="complemento_tomatecereja" style="margin-top: -16px;">
                </label>
            </div>
        </div>
        <div class="nome">
            <h1>Bebidas</h1>
            <p>Escolha uma bebida</p>
        </div>
        <div class="escrito-carne">
            <div class="ui radio checkbox">
                <label for="bebida_coca" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/bebidas/coca.jfif" alt="">
                    <p>COCA-COLA 2L</p>
                    <input type="radio" name="tipo_bebida" value="COCA-COLA 2L" id="bebida_coca" style="margin-top: -16px;">
                </label>
            </div>
            <div class="ui radio checkbox">
                <label for="bebida_fanta" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/bebidas/fanta.webp" alt="">
                    <p>FANTA 2L</p>
                    <input type="radio" name="tipo_bebida" value="FANTA 2L" id="bebida_fanta" style="margin-top: -16px;">
                </label>
            </div>
            <div class="ui radio checkbox">
                <label for="bebida_guarana" style="display: flex;flex-direction: column; align-items: center;">
                    <img src="../assets/imgs/bebidas/guarana.webp" alt="">
                    <p>GUARANÁ 2L</p>
                    <input type="radio" name="tipo_bebida" value="GUARANÁ 2L" id="bebida_guarana" style="margin-top: -16px;">
                </label>
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