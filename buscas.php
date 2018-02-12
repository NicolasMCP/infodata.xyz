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

        <h1>Buscas no Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e</h1>
        <h1>Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>

        <h2>Buscas</h2>
        <h3>Localizar onde esta instalado um programa</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ which nome_programa<br/>
        </div>

        <h3>Buscar um arquivo na pasta</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ locate nome_arquivo<br/>
        </div>

    </section>

<?php
for($i=0; $i<23; $i++) {echo'<br/>';}
include("rodape.php");
?>
