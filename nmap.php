<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do nmap do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>

        <h1>Usando nmap, Linux Debian Stretch 9.3</h1>

        <h2>Scaner de portas abertas</h2>
        <h3>nmap IP</h3>
        <h4>Código de exemplo</h4>
        <div class="box sombra">
            $ sudo nmap localhost<br/>
            <h4>ou<br/></h4>
            $ sudo nmap 127.0.0.1<br/>
        </div>

        <h3>Se o comando nmap não funcionar</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo apt install nmap<br/>
        </div>

        <h3 class="justify">Quando usamos esse comando no localhost (ou 127.0.0.1) vemos os serviços ativos que usam portas, em nosso computador...</h3>

</section>

<?php
for($i=0; $i<23; $i++) {echo'<br/>';}
include("rodape.php");
?>
