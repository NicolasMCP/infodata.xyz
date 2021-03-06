<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do Painel do Java (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--Panel Java-->

    <h1>Painel de Acesso ao Java em Debian</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.4</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>Instalando o Acesso ao Painel de Controle do Java</h3>
    <p class="comum">Criando atalhos dos men&uacute;s</p>
    <p class="comum">Copie o c&oacute;digo a seguir e cole no seu Terminal</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <span class="b">$ sudo tee /usr/share/applications/java-control.desktop &lt;&lt;</span><span class="b">ATALHO<br>
        [Desktop Entry]<br>
        Encoding=UTF-8<br>
        Name=Java<br>
        Comment=Java Control Panel<br>
        Exec=sh '/usr/lib/jvm/bin/jcontrol'<br>
        Icon=/usr/lib/jvm/jre/lib/desktop/icons/hicolor/48x48/apps/sun-jcontrol.png<br>
        Terminal=false<br>
        Type=Application<br>
        Categories=Development;Settings;Java;<br>
        ATALHO</span>
    </div>

</section>

<?php
for($i=0; $i<26; $i++) {echo'<br>';}
include("rodape.php");
?>