<!DOCTYPE html>
<!--
Autor  : Nicolas Ramos
Data   : 23/02/2018
Projeto: Dicas
Meta   : Organizar as dicas do PHP (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--php-->

    <h1>Instalando o PHP em Linux</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>
    <p class="comum">Nota: A instalação para Linux Mint esta logo abaixo.</p>

    <h2>Instalar PHP <span style="font-family: 'Noto Sans', sans-serif;">7.1.13</span> ou <span style="font-family: 'Noto Sans', sans-serif;">7.2.0</span> no Debian</h2>
    <p class="comum">Instalando o PHP</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
            $ sudo apt install apt-transport-https lsb-release ca-certificates<br/>
            $ sudo wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg<br/>
            $ sudo su<br/>
            # echo "## PHP 7.1.13 e 7.2.0" >> /etc/apt/sources.list<br/>
            <!--# echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" >> /etc/apt/sources.list<br/>-->
            # echo "deb https://packages.sury.org/php/ <strong>stretch</strong> main" >> /etc/apt/sources.list<br/>
        </code>
        <p class="miniatura">Tanto para 'debian stretch' como para 'debian buster' coloque stretch na linha logo acima<br/><br/></p>
        <code>
            # exit<br/>
            $ sudo apt update<br/>
        </code>
    </div>

    <p class="comum">Agora a parte que muda, para PHP 7.1.0 use:</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
            $ sudo apt install php7.1 libapache2-mod-php7.1 php7.1-mysql php7.1-curl php7.1-json<br/>
            $ sudo apt install php7.1-cgi php7.1-xsl php7.1-cli apache2-mod-php7.1 php7.1-mysqli php-pear<br/>
            $ sudo systemctl restart apache2<br/>
        </code>
    </div>

    <p class="comum">Já para o PHP 7.2.0 use:</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
            $ sudo apt install php7.2 libapache2-mod-php7.2 php7.2-mysql php7.2-curl php7.2-json<br/>
            $ sudo apt install php7.2-cgi php7.2-xsl php7.2-cli apache2-mod-php7.2 php7.2-mysqli<br/>
            $ sudo systemctl restart apache2<br/>
        </code>
    </div>

    <p class="comum">Teste a instalação</p>
    <p class="miniatura">Código</p>
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
              <p class="miniatura">ou se você instalou o PHP 7.2.0...</p>
        <p style="font-size: 12px;"><br/>
            PHP 7.2.0-1+0~20171201111333.14+stretch~1.gbp47ee8a (cli) (built: Dec  1 2017 11:13:35) ( NTS )<br/>
            Copyright (c) 1997-2017 The PHP Group<br/>
            Zend Engine v3.2.0, Copyright (c) 1998-2017 Zend Technologies<br/>
            &nbsp;&nbsp;&nbsp;with Zend OPcache v7.2.0-1+0~20171201111333.14+stretch~1.gbp47ee8a, Copyright (c) 1999-2017, by Zend Technologies<br/>
        </p>
    </div>

    <p class="comum">Crie um arquivo php de informações</p>
    <p class="miniatura">Código</p>
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
            <span style="color: orange">?></span><br/>
        </code>
    </div>

    <p class="comum">Abra no seu Navegador</p>
    <div class="box sombra">
        <a href="http://localhost/phpinfo.php" class="a" target="_blank">http://localhost/phpinfo.php</a>
    </div>

    <?php
    include("pre-rodape.php");
    ?>

    <h3>Instalar PHP <span style="font-family: 'Noto Sans', sans-serif;">7.1.14</span> ou <span style="font-family: 'Noto Sans', sans-serif;">7.2.2</span> no Linux Mint</h3>
    <h4 class="reduzido">Testado em Linux Mint 18.3</h4>

    <p class="comum">Instalando o PHP no Linux Mint</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
            $ sudo add-apt-repository -y ppa:ondrej/php<br/>
        </code>
        <p class="miniatura">Atualizar pelo 'gerenciador de atualizações'<br/>
            Atualizar > Instalar Atualizações<br/><br/></p>
        <code>
            $ sudo apt install php7.1-cli libapache2-mod-php7.1 php7.1-mysql php7.1-curl php-memcached php7.1-dev php7.1-mcrypt php7.1-sqlite3 php7.1-mbstring php7.1-cgi<br/>
        </code>
    </div>

    <p class="comum">Se desejar instalar a versão 7.2.2, basta trocar o 7.1 por 7.2 no comando anterior</p> <br/>

    <p class="comum">Agora crie um arquivo php de informações</p>
    <p class="miniatura">Código</p>
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
            <span style="color: orange">?></span><br/>
        </code>
    </div>

    <p class="comum">Abra no seu Navegador</p>
    <div class="box sombra">
        <a href="http://localhost/phpinfo.php" class="a" target="_blank">http://localhost/phpinfo.php</a>
    </div>

</section>

<?php
include("rodape.php");
?>