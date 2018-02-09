<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do Sudo do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>
    <!--sudo-->

        <h1>Sudo, no Linux Debian Stretch 9.3</h1>

        <h2>Configurar sudo</h2>
        <h3>Você deve incluir o seu usuário no arquivo de configuração</h3>
        <h4>Código</h4>
        <div class="box sombra">
            # visudo<br/>
        </div>

        <h3>Se o comando anterior não funcionar, use...</h3>
        <h4>Código</h4>
        <div class="box sombra">
            # apt install sudo<br/>

        </div>

        <h3>dentro do arquivo (após a linha do root) inclua a linha com seu usuario</h3>
        <h4>Incluir no arquivo (2º linha)</h4>
        <div class="box sombra">
            root    ALL=(ALL:ALL) ALL<br/>
            my      ALL=(ALL:ALL) ALL<br/>
        </div>
        <h3>Reinicie o computador</h3>
    </section>

<?php
for($i=0; $i<23; $i++) {echo'<br/>';}
include("rodape.php");
?>
