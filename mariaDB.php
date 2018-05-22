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
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>
    <p class="comum">Nota: A instala&ccedil;&atilde;o para Linux Mint esta logo abaixo.</p>
    <!--MariaDB-->
    <h3>Instalando MariaDB no Debian</h3>
    <p class="comum">S&oacute; precisa descomentar os reposit&oacute;rios oficiais principais</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo apt install mysql-server<br/>
    </div>

    <p class="comum">Se n&atilde;o funcionar verifique se os seus Repositorios tem no final 'non-free'</p>
    <p class="miniatura">Exemplo</p>
    <div class="box sombra">
        # Oficial de stretch<br/>
         deb http://ftp.us.debian.org/debian/ stretch main contrib non-free<br/>
        <br/>
        # Atualiza&ccedil;&odblac;es de seguridade<br/>
         deb http://security.debian.org/debian-security stretch/updates main contrib non-free<br/>
    </div>

    <p class="comum">Nota: Tomara que mudem isso logo, porque gera bastante confus&atilde;o, pensamos que estamos instalando o MySQL...</p>

    <?php
    include("pre-rodape.php");
    ?>
    <h5>Instalando MariaDB no Linux Mint</h5>
    <h4 class="reduzido">Testado no Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">18.3</span></h4>

    <p class="comum">No Linux Mint &eacute; mais molezinha ainda, basta digitar:</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        sudo apt install mariadb-server
    </div>

</section>

<?php
for($i=0; $i<10; $i++) {echo'<br/>';}
include("rodape.php");
?>