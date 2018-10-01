<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 14/01/2018
    Nota : Organizar as dicas do LAMP e Node.js (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>

    <h1>MariaDB no Linux</h1>
    <h2>Instalando MariaDB no Debian</h2>
    <h3 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.4</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h3>
    <a href="#linux-mint" class="a" target="_parent">Instala&ccedil;&atilde;o no Linux Mint.</a>
    <!--MariaDB-->
    <p class="comum">S&oacute; precisa descomentar os reposit&oacute;rios oficiais principais</p>
    <p class="comum">Verifique se tem estes reposit&oacute;rios</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo cat /etc/apt/sources.list<br/>
        <br>
        <p style="font-size: 12px">
            # verificar se temos estes reposit&oacute;rios, em especial o non-free (no final)<br>
            <br>
            ## Debian - stretch<br>
            deb http://ftp.us.debian.org/debian/ stretch main contrib non-free<br>
            deb-src http://ftp.us.debian.org/debian/ stretch main contrib non-free<br>
            ## Atualiza&ccedil;&otilde;es de seguran&ccedil;a<br>
            deb http://security.debian.org/ stretch/updates main contrib non-free<br>
            deb-src http://security.debian.org/ stretch/updates main contrib non-free<br>
        </p>
    </div>


    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo apt install mariadb-server<br/>
    </div>

    <p class="comum">Vamos verificar a vers&atilde;o instalada</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ mysql --version
        <br><br>
        <p style="font-size: 12px">
            mysql  Ver 15.1 Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64) using readline 5.2
        </p>
    </div>

    <?php
    include("pre-rodape.php");
    ?>
    <h5 id="linux-mint">Instalando MariaDB no Linux Mint</h5>
    <h4 class="reduzido">Testado no Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">19</span> Tara</h4>
    <a href="#top" class="a" target="_parent">Instala&ccedil;&atilde;o no Linux Debian.</a>

    <p class="comum">No Linux Mint &eacute; mais molezinha ainda, basta digitar:</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        sudo apt install mariadb-server
    </div>

    <p class="comum">Vamos verificar a vers&atilde;o instalada</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ mysql --version
        <br><br>
        <p style="font-size: 12px">
            mysql  Ver 15.1 Distrib 10.0.34-MariaDB, for debian-linux-gnu (x86_64) using readline 5.2            
        </p>
    </div>

</section>

<?php
for($i=0; $i<13; $i++) {echo'<br/>';}
include("rodape.php");
?>
