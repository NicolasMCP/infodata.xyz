<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas de configura&ccedil;&atilde;o da Porta SSH do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>

    <h1>Mudando a Porta SSH</h1>
    <h2 class="reduzido">Testado em Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no
        Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>Configurando a porta SSH</h3>

    <p class="comum">Para mudar a porta de acesso do SSH devemos editar o sshd_config</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo vim /etc/ssh/sshd_config<br>
        </code>
    </div>

    <p class="miniatura">C&oacute;digo dentro do arquivo</p>
    <div class="box sombra">
        #-------------------------------------------------<br>
        # MUDAR A PORTA NA PR&Oacute;XIMA LINHA:<br>
        Port 22<br>
       <br>
        #-------------------------------------------------<br>
    </div>

    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo /etc/init.d/ssh restart<br>
        </code>
    </div>

</section>

<?php
for($i=0; $i<21; $i++) {echo'<br>';}
include("rodape.php");
?>
