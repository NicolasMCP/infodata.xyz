<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 20/01/2018
    Nota : Organizar as dicas do Google (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>
    <!--google-->

        <h1>Dicas do Google</h1>

        <h2>Google Fonts</h2>
        <p class="comum">Visualize os fontes de letra a incluir na sua aplica&ccedil;&atilde;o</p>
        <p class="miniatura">Procedimento</p>
        <div class="box sombra">
            <a href="https://fonts.google.com/" target="_blank" class="a">https://fonts.google.com/</a><br/>
        </div>

        <p class="comum">dentro da p&aacute;gina escolha um fonte</p>
        <p class="comum">depois de escolhido clique no '+' (circulo vermelho)</p>
        <p class="comum">repare que abaixo aparecer&aacute; 1 Family Selected, (clique nessa aba)</p>
        <p class="comum">abrir&aacute; a janela, (clique em CUSTOMIZE)</p>
        <p class="comum">selecione todos os tipos de carateristicas do fonte que vai usar e (clique em EMBED)</p>
        <p class="comum">(clique em @IMPORT), e copie (ctrl + c) a(s) linha(s) dentro dos 'styles'</p>
        <p class="miniatura">C&oacute;digo</p>
        <div class="box sombra">
            @import url('https://fonts.googleapis.com/css?family=Arvo:400,700');<br/>
        </div>

        <p class="comum">No inicio do seu CSS voc&ecirc; pode incluir essa linha (quadro anterior)</p>
        <p class="comum">para usar o fonte basta</p>
        <p class="miniatura">C&oacute;digo</p>
        <div class="box sombra">
            font-family: Arvo, serif;<br/>
        </div>
    </section>

<?php
for($i=0; $i<16; $i++) {echo'<br/>';}
include("rodape.php");
?>
