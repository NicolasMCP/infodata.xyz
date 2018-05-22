<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 23/02/2018
    Nota : Organizar as dicas do PHP (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--php-->

    <h1>Instalando o PHP em Linux</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>
    <a href="#linux-mint" class="a" target="_parent">Instala&ccedil;&atilde;o no Linux Mint.</a>

    <h2>Instalar PHP <span style="font-family: 'Noto Sans', sans-serif;">7.1.13</span> ou <span style="font-family: 'Noto Sans', sans-serif;">7.2.0</span> no Debian</h2>
    <p class="comum">Instalando o PHP</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install apt-transport-https lsb-release ca-certificates<br/>
            $ sudo wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg<br/>
            $ sudo su<br/>
            # echo &quot;## PHP 7.1.13 e 7.2.0&quot; &gt;&gt; /etc/apt/sources.list<br/>
            <!--# echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" >> /etc/apt/sources.list<br/>-->
            # echo &quot;deb https://packages.sury.org/php/ <strong>stretch</strong> main&quot; &gt;&gt; /etc/apt/sources.list<br/>
        </code>
        <p class="miniatura">Tanto para 'debian stretch' como para 'debian buster' coloque stretch na linha logo acima<br/><br/></p>
        <code>
            # exit<br/>
            $ sudo apt update<br/>
        </code>
    </div>

    <p class="comum">Agora a parte que muda, para PHP 7.1 use:</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install php7.1 libapache2-mod-php7.1 php7.1-mysql php7.1-curl php7.1-json<br/>
            $ sudo apt install php7.1-cgi php7.1-xsl php7.1-cli apache2-mod-php7.1 php7.1-mysqli<br/>
            $ sudo apt install php7.1-dev php7.1-mcrypt php7.1-sqlite3 php7.1-mbstring php7.1-curl<br/>
            $ sudo apt install php-memcached php-pear php7.1-opcache php7.1-readline<br/>
            $ sudo apt install php7.1-gd php7.1-zip php7.1-xml<br/>
            $ sudo update-alternatives --set php /usr/bin/php7.1<br/>
            $ sudo systemctl restart apache2<br/>
        </code>
    </div>

    <p class="comum">J&aacute; para o PHP 7.2 use:</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install php7.2 libapache2-mod-php7.2 php7.2-mysql php7.2-curl php7.2-json<br/>
            $ sudo apt install php7.2-cgi php7.2-xsl php7.2-cli apache2-mod-php7.2 php7.2-mysqli<br/>
            $ sudo apt install php7.2-dev php7.2-sqlite3 php7.2-mbstring php7.2-curl<br/>
            $ sudo apt install php-memcached  php-pear php7.1-opcache php7.1-readline<br/>
            $ sudo apt install php7.1-gd php7.1-zip php7.1-xml<br/>
            $ sudo update-alternatives --set php /usr/bin/php7.2<br/>
            $ sudo systemctl restart apache2<br/>
        </code>
    </div>

    <p class="comum">Teste a instala&ccedil;&atilde;o</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ php -v<br/>
        </code>

        <p style="font-size: 12px;"><br/>
            PHP 7.1.13-1+0~20180105151623.14+stretch~1.gbp1086fa (cli) (built: Jan  5 2018 15:16:25) ( NTS )<br/>
            Copyright (c) 1997-2017 The PHP Group<br/>
            end Engine v3.1.0, Copyright (c) 1998-2017 Zend Technologies<br/>
            &nbsp;&nbsp;&nbsp;with Zend OPcache v7.1.13-1+0~20180105151623.14+stretch~1.gbp1086fa, Copyright (c) 1999-2017, by Zend Technologies<br/>
        </p>
              <p class="miniatura">ou se você instalou o PHP 7.2...</p>
        <p style="font-size: 12px;"><br/>
            PHP 7.2.0-1+0~20171201111333.14+stretch~1.gbp47ee8a (cli) (built: Dec  1 2017 11:13:35) ( NTS )<br/>
            Copyright (c) 1997-2017 The PHP Group<br/>
            Zend Engine v3.2.0, Copyright (c) 1998-2017 Zend Technologies<br/>
            &nbsp;&nbsp;&nbsp;with Zend OPcache v7.2.0-1+0~20171201111333.14+stretch~1.gbp47ee8a, Copyright (c) 1999-2017, by Zend Technologies<br/>
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

    <h3 id="linux-mint">Instalar PHP <span style="font-family: 'Noto Sans', sans-serif;">7.1.17</span> ou <span style="font-family: 'Noto Sans', sans-serif;">7.2.5</span> no Linux Mint</h3>
    <h4 class="reduzido">Testado em Linux Mint 18.3</h4>
    <a href="#top" class="a" target="_parent">Instala&ccedil;&atilde;o no Linux Debian.</a>

    <p class="comum">Instalando o PHP no Linux Mint</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install python-software-properties<br>
            $ sudo add-apt-repository ppa:ondrej/php<br>
        </code>
        <p class="miniatura">Atualizar pelo 'gerenciador de atualiza&ccedil;&odblac;es'<br/>
            Atualizar &gt; Instalar Atualiza&ccedil;&odblac;es<br/><br/></p>
    </div>


    <p class="comum">Agora a parte que muda, para PHP 7.1 use:</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install php7.1 libapache2-mod-php7.1 php7.1-mysql php7.1-curl php7.1-json<br/>
            $ sudo apt install php7.1-cgi php7.1-xsl php7.1-cli apache2-mod-php7.1 php7.1-mysqli<br/>
            $ sudo apt install php7.1-dev php7.1-mcrypt php7.1-sqlite3 php7.1-mbstring php7.1-curl<br/>
            $ sudo apt install php-memcached php-pear php7.1-opcache php7.1-readline<br/>
            $ sudo apt install php7.1-gd php7.1-zip php7.1-xml<br/>
            $ sudo update-alternatives --set php /usr/bin/php7.1<br/>
            $ sudo systemctl restart apache2<br/>
        </code>
    </div>

    <p class="comum">J&aacute; para o PHP 7.2 use:</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install php7.2 libapache2-mod-php7.2 php7.2-mysql php7.2-curl php7.2-json<br/>
            $ sudo apt install php7.2-cgi php7.2-xsl php7.2-cli apache2-mod-php7.2 php7.2-mysqli<br/>
            $ sudo apt install php7.2-dev php7.2-sqlite3 php7.2-mbstring php7.2-curl<br/>
            $ sudo apt install php-memcached  php-pear php7.2-opcache php7.2-readline<br/>
            $ sudo apt install php7.2-gd php7.2-zip php7.2-xml<br/>
            $ sudo update-alternatives --set php /usr/bin/php7.2<br/>
            $ sudo systemctl restart apache2<br/>
        </code>
    </div>


    <p class="comum">Teste a instala&ccedil;&atilde;o</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ php -v<br/>
        </code>

        <p style="font-size: 12px;"><br/>
            PHP 7.1.17-1+ubuntu16.04.1+deb.sury.org+1 (cli) (built: May  5 2018 04:55:21) ( NTS )<br/>
            Copyright (c) 1997-2018 The PHP Group<br/>
            Zend Engine v3.1.0, Copyright (c) 1998-2018 Zend Technologies<br/>
            with Zend OPcache v7.1.17-1+ubuntu16.04.1+deb.sury.org+1, Copyright (c) 1999-2018, by Zend Technologies<br/>
        </p>
        <p class="miniatura">ou se você instalou o PHP 7.2...</p>
        <p style="font-size: 12px;"><br/>
            PHP 7.2.5-1+ubuntu16.04.1+deb.sury.org+1 (cli) (built: May  5 2018 04:59:13) ( NTS )<br/>
            Copyright (c) 1997-2018 The PHP Group<br/>
            Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies<br/>
            with Zend OPcache v7.2.5-1+ubuntu16.04.1+deb.sury.org+1, Copyright (c) 1999-2018, by Zend Technologies<br/>
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
        php > phpinfo();<br/>
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