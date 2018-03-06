<!DOCTYPE html>
<!--
Autor  : Nicolas Ramos
Data   : 05/02/2018
Projeto: Dicas
Meta   : Organizar as dicas do nmap do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>

    <h1>Usando nmap, no Linux</h1>
    <h2 class="reduzido">Testado em Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no
        Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>Scaner de portas abertas</h3>
    <p class="comum">nmap IP</p>
    <p class="miniatura">Código de exemplo</p>
    <div class="box sombra">
        <code>
            $ sudo nmap localhost<br/>
        </code>
        <p class="miniatura">ou<br/></p>
        <code>
            $ sudo nmap 127.0.0.1<br/>
        </code>
    </div>

    <p class="comum">Se o comando nmap não funcionar</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
            $ sudo apt install nmap<br/>
        </code>
    </div>

    <p class="comum justify">Quando usamos esse comando no localhost (ou 127.0.0.1) vemos os serviços ativos que usam portas, em nosso computador...</p>

</section>

<?php
for($i=0; $i<23; $i++) {echo'<br/>';}
include("rodape.php");
?>
