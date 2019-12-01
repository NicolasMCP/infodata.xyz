<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do Sudo do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--sudo-->

    <h1>Sudo, no Linux</h1>
    <h2 class="reduzido">Testado em Debian <span style="font-family: 'Noto Sans', sans-serif;">9.4</span> Stretch e no
        Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>Configurar sudo</h3>
    <p class="comum">Voc&ecirc; deve incluir o seu usu&aacute;rio no arquivo de configura&ccedil;&atilde;o</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            # visudo<br>
        </code>
    </div>

    <p class="comum">Se o comando anterior n&atilde;o funcionar, use...</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            # apt install sudo<br>
        </code>
    </div>

    <p class="comum">dentro do arquivo (ap&oacute;s a linha do root) inclua a linha com seu usuario</p>
    <p class="miniatura">Incluir no arquivo (2&ordm; linha)</p>
    <div class="box sombra">
        root    ALL=(ALL:ALL) ALL<br>
        my      ALL=(ALL:ALL) ALL<br>
    </div>
    <p class="comum">Reinicie o computador</p>

</section>

<?php
for($i=0; $i<20; $i++) {echo'<br>';}
include("rodape.php");
?>
