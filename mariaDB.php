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

        <h1>MariaDB no Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch<br/>
            e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>

    <!--MariaDB-->
        <h2>Instalando MariaDB em vez do MySQL</h2>
        <h3>Só precisa descomentar os repositórios oficiais principais</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo apt install mysql-server<br/>
        </div>
        <h3>Se não funcionar verifique se os seus Repositorios tem no final 'non-free'</h3>
        <h4>Exemplo</h4>
        <div class="box sombra">
            # Oficial de stretch<br/>
             deb http://ftp.us.debian.org/debian/ stretch main contrib non-free<br/>
            <br/>
            # Atualizações de seguridade<br/>
             deb http://security.debian.org/debian-security stretch/updates main contrib non-free<br/>
        </div>

    </section>

<?php
for($i=0; $i<21; $i++) {echo'<br/>';}
include("rodape.php");
?>