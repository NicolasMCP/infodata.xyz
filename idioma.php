<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 08/05/2018
    Nota : Organizar as dicas do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
    <!--linux-->

    <h1>Idioma no Linux</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>Idioma do teclado</h3>

    <p class="comum">Trocar o mapa do teclado para português brasileiro</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo setxkbmap br<br/>
    </div>

    <p class="comum">Trocar o mapa do teclado para espanhol</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo setxkbmap es<br/>
    </div>

    <?php
    include("pre-rodape.php");
    ?>

    <h4>Idioma dos Manuais</h4>
    <p class="comum">Instalar mais manuais do comando 'man' em espanhol</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo apt install manpages-es manpages-es-extra<br/>
    </div>

    <h5 class="reduzido">Não Testado</h5>

    <p class="comum">Instalar mais manuais do comando 'man' em português</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo apt install manpages-pt manpages-pt-extra<br/>
    </div>

</section>

<?php
for($i=0; $i<22; $i++) {echo'<br/>';}
include("rodape.php");
?>
