<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do Node.js (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>
    <!--Node.js-->

        <h1>Node.js em Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no<br/>
            Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>


        <h2>Instalar Node.js 9.3.0</h2>
        <h3>Instalando o Node.js</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ su<br/>
            # apt install curl<br/>
            # curl -sL https://deb.nodesource.com/setup_9.x | bash -<br/>
            # apt install nodejs<br/>
            # exit<br/>
        </div>
        <h3>Teste a instalação</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ node -v<br/>
            v9.3.0<br/><br/>
            $ npm -v<br/>
            5.5.1<br/>
        </div>
    </section>

<?php
for($i=0; $i<19; $i++) {echo'<br/>';}
include("rodape.php");
?>