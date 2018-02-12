<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>
    <!--linux-->

        <h1>Dicas do Linux Debian Stretch 9.3</h1>

        <h2>Usuários e Grupos</h2>

        <h3>Listar os usuários do sistema</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo cat /etc/passwd | cut -d: -f1 | less<br/>
        </div>

        <h3>Novo usuário TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo adduser nome_usuario<br/>
        </div>

        <h3>Mudar a senha do usuário TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo passwd nome_usuario<br/>
        </div>

        <h3>Deletar o usuário TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo userdel nome_usuario<br/>
        </div>

        <h3>Renomear usuário TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo usermod -l nome_novo_usuario nome_usuario<br/>
        </div>

        <h3>Novo grupo de usuários, vazio TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo adduser --group nome_grupo<br/>
        </div>

        <h3>Deletar grupo de usuários TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo groupdel nome_grupo<br/>
        </div>

        <h3>Incluir um usuário, no grupo de usuários TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo adduser nome_usuario nome_grupo<br/>
        </div>
    </section>

<?php
include("rodape.php");
?>
