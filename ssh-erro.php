<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 21/01/2018
    Nota : Organizar as dicas do SSH do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>

    <h1>Corrigindo Erro no SSH</h1>
    <h2 class="reduzido">Testado em Debian <span style="font-family: 'Noto Sans', sans-serif;">8</span> Jessie</h2>

    <h3>SSH, Corrigindo Erro de broken pipe</h3>

    <p class="comum">Para concertar temos que alterar um arquivo</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo vim /etc/ssh/sshd_config<br/>
        </code>
    </div>

    <p class="comum">Agora vamos modificar o arquivo</p>
    <p class="miniatura">Par&acirc;metro dentro do arquivo</p>
    <div class="box sombra">
        #-------------------------------------------------<br/>
        # INCLUIR A PR&Oacute;XIMA LINHA:<br/>
        ServerAliveInterval 30<br/>
       <br/>
        #-------------------------------------------------<br/>
    </div>

    <p class="comum">e reiniciamos o servi&ccedil;o ssh</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo /etc/init.d/ssh restart<br/>
        </code>
    </div>
</section>

<?php
for($i=0; $i<21; $i++) {echo'<br/>';}
include("rodape.php");
?>
