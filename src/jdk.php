<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do JDK (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--InstalarJDK-->

	<h1>Instalando o Java openJDK <span style="font-family: 'Noto Sans', sans-serif;">12.0.2</span>,<br/>openJDK <span style="font-family: 'Noto Sans', sans-serif;">11.0.4</span>,
        JDK <span style="font-family: 'Noto Sans', sans-serif;">10.0.2</span> e JDK <span style="font-family: 'Noto Sans', sans-serif;">8</span></h1>
    <h2 class="reduzido">Testado em MX-Linux <span style="font-family: 'Noto Sans', sans-serif;">18.2</span> e Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">19.2</span> Tina,<br/>
    sendo compativel com Debian <span style="font-family: 'Noto Sans', sans-serif;">9.8</span> Stretch, e
        Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span>.</br></h2>

    <h3>Instala&ccedil;&atilde;o do openJDK <span style="font-family: 'Noto Sans', sans-serif;">12.0.2</span></h3>

    <a href="#jdk11" class="a" target="_parent">Clique aqui para Instala&ccedil;&atilde;o do openJDK 11.0.4</a><br>
    <a href="#jdk10" class="a" target="_parent">Clique aqui para Instala&ccedil;&atilde;o do JDK 10.0.2</a><br>
    <a href="#jdk8" class="a" target="_parent">Clique aqui para Instala&ccedil;&atilde;o do JDK 8</a><br>
    <br>
    <p class="comum">Resolvi como muitos mudar para os openJDK devido a licen&ccedil;a da Oracle que mudou, fazendo ser pago
        os aplicativos de produ&ccedil;&atilde;o. Alem do m&aacute;is faz mais sentido o uso de Software Livre para Produ&ccedil;&atilde;o de Software Livre.</p>
	<br/>
    
    <p class="comum">Acompanhe passo a passo a instala&ccedil;&atilde;o...</p><br/>
    <p class="comum"><a href="https://jdk.java.net/12/" class="a" target="_blank">JDK 12.0.2</a>. Para voc&ecirc; fazer o download do JDK 12.0.2 se quiser. Ou...</p>

    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        $ cd ~/Downloads/jdk/<br/>
        $ wget https://download.java.net/java/GA/jdk12.0.2/e482c34c86bd4bf8b56c0b35558996b9/10/GPL/openjdk-12.0.2_linux-x64_bin.tar.gz<br/>
    </div>


    <p class="comum">Caso deseje deletar uma instala&ccedil;&atilde;o anterior</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        rm -r /usr/lib/jvm/LOCAL-INSTALAÇÃO<br/>
    </div>


    <p class="comum">Extrair o Java Developer Kit Aberto (openJDK)</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ cd ~/Downloads/jdk/<br/>
        $ tar xvzf openjdk-12.*.tar.gz<br/>
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
        # cp -rp jdk-12.0.2 /usr/lib/jvm<br/>
        # rm -r jdk-12.0.2/<br/>
        # update-alternatives --install &quot;/usr/bin/java&quot; &quot;java&quot; &quot;/usr/lib/jvm/jdk-12.0.2/bin/java&quot; 1<br/>
        # update-alternatives --install &quot;/usr/bin/javac&quot; &quot;javac&quot; &quot;/usr/lib/jvm/jdk-12.0.2/bin/javac&quot; 1<br/>
        # update-alternatives --install &quot;/usr/bin/jar&quot; &quot;jar&quot; &quot;/usr/lib/jvm/jdk-12.0.2/bin/jar&quot; 1<br/>
    </div>

    <p class="comum">Definir o JDK 12.0.2 como padr&atilde;o</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        # update-alternatives --set java /usr/lib/jvm/jdk-12.0.2/bin/java<br/>
        # update-alternatives --set javac /usr/lib/jvm/jdk-12.0.2/bin/javac<br/>
        # update-alternatives --set jar /usr/lib/jvm/jdk-12.0.2/bin/jar<br/>
    </div>

    <p class="comum">Incluir as vari&aacute;veis de ambiente</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        # vim /etc/bash.bashrc<br/>
    </div>

    <p class="comum">Va at&eacute; o final do arquivo e inclua as seguintes linhas</p>
    <p class="miniatura">Incluir no arquivo</p>
    <div class="box sombra">
        JAVA_HOME=/usr/lib/jvm/jdk-12.0.2<br/>
        PATH=$PATH:$JAVA_HOME/bin<br/>
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



    <br>
    <a href="intellijIDEA.php" class="a" target="_parent">Configurar o JDK 12 no IntelliJ IDEA.</a>
    <br>
    <br>
    <br>
    <!--------------------------------------------------------------------------------------------->
    <?php
    include("pre-rodape.php");
    ?>
    <br>

    <br id="jdk11">
    <h4>Instala&ccedil;&atilde;o do openJDK <span style="font-family: 'Noto Sans', sans-serif;">11.0.4 reposit&oacute;rios Linux Mint 19.2, ou openJDK <span style="font-family: 'Noto Sans', sans-serif;">11.0.2 Manual.</span></h4>

    <a href="#jdk10" class="a" target="_parent">Clique aqui para Instala&ccedil;&atilde;o do JDK 10.0.2</a>
    <br>
    <a href="#jdk8" class="a" target="_parent">Clique aqui para Instala&ccedil;&atilde;o do JDK 8</a>
    <br>
    <br>
    <p class="comum">Resolvi como muitos mudar para os openJDK devido a licen&ccedil;a da Oracle que mudou, fazendo ser pago os aplicativos de produ&ccedil;&atilde;o. Alem do m&aacute;is faz mais sentido o uso de Software Livre para Produ&ccedil;&atilde;o de Software Livre.</p>
	<br/>

    <p class="comum reduzido">openJDK 11.0.4 reposit&oacute;rios Linux Mint 19.2</p>
    <br>

    <p class="comum">Acompanhe passo a passo a instala&ccedil;&atilde;o...</p>
    <br/>

    <p class="comum">Ao instalar o Linux Mint 19.2 (nesta data Novembro de 2019) ele j&aacute; vem com o runtime do JDK 11 instalado, se voc&ecirc; usar o comando:</p>

    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ java -version<br>
    </div>
    <br>

    <p class="comum">vai receber como resposta:</p>

    <p class="miniatura">Resposta</p>
    <div class="box sombra">
        openjdk version &quot;11.0.4&quot; 2019-07-16<br>
        OpenJDK Runtime Environment (build 11.0.4+11-post-Ubuntu-1ubuntu218.04.3)<br>
        OpenJDK 64-Bit Server VM (build 11.0.4+11-post-Ubuntu-1ubuntu218.04.3, mixed mode, sharing)<br>
    </div>
    <br>
    <p class="comum">Isso indica que o runtime do JDK 11 esta corretamente instalado, agora vamos verificar o compilador:</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ javac -version<br>
    </div>
    <br>
    <p class="comum">Se voc&ecirc; receber uma resposta como esta:</p>
    <p class="miniatura">Resposta</p>
    <div class="box sombra">
        Command 'javac' not found, but can be installed with:<br>
        <br>
        sudo apt install default-jdk<br>
        sudo apt install openjdk-11-jdk-headless<br>
        sudo apt install ecj<br>
        sudo apt install openjdk-8-jdk-headless<br>
    </div>
    <br>
    <p class="comum">N&atilde;o se preocupe, apenas esta indicando que o openJDK (Kit de Desenvolvimento do Java o que
        inclui o java compiler ou javac, e outras ferramentas) n&atilde;o esta instalado, ent&atilde;o vamos instala-lo</p>
    <p class="comum">Para instalar o openJDK 11... vamos seguir a primeira sugest&atilde;o</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo apt install default-jdk<br/>
    </div>
    <br>
    <p class="comum">Caso voc&ecirc; tenha vers&otilde;es anteriores do JDK...</p>
    <p class="comum">Podemos Selecionar o java e javac defaults</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo update-alternatives --config java<br>
        $ sudo update-alternatives --config javac<br/>
    </div>
    <br>
    <p class="comum">Como incluir as vari&aacute;veis de ambiente?</p>
    <p class="comum">Primeiro, vamos verificar em que pasta o jdk foi instalado usando o seguinte comando</p>

    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo vim /etc/bash.bashrc<br/>
    </div>
    <br>

    <p class="comum">Do seguinte modo...</p>
    <p class="comum">Primeiro vamos abrir o arquivo /etc/bash.bashrc para edita-lo.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo vim /etc/bash.bashrc<br/>
    </div>
    <br>
    <p class="comum">Va at&eacute; o final do arquivo e inclua as seguintes linhas</p>
    <p class="miniatura">Incluir no arquivo</p>
    <div class="box sombra">
        JAVA_HOME=/usr/lib/jvm/java-11-openjdk-amd64<br/>
        PATH=$PATH:$JAVA_HOME/bin<br/>
        export JAVA_HOME<br/>
        export PATH<br/>
    </div>
    <br>
    <p class="comum">Reiniciar e testar</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        # reboot<br/>
        $ javac -version<br/>
        <p class="miniatura reduzido">java 11.0.4</p>
    </div>
    <br>
    <a href="intellijIDEA.php" class="a" target="_parent">Configurar o JDK 11 no IntelliJ IDEA.</a>
    <br>
    <br>
    <!--------------------------------------------------------------------------------------------->
    <?php
    include("pre-rodape.php");
    ?>
    <br>


    <p class="comum reduzido">openJDK 11.0.2 Manual</p>
    <br>
    <p class="comum">Acompanhe passo a passo a instala&ccedil;&atilde;o...</p>
    <br/>


    <p class="comum">Voc&ecirc; pode fazer o download de <a href="http://jdk.java.net/archive/" target="_blank" class="a">openJDK 11.0.2</a> se quiser. Ou...</p>

    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        $ cd ~/Downloads/jdk/<br/>
        $ wget https://download.java.net/java/GA/jdk11/9/GPL/openjdk-11.0.2_linux-x64_bin.tar.gz<br/>
    </div>


    <p class="comum">Caso precise apagar uma instala&ccedil;&atilde;o anterior</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        rm -r /usr/lib/jvm/LOCAL-INSTALAÇÃO<br/>
    </div>


    <p class="comum">Extrair o Java Developer Kit (JDK)</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ cd ~/Downloads/jdk/<br/>
        $ tar xvzf openjdk-11.*.tar.gz<br/>
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
        # cp -rp jdk-11.0.2 /usr/lib/jvm &amp;&amp; rm -r jdk-11.0.2/<br/>
        # update-alternatives --install &quot;/usr/bin/java&quot; &quot;java&quot; &quot;/usr/lib/jvm/jdk-11.0.2/bin/java&quot; 1<br/>
        # update-alternatives --install &quot;/usr/bin/javac&quot; &quot;javac&quot; &quot;/usr/lib/jvm/jdk-11.0.2/bin/javac&quot; 1<br/>
        # update-alternatives --install &quot;/usr/bin/jar&quot; &quot;jar&quot; &quot;/usr/lib/jvm/jdk-11.0.2/bin/jar&quot; 1<br/>
    </div>

    <p class="comum">Definir o JDK 11.0.2 como padr&atilde;o</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        # update-alternatives --set java /usr/lib/jvm/jdk-11.0.2/bin/java<br/>
        # update-alternatives --set javac /usr/lib/jvm/jdk-11.0.2/bin/javac<br/>
        # update-alternatives --set jar /usr/lib/jvm/jdk-11.0.2/bin/jar<br/>
    </div>

    <p class="comum">Incluir as vari&aacute;veis de ambiente</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        # vim /etc/bash.bashrc<br/>
    </div>

    <p class="comum">Va at&eacute; o final do arquivo e inclua as seguintes linhas</p>
    <p class="miniatura">Incluir no arquivo</p>
    <div class="box sombra">
        JAVA_HOME=/usr/lib/jvm/jdk-11.0.2<br/>
        PATH=$PATH:$JAVA_HOME/bin<br/>
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



    <br>
    <a href="intellijIDEA.php#jdk11" class="a" target="_parent">Configurar o JDK 11 no IntelliJ IDEA.</a>
    <br>
    <br>
    <br>
    <!--------------------------------------------------------------------------------------------->
    <?php
    include("pre-rodape.php");
    ?>
    <br>

    <h5 id="jdk10">Instala&ccedil;&atilde;o do JDK Oracle <span style="font-family: 'Noto Sans', sans-serif;">10.0.2</span></h5>
    <h6 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.5</span> Stretch, no Debian <span style="font-family: 'Noto Sans', sans-serif;">10
        </span> Buster<br>e Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">19</span> Tara</h6>

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
        # vim /etc/bash.bashrc<br/>
    </div>

    <p class="comum">Va at&eacute; o final do arquivo e inclua as seguintes linhas</p>
    <p class="miniatura">Incluir no arquivo</p>
    <div class="box sombra">
        JAVA_HOME=/usr/lib/jvm<br/>
        PATH=$PATH:$JAVA_HOME/bin<br/>
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

    <br id="jdk8"/>
    <?php
    include("pre-rodape.php");
    ?>
    <br>


    <h6>Instala&ccedil;&atilde;o do JDK Oracle 8 update 192</h6>
    <h8 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.5</span> Stretch, no Debian <span style="font-family: 'Noto Sans', sans-serif;">10
        </span> Buster<br>e Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">19</span> Tara</h8>
    <br>
    <a href="#jdk10" class="a" target="_parent">Clique aqui para Instala&ccedil;&atilde;o do JDK 10.</a>

    <p class="comum">Acompanhe passo a passo a instala&ccedil;&atilde;o...</p>
    <p class="comum">O procedimento para o 9 &eacute; o mesmo.</p>
	<p class="miniatura">Procedimento</p>
	<div class="box sombra">
		Fa&ccedil;a download do <a href="http://jdk.java.net/8/" target="_blank" class="a">JDK8</a>
		salvando em:<br/>
		~/Downloads/dev-linux/jdk-oracle/8/jdk-8u192-ea-bin-b04-linux-x64-01_aug_2018.tar.gz<br/>
	</div>


    <p class="comum">Caso precise apagar uma instala&ccedil;&atilde;o anterior</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        rm -r /usr/lib/jvm/jdk1.8.0_192<br/>
    </div>


    <p class="comum">Extrair o Java Developer Kit (JDK)</p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
		$ cd ~/Downloads/dev-linux/jdk-oracle/8/<br/>
		$ tar xvzf jdk-8u192-ea-bin-b04-linux-x64-01_aug_2018.tar.gz<br/>
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
		# cp -rp jdk1.8.0_192 /usr/lib/jvm/ &amp;&amp; rm -r jdk1.8.0_192/<br/>
		# update-alternatives --install &quot;/usr/bin/java&quot; &quot;java&quot; &quot;/usr/lib/jvm/jdk1.8.0_192/bin/java&quot; 1<br/>
		# update-alternatives --install &quot;/usr/bin/javac&quot; &quot;javac&quot; &quot;/usr/lib/jvm/jdk1.8.0_192/bin/javac&quot; 1<br/>
		# update-alternatives --install &quot;/usr/bin/jar&quot; &quot;jar&quot; &quot;/usr/lib/jvm/jdk1.8.0_192/bin/jar&quot; 1<br/>
		# update-alternatives --install &quot;/usr/bin/javaws&quot; &quot;javaws&quot; &quot;/usr/lib/jvm/jdk1.8.0_192/bin/javaws&quot; 1<br/>
	</div>

	<p class="comum">Definir o JDK 8 como padr&atilde;o</p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
		# update-alternatives --set java /usr/lib/jvm/jdk1.8.0_192/bin/java<br/>
		# update-alternatives --set javac /usr/lib/jvm/jdk1.8.0_192/bin/javac<br/>
		# update-alternatives --set jar /usr/lib/jvm/jdk1.8.0_192/bin/jar<br/>
		# update-alternatives --set javaws /usr/lib/jvm/jdk1.8.0_192/bin/javaws<br/>
	</div>

	<p class="comum">Incluir as vari&aacute;veis de ambiente</p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
		# vim /etc/bash.bashrc<br/>
	</div>

	<p class="comum">Va at&eacute; o final do arquivo e inclua as seguintes linhas</p>
	<p class="miniatura">Incluir no arquivo</p>
	<div class="box sombra">
		JAVA_HOME=/usr/lib/jvm/jdk1.8.0_192<br/>
		PATH=$PATH:$JAVA_HOME/bin<br/>
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
