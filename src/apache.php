<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 22/12/2017
    Nota : Organizar as dicas do LAMP e Node.js (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--apache-->

    <h1>Instala&ccedil;&atilde;o do Apache no Linux</h1>

    <h2 class="reduzido">Testado no Debian <span style="font-family: 'Noto Sans', sans-serif;">9.4</span> Stretch,
        no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster e no<br/>
        Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">19</span> Tara</h2>

    <h3>Instalando o Apache</h3>
    <p class="comum">A instala&ccedil;&atilde;o &eacute; extremamente simples, basta digitar:</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo apt install apache2<br/>
    </div>

    <p class="comum">Verificando a vers&atilde;o instalada</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo apache2 -v

        <p style="font-size: 12px;"><br>Server version: Apache/2.4.25 (Debian)<br>
            Server built:   2018-03-31T08:47:16</p>
    </div>

    <p class="comum">Teste a instala&ccedil;&atilde;o</p>
    <p class="miniatura">Abra no seu Navegador</p>
    <div class="box sombra">
        <a href="http://localhost/" class="a" target="_blank">http://localhost/</a>
    </div>
    <p class="comum">Nota: No Linux Debian 9 Stretch ser&aacute; instalado <strong>Apache &eacute; 2.4.25</strong></p>
    <p class="comum">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Linux Debian 10 Buster ser&aacute; instalado <strong>Apache 2.4.29</strong></p>
    <p class="comum">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Linux Mint a vers&atilde;o do <strong>Apache &eacute; 2.4.29</strong></p>

</section>

<?php
for($i=0; $i<23; $i++) {echo'<br/>';}
include("rodape.php");
?>