<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do LAMP e Node.js (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>
    <!--php-->

        <h1>PHP <span style="font-family: 'Noto Sans', sans-serif;">7.1.13</span> ou <span style="font-family: 'Noto Sans', sans-serif;">7.2.0</span> em Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span><br/>
            Stretch ou em Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>

        <h2>Instalar PHP 7.1.13 ou PHP 7.2.0</h2>
        <h3>Instalando o PHP</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo apt install apt-transport-https lsb-release ca-certificates<br/>
            $ sudo wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg<br/>
            $ sudo su<br/>
            # echo "## PHP 7.1.13 e 7.2.0" >> /etc/apt/sources.list<br/>
            <!--# echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" >> /etc/apt/sources.list<br/>-->
            # echo "deb https://packages.sury.org/php/ <strong>stretch</strong> main" >> /etc/apt/sources.list<br/>
            <h4>Tanto para 'debian stretch' como para 'debian buster' coloque stretch na linha logo acima<br/><br/></h4>
            # exit<br/>
            $ sudo apt update<br/>
        </div>

        <h3>Agora a parte que muda, para PHP 7.1.0 use:</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo apt install php7.1 libapache2-mod-php7.1 php7.1-mysql php7.1-curl php7.1-json<br/>
            $ sudo apt install php7.1-cgi php7.1-xsl php7.1-cli apache2-mod-php7.1 php7.1-mysqli php-pear<br/>
            $ sudo systemctl restart apache2<br/>
        </div>

        <h3>Já para o PHP 7.2.0 use:</h3>

        <h4>Código</h4>
        <div class="box sombra">
            $ sudo apt install php7.2 libapache2-mod-php7.2 php7.2-mysql php7.2-curl php7.2-json<br/>
            $ sudo apt install php7.2-cgi php7.2-xsl php7.2-cli apache2-mod-php7.2 php7.2-mysqli<br/>
            $ sudo systemctl restart apache2<br/>
        </div>

        <h3>Teste a instalação</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ php -v<br/>
            <p style="font-size: 12px;"><br/>
                PHP 7.1.13-1+0~20180105151623.14+stretch~1.gbp1086fa (cli) (built: Jan  5 2018 15:16:25) ( NTS )<br/>
                Copyright (c) 1997-2017 The PHP Group<br/>
                end Engine v3.1.0, Copyright (c) 1998-2017 Zend Technologies<br/>
                &nbsp;&nbsp;&nbsp;with Zend OPcache v7.1.13-1+0~20180105151623.14+stretch~1.gbp1086fa, Copyright (c) 1999-2017, by Zend Technologies<br/>
            </p>
                  <h4>ou se você instalou o PHP 7.2.0...</h4>
            <p style="font-size: 12px;"><br/>
                PHP 7.2.0-1+0~20171201111333.14+stretch~1.gbp47ee8a (cli) (built: Dec  1 2017 11:13:35) ( NTS )<br/>
                Copyright (c) 1997-2017 The PHP Group<br/>
                Zend Engine v3.2.0, Copyright (c) 1998-2017 Zend Technologies<br/>
                &nbsp;&nbsp;&nbsp;with Zend OPcache v7.2.0-1+0~20171201111333.14+stretch~1.gbp47ee8a, Copyright (c) 1999-2017, by Zend Technologies<br/>
            </p>
        </div>

        <h3>Crie um arquivo php de informações</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ cd /var/www/html<br/>
            $ sudo vim phpinfo.php<br/>
        </div>
        <h4>Incluir no arquivo</h4>
        <div class="box sombra">
            <span style="color: orange">&lt;?</span><span style="color: red">php</span><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="color: darkviolet">phpinfo</span><span style="color: darkred">();</span><br/>
            <span style="color: orange">?></span><br/>
        </div>
        <h4>Abra no seu Navegador</h4>
        <div class="box sombra">
            <a href="http://localhost/phpinfo.php" class="a" target="_blank">http://localhost/phpinfo.php</a>
        </div>

    </section>

<?php
include("rodape.php");
?>