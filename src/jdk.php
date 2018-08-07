<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 29/12/2017
    Nota : Organizar as dicas do JDK (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--InstalarJDK-->

	<h1>Instalando o Java JDK <span style="font-family: 'Noto Sans', sans-serif;">8</span> a <span style="font-family: 'Noto Sans', sans-serif;">10</span></h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.4</span> Stretch, no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster<br>e Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">19</span></h2>

    <h3>Instala&ccedil;&atilde;o do JDK Oracle <span style="font-family: 'Noto Sans', sans-serif;">10.0.2</span></h3>

    <a href="#jdk8" class="a" target="_parent">Clique aqui para Instala&ccedil;&atilde;o do JDK 8.</a>

    <p class="comum">Acompanhe passo a passo a instala&ccedil;&atilde;o...</p>
    <p class="comum"><b>Nota:</b> Apenas como esclarecimento, resolvi incluir o JRE em uma pasta</p>
    <p class="comum">em separado para refletir a estructura do jdk anterior (facilitando</p>
    <p class="comum">assim para programas como Eclipse).</p>

    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        Fa&ccedil;a download do <a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk10-downloads-4416644.html" target="_blank" class="a">JDK 10</a>
        salvando em:<br/>
        ~/Downloads/dev-linux/jdk-oracle/jdk-10.0.2_linux-x64_bin.tar.gz<br/>

        Fa&ccedil;a download do <a href="http://www.oracle.com/technetwork/java/javase/downloads/jre10-downloads-4417026.html" target="_blank" class="a">JRE 10</a>
        salvando em:<br/>
        ~/Downloads/dev-linux/jdk-oracle/jre-10.0.2_linux-x64_bin.tar.gz<br>
    </div>


    <p class="comum">Caso precise apagar uma instala&ccedil;&atilde;o anterior</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        rm -r /usr/lib/jvm<br/>
    </div>


    <p class="comum">Extrair o Java Developer Kit (JDK) e renomear</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ cd ~/Downloads/dev-linux/jdk-oracle/<br/>
        $ tar xvzf jdk-*.tar.gz<br/>
        $ mv jdk-10.0.2/ jdk-oracle<br/>
        $ tar xvzf jre-*.tar.gz<br/>
        $ mv jre-10.0.2/ jdk-oracle/jre<br/>
    </div>

    <p class="comum">Copiar o JDK ao local definitivo e informar ao linux as pastas de trabalho</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <span class="miniatura">O proximo comando no debian &eacute;:</span>
        <br>
        $ su<br/>
        <span class="miniatura">O proximo comando no Linux Mint &eacute;:</span>
        <br>
        $ sudo su<br>
        <span class="miniatura">O seguinte e comum aos dois SO.</span>
        <br>
        # cp -rp jdk-oracle /usr/lib/jvm &amp;&amp; rm -r jdk-oracle/<br/>
        # update-alternatives --install &quot;/usr/bin/java&quot; &quot;java&quot; &quot;/usr/lib/jvm/bin/java&quot; 1<br/>
        # update-alternatives --install &quot;/usr/bin/javac&quot; &quot;javac&quot; &quot;/usr/lib/jvm/bin/javac&quot; 1<br/>
        # update-alternatives --install &quot;/usr/bin/jar&quot; &quot;jar&quot; &quot;/usr/lib/jvm/bin/jar&quot; 1<br/>
        # update-alternatives --install &quot;/usr/bin/javaws&quot; &quot;javaws&quot; &quot;/usr/lib/jvm/bin/javaws&quot; 1<br/>
    </div>

    <p class="comum">Definir o JDK 10 como padr&atilde;o</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        # update-alternatives --set java /usr/lib/jvm/bin/java<br/>
        # update-alternatives --set javac /usr/lib/jvm/bin/javac<br/>
        # update-alternatives --set jar /usr/lib/jvm/bin/jar<br/>
        # update-alternatives --set javaws /usr/lib/jvm/bin/javaws<br/>
    </div>

    <p class="comum">Incluir as vari&aacute;veis de ambiente</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        # vim /etc/profile<br/>
    </div>

    <p class="comum">Va at&eacute; o final do arquivo e inclua as seguintes linhas</p>
    <p class="miniatura">Incluir no arquivo</p>
    <div class="box sombra">
        JAVA_HOME=/usr/lib/jvm<br/>
        PATH=$PATH:$HOME/bin:$JAVA_HOME/bin<br/>
        export JAVA_HOME<br/>
        export PATH<br/>
    </div>

    <p class="comum">Reiniciar e testar</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        # reboot<br/>
        $ java -version<br/>
        $ javac -version<br/>
    </div>


    <!--------------------------------------------------------------------------------------------->
    <br>

    <h3 id="jdk8">Instala&ccedil;&atilde;o do JDK Oracle 8 update 192</h3>

    <p class="comum">Acompanhe passo a passo a instala&ccedil;&atilde;o...</p>
    <p class="comum">O procedimento para o 9 &eacute; o mesmo.</p>
	<p class="miniatura">Procedimento</p>
	<div class="box sombra">
		Fa&ccedil;a download do <a href="http://jdk.java.net/8/" target="_blank" class="a">JDK8</a>
		salvando em:<br/>
		~/Downloads/dev-linux/jdk-oracle/jdk-8u192-ea-bin-b04-linux-x64-01_aug_2018.tar.gz<br/>
	</div>


    <p class="comum">Caso precise apagar uma instala&ccedil;&atilde;o anterior</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        rm -r /usr/lib/jvm<br/>
    </div>


    <p class="comum">Extrair o Java Developer Kit (JDK) e renomear</p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
		$ cd ~/Downloads/dev-linux/jdk-oracle/<br/>
		$ tar xvzf jdk-*.tar.gz<br/>
		$ mv jdk1*/ jdk-oracle<br/>
	</div>

	<p class="comum">Copiar o JDK ao local definitivo e informar ao linux as pastas de trabalho</p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
        <span class="miniatura">O proximo comando no debian &eacute;:</span>
        <br>
        $ su<br/>
        <span class="miniatura">O proximo comando no Linux Mint &eacute;:</span>
        <br>
        $ sudo su<br>
        <span class="miniatura">O seguinte e comum aos dois SO.</span>
        <br>
		# cp -rp jdk-oracle /usr/lib/jvm &amp;&amp; rm -r jdk-oracle/<br/>
		# update-alternatives --install &quot;/usr/bin/java&quot; &quot;java&quot; &quot;/usr/lib/jvm/bin/java&quot; 1<br/>
		# update-alternatives --install &quot;/usr/bin/javac&quot; &quot;javac&quot; &quot;/usr/lib/jvm/bin/javac&quot; 1<br/>
		# update-alternatives --install &quot;/usr/bin/jar&quot; &quot;jar&quot; &quot;/usr/lib/jvm/bin/jar&quot; 1<br/>
		# update-alternatives --install &quot;/usr/bin/javaws&quot; &quot;javaws&quot; &quot;/usr/lib/jvm/bin/javaws&quot; 1<br/>
	</div>

	<p class="comum">Definir o JDK 8 como padr&atilde;o</p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
		# update-alternatives --set java /usr/lib/jvm/bin/java<br/>
		# update-alternatives --set javac /usr/lib/jvm/bin/javac<br/>
		# update-alternatives --set jar /usr/lib/jvm/bin/jar<br/>
		# update-alternatives --set javaws /usr/lib/jvm/bin/javaws<br/>
	</div>

	<p class="comum">Incluir as vari&aacute;veis de ambiente</p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
		# vim /etc/profile<br/>
	</div>

	<p class="comum">Va at&eacute; o final do arquivo e inclua as seguintes linhas</p>
	<p class="miniatura">Incluir no arquivo</p>
	<div class="box sombra">
		JAVA_HOME=/usr/lib/jvm<br/>
		PATH=$PATH:$HOME/bin:$JAVA_HOME/bin<br/>
		export JAVA_HOME<br/>
		export PATH<br/>
	</div>

	<p class="comum">Reiniciar e testar</p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
		# reboot<br/>
		$ java -version<br/>
		$ javac -version<br/>
	</div>

    <!--------------------------------------------------------------------------------------------->

    <p class="reduzido">Refer&ecirc;ncias</p>
    <p class="comum">Algumas refer&ecirc;ncias</p>
    <p class="miniatura">Links</p>
    <div class="quadro">
        <a href="https://stackoverflow.com/questions/14788345/how-to-install-jdk-on-ubuntu-linux" class="a" target="_blank">https://stackoverflow.com/questions/14788345/how-to-install-jdk-on-ubuntu-linux</a><br/><br/>
        <a href="http://stackoverflow.com/questions/24641536/how-to-set-java-home-in-linux-for-all-users" class="a" target="_blank">http://stackoverflow.com/questions/24641536/how-to-set-java-home-in-linux-for-all-users</a><br/><br/>
        <a href="https://devjava.wordpress.com/2014/01/21/env-002-instalacao-e-configuracao-da-jvm-e-jdk/" class="a" target="_blank">https://devjava.wordpress.com/2014/01/21/env-002-instalacao-e-configuracao-da-jvm-e-jdk/</a><br/><br/>
        <a href="https://devjava.wordpress.com/2014/01/16/variaveis-de-ambiente-em-linux/" class="a" target="_blank">https://devjava.wordpress.com/2014/01/16/variaveis-de-ambiente-em-linux/</a><br/><br/>
        <a href="http://askubuntu.com/questions/20953/sudo-source-command-not-found" class="a" target="_blank">http://askubuntu.com/questions/20953/sudo-source-command-not-found</a><br/>
    </div>

</section>

<?php
include("rodape.php");
?>