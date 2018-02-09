<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas de configuração da Porta SSH do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>

        <h1>Porta SSH, Linux Debian Stretch 9.3</h1>

        <h2>Mudando a porta SSH</h2>

        <h3>Mudar a porta de acesso do SSH</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo vim /etc/ssh/sshd_config<br/>
        </div>
        <h4>Código dentro do arquivo</h4>
        <div class="box sombra">
            #-------------------------------------------------<br/>
            # MUDAR A PORTA NA PRÓXIMA LINHA:<br/>
            Port 22<br/>
           <br/>
            #-------------------------------------------------<br/>
        </div>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo /etc/init.d/ssh restart<br/>
        </div>

    </section>

<?php
for($i=0; $i<23; $i++) {echo'<br/>';}
include("rodape.php");
?>
