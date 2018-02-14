<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do JDK (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>
    <!--Panel Java-->

        <h1>Painel do Java em Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch<br/>
            e Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>

        <h2>Instalando o Acesso ao Painel de Controle do Java</h2>
        <h3>Criando atalhos dos menús</h3>
        <h4>Código</h4>
        <div class="box sombra">
            <span class="b">$ sudo tee /usr/share/applications/java-control.desktop <<</span><span class="b">ATALHO<br/>
            [Desktop Entry]<br/>
            Encoding=UTF-8<br/>
            Name=Java<br/>
            Comment=Java Control Panel<br/>
            Exec=sh '/usr/lib/jvm/bin/jcontrol'<br/>
            Icon=/usr/lib/jvm/jre/lib/desktop/icons/hicolor/48x48/apps/sun-jcontrol.png<br/>
            Terminal=false<br/>
            Type=Application<br/>
            Categories=Development;Settings;Java;<br/>
            ATALHO</span>
        </div>
    </section>

<?php
for($i=0; $i<21; $i++) {echo'<br/>';}
include("rodape.php");
?>