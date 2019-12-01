<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--linux-->

    <h1>Usu&aacute;rios e Grupos no Linux</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.4</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>Usu&aacute;rios</h3>

    <p class="comum">Listar os usu&aacute;rios do sistema</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo cat /etc/passwd | cut -d: -f1 | less<br>
    </div>

    <p class="comum">Novo usu&aacute;rio TTY</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo adduser nome_usuario<br>
    </div>

    <p class="comum">Mudar a senha do usu&aacute;rio TTY</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo passwd nome_usuario<br>
    </div>

    <p class="comum">Deletar o usu&aacute;rio TTY</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo userdel nome_usuario<br>
    </div>

    <p class="comum">Renomear usu&aacute;rio TTY</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo usermod -l nome_novo_usuario nome_usuario<br>
    </div>

    <h4>Grupos</h4>
    <p class="comum">Novo grupo de usu&aacute;rios, vazio TTY</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo adduser --group nome_grupo<br>
    </div>

    <p class="comum">Deletar grupo de usu&aacute;rios TTY</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo groupdel nome_grupo<br>
    </div>

    <p class="comum">Incluir um usu&aacute;rio, no grupo de usu&aacute;rios TTY</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo adduser nome_usuario nome_grupo<br>
    </div>

</section>

<?php
include("rodape.php");
?>
