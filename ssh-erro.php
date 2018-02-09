<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do Sudo e SSH do Linux (agora neste html, antes em OOo)
Defaults:ALL timestamp_timeout=-1 siempre
Defaults:ALL timestamp_timeout=30 minutos
-->

<?php
include("cabecalho.php");
?>

    <section>

        <h1>Erro no SSH, Linux Debian Stretch 9.3</h1>

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
for($i=0; $i<23; $i++) {echo'<br/>';}
include("rodape.php");
?>
