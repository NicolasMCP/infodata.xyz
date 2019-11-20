<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do LAMP e Node.js (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--apache-->

    <h1>Instala&ccedil;&atilde;o do Apache no Linux</h1>

    <h2 class="reduzido">Testado no Debian <span style="font-family: 'Noto Sans', sans-serif;">9.8</span> Stretch,
        no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster,<br/>no
        Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">19.2</span> Tina e no
        MX-Linux <span style="font-family: 'Noto Sans', sans-serif;">18.1</span></h2>
    <h3>Instalando o Apache</h3>
    <br>
    <iframe width="800" height="450" src="https://www.youtube.com/embed/F39XPAKIf-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
    <br>
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
    <p class="comum"><strong>Nota:</strong> No Linux Debian 9.8 Stretch ser&aacute; instalado <strong>Apache &eacute; 2.4.25</strong></p>
    <p class="comum">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Linux Debian 10 Buster ser&aacute; instalado <strong>Apache 2.4.29</strong></p>
    <p class="comum">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Linux Mint 19.1 a vers&atilde;o do <strong>Apache &eacute; 2.4.29</strong></p>
    <p class="comum">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No MX-Linux 18.1 a vers&atilde;o do <strong>Apache &eacute; 2.4.25</strong>
     e embora nele tenha a op&ccedil;&atilde;o de &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instalar automaticamente o Apache, MariaDB e PHP
        7.0, se voc&ecirc; optar por essa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;abordagem (instalar tudo em alguns clicks), <strong>n&atilde;o fa&ccedil;a esta instala&ccedil;&atilde;o
        manual.</strong><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Em vez disso va em: Configura&ccedil;&otilde;es &gt; MX Ferramentas &gt; MX-Instalador de Pacotes 
        <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt; Servidores.
        <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selecione 'Local Web Server - apache2, php7, mariaDB' e clique no bot&atilde;o<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'Instalar'<br/>
        <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pessoalmente prefiro a instalação manual, não somente por ter mais controle,<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mas porque precisso usar versões mais atuais do PHP.</p>

</section>

<?php
for($i=0; $i<23; $i++) {echo'<br/>';}
include("rodape.php");
?>
