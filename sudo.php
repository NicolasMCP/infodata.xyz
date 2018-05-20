<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 05/02/2018
    Nota : Organizar as dicas do Sudo do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--sudo-->

    <h1>Sudo, no Linux</h1>
    <h2 class="reduzido">Testado em Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no
        Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>Configurar sudo</h3>
    <p class="comum">Você deve incluir o seu usuário no arquivo de configuração</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
            # visudo<br/>
        </code>
    </div>

    <p class="comum">Se o comando anterior não funcionar, use...</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
            # apt install sudo<br/>
        </code>
    </div>

    <p class="comum">dentro do arquivo (após a linha do root) inclua a linha com seu usuario</p>
    <p class="miniatura">Incluir no arquivo (2º linha)</p>
    <div class="box sombra">
        root    ALL=(ALL:ALL) ALL<br/>
        my      ALL=(ALL:ALL) ALL<br/>
    </div>
    <p class="comum">Reinicie o computador</p>

</section>

<?php
for($i=0; $i<20; $i++) {echo'<br/>';}
include("rodape.php");
?>
