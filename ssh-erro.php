<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do SSH do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>

        <h1>Erro no SSH, Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch <br/>
            e Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>

        <h2>SSH, Erro broken pipe</h2>

        <h3>Para concertar temos que alterar um arquivo</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo vim /etc/ssh/sshd_config<br/>
        </div>
        <h4>Código dentro do arquivo</h4>
        <div class="box sombra">
            #-------------------------------------------------<br/>
            # INCLUIR A PRÓXIMA LINHA:<br/>
            ServerAliveInterval 30<br/>
           <br/>
            #-------------------------------------------------<br/>
        </div>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo /etc/init.d/ssh restart<br/>
        </div>
    </section>

<?php
for($i=0; $i<21; $i++) {echo'<br/>';}
include("rodape.php");
?>
