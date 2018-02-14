<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do LAMP e Node.js (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>
    <!--apache-->

        <h1>Apache no Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch<br/>
            e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>

        <h2>Instalar Apache 2.4.29</h2>
        <h3>Instalando o Apache 2.4.29</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo apt install apache2<br/>
        </div>

        <h3>Teste a instalação</h3>
        <h4>Abra no seu Navegador</h4>
        <div class="box sombra">
            <a href="http://localhost/" class="a" target="_blank">http://localhost/</a>
        </div>

    </section>

<?php
for($i=0; $i<23; $i++) {echo'<br/>';}
include("rodape.php");
?>