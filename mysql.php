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
    <!--apache-->

        <h1>LAMP no Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no</h1>
        <h1>Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>
        <h2>Instalar Apache 2.4.29</h2>
        <h3>Instalando o Apache 2.4.29</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo apt install apache2<br/>
        </div>

        <h3>Teste a instalação</h3>
        <h4>Abra no seu Navegador</h4>
        <div class="box sombra">
            <a href="http://localhost/" class="a" target="_blank">http://localhost/</a>
        </div>

        <?php
        include("pre-rodape.php");
        ?>


    <!--MariaDB-->
        <h2>Instalando MariaDB em vez do MySQL</h2>
        <h3>Só precisa descomentar os repositórios oficiais principais</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo apt install mysql-server<br/>
        </div>
        <h3>Se não funcionar verifique se os seus Repositorios tem no final 'non-free'</h3>
        <h4>Exemplo</h4>
        <div class="box sombra">
            # Oficial de stretch<br/>
             deb http://ftp.us.debian.org/debian/ stretch main contrib non-free<br/>
            <br/>
            # Atualizações de seguridade<br/>
             deb http://security.debian.org/debian-security stretch/updates main contrib non-free<br/>
        </div>

        <?php
        include("pre-rodape.php");
        ?>


    <!--MySql-->
        <h2>Instalando o MySQL da Oracle</h2>
        <h3>Escolha entre a versão do MySql 5.6, 5.7 ou 8.0</h3>
        <h3 class="justify">Aqui estou usando a 8.0 (se quiser outra, mude o número da versão. Por exemplo mudando da 8.0 para 5.7, no Repositório mude: mysql-8.0 para mysql-5.7, ali após a palavra STRETCH em negrito. Não se esqueça de fazer isso nas duas linhas...)</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo su<br/>
            # echo "# MySQL colocar os repositórios escolher entre 5.6, 5.7, 8.0" >> /etc/apt/sources.list<br/>
            <!--# echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" >> /etc/apt/sources.list<br/>-->
            # echo "deb [trusted=yes] http://repo.mysql.com/apt/debian/ <strong>stretch</strong> mysql-8.0" >> /etc/apt/sources.list<br/>
            # echo "deb-src [trusted=yes] http://repo.mysql.com/apt/debian/ <strong>stretch</strong> mysql-8.0" >> /etc/apt/sources.list<br/>
            <h4>Tanto para 'debian stretch' como para 'debian buster' coloque stretch na linha logo acima<br/><br/></h4>
            # exit<br/>
            $ sudo apt update<br/>
        </div>

        <h3>Agora vamos instalar o MySql propriamente dito...</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo apt install mysql-server<br/>
        </div>

        <h3>Esta rodando ?</h3>
        <h3>Vamos ver...</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo systemctl status mysql<br/>
        </div>

        <h3>Se desejár podemos instalar também o MySql Workbench</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo apt install mysql-workbench<br/>
        </div>


        <?php
        include("pre-rodape.php");
        ?>


    <!--php-->
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

        <?php
        include("pre-rodape.php");
        ?>


    <!--Node.js-->

        <h2>Instalar Node.js 9.3.0</h2>
        <h3>Instalando o Node.js 9.3.0</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ su<br/>
            # apt install curl<br/>
            # curl -sL https://deb.nodesource.com/setup_9.x | bash -<br/>
            # apt install nodejs<br/>
            # exit<br/>
        </div>
        <h3>Teste a instalação</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ node -v<br/>
            v9.3.0<br/><br/>
            $ npm -v<br/>
            5.5.1<br/>
        </div>
    </section>

<?php
include("rodape.php");
?>