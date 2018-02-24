<!DOCTYPE html>
<!--
Autor  : Nicolas Ramos
Data   : 31/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--linux-->

    <h1>Usuários e Grupos no Linux</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>Usuários</h3>

    <p class="comum">Listar os usuários do sistema</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo cat /etc/passwd | cut -d: -f1 | less<br/>
    </div>

    <p class="comum">Novo usuário TTY</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo adduser nome_usuario<br/>
    </div>

    <p class="comum">Mudar a senha do usuário TTY</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo passwd nome_usuario<br/>
    </div>

    <p class="comum">Deletar o usuário TTY</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo userdel nome_usuario<br/>
    </div>

    <p class="comum">Renomear usuário TTY</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo usermod -l nome_novo_usuario nome_usuario<br/>
    </div>

    <h4>Grupos</h4>
    <p class="comum">Novo grupo de usuários, vazio TTY</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo adduser --group nome_grupo<br/>
    </div>

    <p class="comum">Deletar grupo de usuários TTY</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo groupdel nome_grupo<br/>
    </div>

    <p class="comum">Incluir um usuário, no grupo de usuários TTY</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        $ sudo adduser nome_usuario nome_grupo<br/>
    </div>

</section>

<?php
include("rodape.php");
?>
