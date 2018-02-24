<!DOCTYPE html>
<!--
Autor  : Nicolas Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do LAMP e Node.js (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--apache-->

    <h1>Instalação do Apache no Linux</h1>

    <h2 class="reduzido">Testado no Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch,
        no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster e no<br/>
        Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">18.3</span> Sylvia</h2>

    <h3>Instalando o Apache</h3>
    <p class="comum">A instalação é extremamente simples, basta digitar:</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo apt install apache2<br/>
    </div>

    <p class="comum">Teste a instalação</p>
    <p class="miniatura">Abra no seu Navegador</p>
    <div class="box sombra">
        <a href="http://localhost/" class="a" target="_blank">http://localhost/</a>
    </div>
    <p class="comum">Nota: No Linux Debian será instalado <strong>Apache 2.4.29</strong></p>
    <p class="comum">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Linux Mint a versão do <strong>Apache é 2.4.18</strong></p>

</section>

<?php
for($i=0; $i<23; $i++) {echo'<br/>';}
include("rodape.php");
?>