<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--linux-->

    <h1>Buscas  no Linux</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.4</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>Usando as Buscas</h3>
    <p class="comum">Localizar onde esta instalado um programa</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ which nome_programa<br>
    </div>

    <p class="comum">Buscar um arquivo na pasta</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ locate nome_arquivo<br>
    </div>

</section>

<?php
for($i=0; $i<27; $i++) {echo'<br>';}
include("rodape.php");
?>
