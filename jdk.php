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

    <!--InstalarJDK-->

        <h1>JDK e Painel Java no Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch</h1>
        <h1>e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>
        <h2>Instalando JDK</h2>

        <h3>JDK Oracle 8 update 152</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            Faça download do <a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html" target="_blank" class="a">JDK8</a>
            salvando em:<br/>
            /home/$USER/Downloads/Desenvolvedor/jdk-oracle/jdk-8u152-linux-x64.tar.gz<br/>
        </div>

        <h3>Extrair o Java Developer Kit (JDK) e renomear</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ cd /home/$USER/Downloads/Desenvolvedor/jdk-oracle/<br/>
            $ tar xvzf jdk-*.tar.gz<br/>
            $ mv jdk1*/ jdk-oracle<br/>
        </div>

        <h3>Copiar o JDK ao local definitivo e informar ao linux as pastas de trabalho</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ su<br/>
            # cp -rp jdk-oracle /usr/lib/jvm && rm -r jdk-oracle/<br/>
            # update-alternatives --install "/usr/bin/java" "java" "/usr/lib/jvm/bin/java" 1<br/>
            # update-alternatives --install "/usr/bin/javac" "javac" "/usr/lib/jvm/bin/javac" 1<br/>
            # update-alternatives --install "/usr/bin/jar" "jar" "/usr/lib/jvm/bin/jar" 1<br/>
            # update-alternatives --install "/usr/bin/javaws" "javaws" "/usr/lib/jvm/bin/javaws" 1<br/>
        </div>

        <h3>Definir o JDK 8 up.152 como padrão</h3>
        <h4>Código</h4>
        <div class="box sombra">
            # update-alternatives --set java /usr/lib/jvm/bin/java<br/>
            # update-alternatives --set javac /usr/lib/jvm/bin/javac<br/>
            # update-alternatives --set jar /usr/lib/jvm/bin/jar<br/>
            # update-alternatives --set javaws /usr/lib/jvm/bin/javaws<br/>
        </div>

        <h3>Incluir as variáveis de ambiente</h3>
        <h4>Código</h4>
        <div class="box sombra">
            # vim /etc/profile<br/>
        </div>

        <h3>Va até o final do arquivo e inclua as seguintes linhas</h3>
        <h4>Incluir no arquivo</h4>
        <div class="box sombra">
            JAVA_HOME=/usr/lib/jvm<br/>
            PATH=$PATH:$HOME/bin:$JAVA_HOME/bin<br/>
            export JAVA_HOME<br/>
            export PATH<br/>
        </div>

        <h3>Reiniciar e testar</h3>
        <h4>Código</h4>
        <div class="box sombra">
            # reboot<br/>
            $ java -version<br/>
            $ javac -version<br/>
        </div>

        <h3>Referências</h3>
        <h4>Links</h4>
        <div>
            <a href="https://stackoverflow.com/questions/14788345/how-to-install-jdk-on-ubuntu-linux" class="a" target="_blank">https://stackoverflow.com/questions/14788345/how-to-install-jdk-on-ubuntu-linux</a><br/><br/>
            <a href="http://stackoverflow.com/questions/24641536/how-to-set-java-home-in-linux-for-all-users" class="a" target="_blank">http://stackoverflow.com/questions/24641536/how-to-set-java-home-in-linux-for-all-users</a><br/><br/>
            <a href="https://devjava.wordpress.com/2014/01/21/env-002-instalacao-e-configuracao-da-jvm-e-jdk/" class="a" target="_blank">https://devjava.wordpress.com/2014/01/21/env-002-instalacao-e-configuracao-da-jvm-e-jdk/</a><br/><br/>
            <a href="https://devjava.wordpress.com/2014/01/16/variaveis-de-ambiente-em-linux/" class="a" target="_blank">https://devjava.wordpress.com/2014/01/16/variaveis-de-ambiente-em-linux/</a><br/><br/>
            <a href="http://askubuntu.com/questions/20953/sudo-source-command-not-found" class="a" target="_blank">http://askubuntu.com/questions/20953/sudo-source-command-not-found</a><br/>
        </div>

        <?php
        include("pre-rodape.php");
        ?>

    <!--Panel Java-->

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
include("rodape.php");
?>