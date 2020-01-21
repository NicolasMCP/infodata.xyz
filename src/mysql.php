<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do LAMP e Node.js (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--MySql-->

    <h1>Instalando o MySQL no Linux</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>
    <p class="comum">Nota: A instala&ccedil;&atilde;o para Linux Mint esta logo abaixo.</p>

    <h3>Instalando o MySQL da Oracle no Debian</h3>
    <a href="#mysql-linux-mint" class="a" target="_parent">Instala&ccedil;&atilde;o no Linux Mint</a><br>
    <br>
    <p class="comum">Escolha entre a vers&atilde;o do MySql 5.6, 5.7 ou 8.0</p>
    <p class="comum justify">Aqui estou usando a 8.0 (se quiser outra, mude o n&uacute;mero da vers&atilde;o. Por exemplo mudando da 8.0 para 5.7, no Reposit&oacute;rio mude: mysql-8.0 para mysql-5.7, ali ap&oacute;s a palavra STRETCH em negrito. N&atilde;o se esque&ccedil;a de fazer isso nas duas linhas...)</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
        $ sudo su<br>
        # echo &quot;# MySQL colocar os reposit&oacute;rios escolher entre 5.6, 5.7, 8.0&quot; &gt;&gt; /etc/apt/sources.list<br>
        <!--# echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" >> /etc/apt/sources.list<br>-->
        # echo &quot;deb [trusted=yes] http://repo.mysql.com/apt/debian/ <strong>stretch</strong> mysql-8.0&quot; &gt;&gt; /etc/apt/sources.list<br>
        # echo &quot;deb-src [trusted=yes] http://repo.mysql.com/apt/debian/ <strong>stretch</strong> mysql-8.0&quot; &gt;&gt; /etc/apt/sources.list<br>
        </code>
        <p class="miniatura">Tanto para 'debian stretch' como para 'debian buster' coloque stretch na linha logo acima<br><br></p>
        <code>
        # exit<br>
        $ sudo apt update<br>
        </code>
    </div>

    <p class="comum">Agora vamos instalar o MySql propriamente dito...</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
        $ sudo apt install mysql-server<br>
        </code>
    </div>

    <p class="comum">Esta rodando ?</p>
    <p class="comum">Vamos ver...</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
        $ sudo systemctl status mysql<br>
        </code>
    </div>

    <p class="comum">Se desejar podemos instalar tamb&eacute;m o <strong>MySql Workbench</strong></p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
        $ sudo apt install mysql-workbench<br>
        </code>
    </div>

<!-- -------------------------------------------------------------------------------------------------------------->
    <?php
    include("pre-rodape.php");
    ?>

    <br id="mysql-linux-mint">
    <h4 class="reduzido">Instala&ccedil;&atilde;o do MySQL 8 e do MySQL Workbench no Linux Mint 19.3</h4>
    <br>
    <p class="comum">Primeiro, para instalar o MySQL vamos ver qual a &uacute;ltima vers&atilde;o do MySQL neste link</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            <a href="http://dev.mysql.com/downloads/repo/apt/" class="a" target="_blank">http://dev.mysql.com/downloads/repo/apt/</a>
        </code>
    </div>

    <p class="comum">Vamos criar a pasta, entrar, e fazer o download do arquivo que vai instalar os reposit&oacute;rios,</p>
    <p class="comum">&eacute; um arquivo pequeno com alguns kilo bytes</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ mkdir ~/Downloads/mysql<br>
            $ cd ~/Downloads/mysql<br>
            $ wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb<br>
        </code>
    </div>

    <p class="comum">Instalamos o arquivo que acabamos de baixar</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo dpkg -i mysql-apt-config_0.8.14-1_all.deb<br>
            &lt;Ok&gt; <span class="miniatura reduzido">tecle &lt;Enter&gt;</span>
        </code>
    </div>

    <p class="comum">Debem aparecer a mensagem e as op&ccedil;&otilde;es</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            Which MySQL product to you wish to configure?<br>
            <br>
            MySQL Server &amp; Cluster (Currently selected: mysql-8.0)<br>
            MySQL Tools &amp; Connectors (Currently selected: Enabled)<br>
            MySQL Preview Packages (Currently selected: Disabled)<br>
            Ok<br>
            <span class="miniatura reduzido">tecle &lt;TAB&gt; at&eacute; chegar no Ok</span><br>
            <span class="miniatura reduzido">tecle &lt;Enter&gt;</span>
        </code>
    </div>

    <br>
    <p class="comum">Abrir o Gerenciador de Atualiza&ccedil;&otilde;es do Linux Mint (aquele pequeno escudo)</p>
    <p class="comum">clicar em atualizar</p>
    <br>

    <p class="comum">Agora instalamos o MySQL</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install mysql-server<br>
        </code>
    </div>

    <p class="comum">Vai pedir a senha para o MySQL</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            Enter root password:<br>
            <span class="miniatura reduzido">digitamos uma senha (&eacute; bom anotar)</span>
        </code>
    </div>

    <p class="comum">Na proxima tela dar&aacute; informa&ccedil;&otilde;es sobre a autentica&ccedil;&atilde;o do MySQL</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            &lt;Ok&gt; <span class="miniatura reduzido">tecle &lt;Enter&gt;</span>
        </code>
    </div>

    <p class="comum">Na proxima tela pede que escolhamos a autentica&ccedil;&atilde;o do MySQL</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            Use Strong Password Encryption (RECOMMENDED)<br>
            Use Legancy Authentication Method (Retain MySQL 5.x Compatibility)<br>
            &lt;Ok&gt; <span class="miniatura reduzido">Vamos preferir a Recomendada, teclando &lt;TAB&gt; e &lt;Enter&gt;</span>
        </code>
    </div>

    <p class="comum">Finalizando a instala&ccedil;&atilde;o do MySQL</p>
    <p class="comum">Vamos verificar qual &eacute; o status dele...</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo systemctl status mysql<br>
            <span class="miniatura reduzido">caso n&atilde;o esteja ativo, use o pr&oacute;ximo comando</span><br>
            $ sudo systemctl start mysql<br>
        </code>
    </div>

    <p class="comum">Alguns comandos que podem ser &uacute;teis</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            <span class="miniatura reduzido">parar o MySQL</span><br>
            $ sudo systemctl stop mysql<br>
            <span class="miniatura reduzido">fazer o MySQL iniciar com o sistema</span><br>
            $ sudo systemctl enable mysql<br>
            <span class="miniatura reduzido">fazer o MySQL NÃO iniciar com o sistema</span><br>
            $ sudo systemctl disable mysql<br>
        </code>
    </div>

    <br>
    <h4 class="reduzido">Instala&ccedil;&atilde;o do MySQL Workbench</h4>


    <p class="comum">Agora instalamos o MySQL Workbench</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install mysql-workbench-community<br>
        </code>
    </div>


</section>

<?php
for($i=0; $i<13; $i++) {echo'<br>';}
include("rodape.php");
?>