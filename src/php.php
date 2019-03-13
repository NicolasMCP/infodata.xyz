<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do PHP (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--php-->

    <h1>Instalando o PHP em Linux</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.4</span> Stretch, no
        Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span></br>e MX Linux <span style="font-family: 'Noto Sans', sans-serif;">18.1</span></h2>
    <a href="#linux-mint" class="a" target="_parent">Instala&ccedil;&atilde;o no Linux Mint.</a>

    <h2>Instalar PHP <span style="font-family: 'Noto Sans', sans-serif;">7.2.16</span> no Debian</h2>
    <p class="comum">Instalando o PHP</p>
    <a href="vim.php" class="a" target="_blank">Pre-requisito, instala&ccedil;&atilde;o do VIM. (Opcional)</a><br>
    <a href="sudo.php" class="a" target="_blank">Pre-requisito, instala&ccedil;&atilde;o do SUDO (no debian)</a><br>
    <a href="apache.php" class="a" target="_blank">Pre-requisito, instala&ccedil;&atilde;o do Servidor Apache</a><br>
    <a href="mariaDB.php" class="a" target="_blank">Pre-requisito, instala&ccedil;&atilde;o do MariaDB</a><br>

    <p class="comum">Para que seu PHP possa ser instalado, precisaremos ter o Apache funcionando, portanto
    por favor abra no seu navegador o link abaixo para ter certeza do correto funcionamento do mesmo.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <a href="http://localhost" class="a" target="_blank">http://localhost</a>
    </div>
    <p class="comum">Agora come&ccedil;aremos a instala&ccedil;&atilde;o do PHP em si.</p>
    <p class="comum">Preparativos, incluindo o reposit&oacute;rio.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install apt-transport-https lsb-release ca-certificates<br/>
            $ sudo wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg<br/>
            $ sudo su<br/>
            # echo &quot;## 7.2 &quot; &gt;&gt; /etc/apt/sources.list<br/>
            <!--# echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" >> /etc/apt/sources.list<br/>-->
            # echo &quot;deb https://packages.sury.org/php/ <strong>stretch</strong> main&quot; &gt;&gt; /etc/apt/sources.list<br/>
        </code>
        <p class="miniatura">Tanto para 'debian stretch' como para 'debian buster' coloque stretch na linha logo acima<br/><br/></p>
        <code>
            # exit<br/>
            $ sudo apt update<br/>
        </code>
    </div>

    <p class="comum">Instala&ccedil;&atilde;o dos pacotes necess&aacute;rios</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install php7.2 libapache2-mod-php7.2 php7.2-mysql php7.2-curl php7.2-json php7.2-xsl php7.2-cli
            apache2-mod-php7.2 php7.2-mysql php7.2-dev php7.2-sqlite3 php7.2-mbstring php7.2-curl php-memcached
            php-pear php7.2-opcache php7.2-readline php7.2-gd php7.2-zip php7.2-xml php7.2-cgi<br/>
            $ sudo update-alternatives --set php /usr/bin/php7.2<br/>
            $ sudo service apache2 restart<br/>
        </code>
    </div>

    <p class="comum">Teste a instala&ccedil;&atilde;o</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ php -v<br/>
        </code>

         <p style="font-size: 12px;"><br/>
             PHP 7.2.5-1+0~20180505045740.21+stretch~1.gbpca2fa6 (cli) (built: May  5 2018 04:57:44) ( NTS )<br/>
             Copyright (c) 1997-2018 The PHP Group<br/>
             Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies<br/>
             with Zend OPcache v7.2.5-1+0~20180505045740.21+stretch~1.gbpca2fa6, Copyright (c) 1999-2018, by Zend Technologies<br/>
        </p>
    </div>

    <p class="comum">Crie um arquivo php de informa&ccedil;&odblac;es</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ cd /var/www/html<br/>
            $ sudo vim phpinfo.php<br/>
        </code>
    </div>

    <p class="miniatura">Incluir no arquivo</p>
    <div class="box sombra">
        <code>
            <span style="color: orange">&lt;?</span><span style="color: red">php</span><br/>
            <span style="color: darkviolet">phpinfo</span><span style="color: darkred">();</span><br/>
            <span style="color: orange">?&gt;</span><br/>
        </code>
    </div>

    <p class="comum">Abra no seu Navegador</p>
    <p class="miniatura">Web</p>
    <div class="box sombra">
        <a href="http://localhost/phpinfo.php" class="a" target="_blank">http://localhost/phpinfo.php</a>
    </div>

    <?php
    include("pre-rodape.php");
    ?>

    <h3 id="linux-mint">Instalar PHP <span style="font-family: 'Noto Sans', sans-serif;">7.2.10</span> no Linux Mint</h3>
    <h4 class="reduzido">Testado em Linux Mint 18.3 e 19</h4>
    <a href="#top" class="a" target="_parent">Instala&ccedil;&atilde;o no Linux Debian.</a>

    <p class="comum">Instalando o PHP</p>
    <a href="apache.php" class="a" target="_blank">Pre-requisito, instala&ccedil;&atilde;o do Servidor Apache</a><br>
    <a href="mariaDB.php" class="a" target="_blank">Pre-requisito, instala&ccedil;&atilde;o do MariaDB</a><br>


    <p class="comum">Instalando o PHP no Linux Mint</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install python-software-properties<br>
        </code>
        <p class="miniatura">O pr&oacute;ximo comando n&atilde;o &eacute; necess&aacute;rio para Linux Mint 19, s&oacute; para 18.3 ou anterior<br/></p>
        <code>
            $ sudo add-apt-repository ppa:ondrej/php<br>
        </code>
        <p class="miniatura">Atualizar pelo 'gerenciador de atualiza&ccedil;&odblac;es'<br/>
            Atualizar &gt; Instalar Atualiza&ccedil;&odblac;es<br/><br/></p>
    </div>


    <p class="comum">A instala&ccedil;&atilde;o dos pacotes...</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install php7.2 libapache2-mod-php7.2 php7.2-mysql php7.2-curl php7.2-json php7.2-cgi php7.2-xsl
            php7.2-cli apache2-mod-php7.2 php7.2-mysql php7.2-dev php7.2-sqlite3 php7.2-mbstring php7.2-curl
            php-memcached  php-pear php7.2-opcache php7.2-readline php7.2-gd php7.2-zip php7.2-xml<br/>
            $ sudo update-alternatives --set php /usr/bin/php7.2<br/>
            $ sudo service apache2 restart<br/>
        </code>
    </div>


    <p class="comum">Teste a instala&ccedil;&atilde;o</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ php -v<br/>
        </code>

        <p style="font-size: 12px;"><br/>
            PHP 7.2.10-0ubuntu0.18.04.1 (cli) (built: Sep 13 2018 13:45:02) ( NTS )<br/>
            Copyright (c) 1997-2018 The PHP Group<br/>
            Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies<br/>
            with Zend OPcache v7.2.10-0ubuntu0.18.04.1, Copyright (c) 1999-2018, by Zend Technologies<br/>
        </p>
    </div>


    <p class="comum">Agora crie um arquivo php de informa&ccedil;&odblac;es</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ cd /var/www/html<br/>
            $ sudo vim phpinfo.php<br/>
        </code>
    </div>

    <p class="miniatura">Incluir no arquivo</p>
    <div class="box sombra">
        <code>
            <span style="color: orange">&lt;?</span><span style="color: red">php</span><br/>
            <span style="color: darkviolet">phpinfo</span><span style="color: darkred">();</span><br/>
            <span style="color: orange">?&gt;</span><br/>
        </code>
    </div>

    <p class="comum">Abra no seu Navegador</p>
    <p class="miniatura">Web</p>
    <div class="box sombra">
        <a href="http://localhost/phpinfo.php" class="a" target="_blank">http://localhost/phpinfo.php</a>
    </div>

    <p class="comum">J&aacute; me aconteceu uma vez que fui testar e s&oacute; dava uma tela em branco</p>
    <p class="comum">em vez de aparecerem as informa&ccedil;&odblac;es do phpinfo();</p>
    <p class="comum">aqui algumas coisas que ajudaram:</p>
    <p class="comum">o comando 'php -v' (box um pouco acima), mostrava as informa&ccedil;&odblac;es de vers&atilde;o</p>
    <p class="comum">corretamente, ent&atilde;o fomos um pouco mais a fundo, no terminal</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ php -a<br>
        <p style="font-size: 12px;"><br/>
            Interactive mode enabled<br/>
            php &gt;<br/>
        </p>
    </div>

    <p class="comum">ent&atilde;o digitamos</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        php &gt; phpinfo();<br/>
    </div>

    <p class="comum">E o programa respondeu com as informa&ccedil;&odblac;es do phpinfo(); em modo texto,</p>
    <p class="comum">assim ficamos sabendo que o php estava funcionando.</p>
    <p class="comum">Portanto</p>

    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo vim /etc/php/7.2/apache2/php.ini<br/>
    </div>

    <p class="comum">Procure display_errors (<a href="vim.php" class="a" target="_blank">aprenda o b&aacute;sico do VIM</a>).</p>
    <p class="comum">Se encontrar a linha seguinte descomente (se tiver um ';' no inicio da linha).</p>
    <p class="comum">Se ela n&atilde;o existir, inclua conforme a seguir:</p>
    <p class="miniatura">Incluir no arquivo</p>
    <div class="box sombra">
        display_errors = On<br/>
    </div>

    <p class="comum">Abra no seu Navegador novamente, e verifique os erros</p>
    <p class="miniatura">Web</p>
    <div class="box sombra">
        <a href="http://localhost/phpinfo.php" class="a" target="_blank">http://localhost/phpinfo.php</a>
    </div>

    <p class="comum">No nosso caso simplesmente funcionou.</p><br>

    <p id="phpBrasil" class="comum">AGRADECIMENTO: Gostariamos de deixar registrados nossos agradecimentos a</p>
    <p class="comum">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Juliano S S, e Igor de Paula. do PHP Brasil (telegram),</p>
    <p class="comum">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pela sua ajuda na solu&ccedil;&atilde;o deste problema.</p>


</section>

<?php
include("rodape.php");
?>
