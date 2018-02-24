<!DOCTYPE html>
<!--
Autor  : Nicolas Ramos
Data   : 29/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do JDK (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--InstalarJDK-->

	<h1>Instalando o Java JDK</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

	<h3>Instalação do JDK Oracle 8 update 152</h3>
    <p class="comum">Acompanhe passo a passo a instalação...</p>
	<p class="miniatura">Procedimento</p>
	<div class="box sombra">
		Faça download do <a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html" target="_blank" class="a">JDK8</a>
		salvando em:<br/>
		/home/$USER/Downloads/Desenvolvedor/jdk-oracle/jdk-8u152-linux-x64.tar.gz<br/>
	</div>

	<p class="comum">Extrair o Java Developer Kit (JDK) e renomear</p>
	<p class="miniatura">Código</p>
	<div class="box sombra">
		$ cd /home/$USER/Downloads/Desenvolvedor/jdk-oracle/<br/>
		$ tar xvzf jdk-*.tar.gz<br/>
		$ mv jdk1*/ jdk-oracle<br/>
	</div>

	<p class="comum">Copiar o JDK ao local definitivo e informar ao linux as pastas de trabalho</p>
	<p class="miniatura">Código</p>
	<div class="box sombra">
		$ su<br/>
		# cp -rp jdk-oracle /usr/lib/jvm && rm -r jdk-oracle/<br/>
		# update-alternatives --install "/usr/bin/java" "java" "/usr/lib/jvm/bin/java" 1<br/>
		# update-alternatives --install "/usr/bin/javac" "javac" "/usr/lib/jvm/bin/javac" 1<br/>
		# update-alternatives --install "/usr/bin/jar" "jar" "/usr/lib/jvm/bin/jar" 1<br/>
		# update-alternatives --install "/usr/bin/javaws" "javaws" "/usr/lib/jvm/bin/javaws" 1<br/>
	</div>

	<p class="comum">Definir o JDK 8 up.152 como padrão</p>
	<p class="miniatura">Código</p>
	<div class="box sombra">
		# update-alternatives --set java /usr/lib/jvm/bin/java<br/>
		# update-alternatives --set javac /usr/lib/jvm/bin/javac<br/>
		# update-alternatives --set jar /usr/lib/jvm/bin/jar<br/>
		# update-alternatives --set javaws /usr/lib/jvm/bin/javaws<br/>
	</div>

	<p class="comum">Incluir as variáveis de ambiente</p>
	<p class="miniatura">Código</p>
	<div class="box sombra">
		# vim /etc/profile<br/>
	</div>

	<p class="comum">Va até o final do arquivo e inclua as seguintes linhas</p>
	<p class="miniatura">Incluir no arquivo</p>
	<div class="box sombra">
		JAVA_HOME=/usr/lib/jvm<br/>
		PATH=$PATH:$HOME/bin:$JAVA_HOME/bin<br/>
		export JAVA_HOME<br/>
		export PATH<br/>
	</div>

	<p class="comum">Reiniciar e testar</p>
	<p class="miniatura">Código</p>
	<div class="box sombra">
		# reboot<br/>
		$ java -version<br/>
		$ javac -version<br/>
	</div>

	<p class="reduzido">Referências</p>
    <p class="comum">Algumas referências</p>
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