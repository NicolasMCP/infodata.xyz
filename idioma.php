<!DOCTYPE html>
<!--
Autor  : Nicolas Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>
    <!--linux-->

        <h1>Idioma no Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch<br/>
            e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>

        <h2>Idioma dos Manuais</h2>
        <h3>Instalar mais manuais do comando 'man' em espanhol</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo apt install manpages-es manpages-es-extra<br/>
        </div>

    <?php
    include("pre-rodape.php");
    ?>

        <h2>Idioma do teclado</h2>

        <h3>Trocar o mapa do teclado no caso para brasileiro (espanhol seria 'es')</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo setxkbmap br<br/>
        </div>

    </section>

<?php
for($i=0; $i<20; $i++) {echo'<br/>';}
include("rodape.php");
?>
