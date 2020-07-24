<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do LAMP e Node.js (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>

    <h1>MariaDB no Linux.</h1>

    <h5>Instalando MariaDB no Linux Mint.</h5>
    <h6 class="reduzido">Testado no Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">20</span> Ulyana.</h6>
    <h6 class="reduzido">Testado no Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">19.3</span> Tricia.</h6>
    <h6 class="reduzido">Testado no Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">19.2</span> Tina.</h6>
    <a href="#linux-debian" class="a" target="_parent">Instala&ccedil;&atilde;o no Linux Debian.</a>

    <p class="comum">Vamos ver primeiro se esta rodando MariaDB ou MySQL...</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$sudo service mysql status</code>
        <p style="font-size: 11px" class="verde">Unit mysql.service could not be found.</p>
    </div>

    <p class="comum">Visto que n&atilde;o est&aacute; rodando, instalamos ent&atilde;o com</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ sudo apt install mariadb-server</code><br>
        <code>$ sudo service apache2 restart</code>
    </div>

    <p class="comum">Vamos verificar a vers&atilde;o instalada.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ mysql --version</code>
        <br><br>
        <p style="font-size: 11px" class="verde">
            mysql  Ver 15.1 Distrib 10.3.22-MariaDB, for debian-linux-gnu (x86_64) using readline 5.2
        </p>
    </div>

    <p class="comum">Para iniciar o MariaDB</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ sudo service mysql start</code><br>
    </div>

    <p class="comum" id="Conferir"></p>
    <br>
    <h7 class="reduzido">Conferir se o mariaDB esta rodando...</h7>
    <p class="comum">Vamos ver se realmente agora esta rodando MariaDB...</p>
    <p class="comum">Para sair voc&ecirc; pressionar a tecla 'q' (de quit).</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ sudo service mysql status</code><br>
        <p style="font-size: 11px" class="verde">
            ● mariadb.service - MariaDB 10.3.22 database server<br>
            &nbsp;&nbsp;&nbsp;Loaded: loaded (/lib/systemd/system/mariadb.service; enabled; vendor preset: enabled)<br>
            &nbsp;&nbsp;&nbsp;Active: <b>active (running)</b> since Fri 2020-07-24 10:16:36 -03; 27min ago<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Docs: man:mysqld(8)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;https://mariadb.com/kb/en/library/systemd/<br>
            &nbsp;Main PID: 11787 (mysqld)<br>
            &nbsp;&nbsp;&nbsp;Status: &quot;Taking your SQL requests now...&quot;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;Tasks: 30 (limit: 9312)<br>
            Memory: 68.5M<br>
            &nbsp;&nbsp;&nbsp;CGroup: /system.slice/mariadb.service<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─11787 /usr/sbin/mysqld<br>
            <br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>Processing databases</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>information_schema</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>mysql</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>performance_schema</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>Phase 6/7: Checking and upgrading tables</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>Processing databases</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>information_schema</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>performance_schema</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>Phase 7/7: Running 'FLUSH PRIVILEGES'</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>OK</b></p>
        <p class="reduzido miniatura verde">lines 1-22/22 (END)</p>
    </div>

    <p class="comum">Como Parar o mariaDB ?</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ sudo service mysql stop</code><br>
        <code>$ sudo service mysql status</code><br>
        <p style="font-size: 11px" class="verde">
            ● mariadb.service - MariaDB 10.3.22 database server<br>
            &nbsp;&nbsp;&nbsp;Loaded: loaded (/lib/systemd/system/mariadb.service; enabled; vendor preset: enabled)<br>
            &nbsp;&nbsp;&nbsp;Active: <b>inactive (dead)</b> since Fri 2020-07-24 11:17:03 -03; 1min 22s ago<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Docs: man:mysqld(8)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;https://mariadb.com/kb/en/library/systemd/<br>
            &nbsp;&nbsp;Process: 11787 ExecStart=/usr/sbin/mysqld $MYSQLD_OPTS $_WSREP_NEW_CLUSTER $_WSREP_START_POSITION (code=exited, status=0/SUCCESS)<br>
            &nbsp;Main PID: 11787 (code=exited, status=0/SUCCESS)<br>
            &nbsp;&nbsp;&nbsp;Status: &quot;<b>MariaDB server is down</b>&quot;<br>
            <br>

            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>performance_schema</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>Phase 6/7: Checking and upgrading tables</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>Processing databases</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>information_schema</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>performance_schema</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>Phase 7/7: Running 'FLUSH PRIVILEGES'</b><br>
            jul 24 10:16:38 Mint-20 /etc/mysql/debian-start[11825]: <b>OK</b><br>
            jul 24 11:17:01 Mint-20 systemd[1]: Stopping MariaDB 10.3.22 database server...<br>
            jul 24 11:17:03 Mint-20 systemd[1]: mariadb.service: Succeeded.</p>
        jul 24 11:17:03 Mint-20 systemd[1]: Stopped MariaDB 10.3.22 database server.</p>
        <p class="reduzido miniatura verde">lines 1-20/20 (END)</p>
    </div>

    <p class="comum">Como Iniciar o mariaDB ?</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ sudo service mysql start</code><br>
        <code>$ sudo service mysql status</code><br>
        <p style="font-size: 11px" class="verde">mariadb.service - MariaDB 10.1.43 database server
            ● mariadb.service - MariaDB 10.3.22 database server<br>
            &nbsp;&nbsp;&nbsp;Loaded: loaded (/lib/systemd/system/mariadb.service; enabled; vendor preset: enabled)<br>
            &nbsp;&nbsp;&nbsp;Active: <b>active (running)</b> since Fri 2020-07-24 11:33:46 -03; 10s ago<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Docs: man:mysqld(8)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;https://mariadb.com/kb/en/library/systemd/<br>
            &nbsp;&nbsp;Process: 19128 ExecStartPre=/usr/bin/install -m 755 -o mysql -g root -d /var/run/mysqld (code=exited, status=0/SUCCESS)<br>
            &nbsp;&nbsp;Process: 19139 ExecStartPre=/bin/sh -c systemctl unset-environment _WSREP_START_POSITION (code=exited, status=0/SUCCESS)<br>
            &nbsp;&nbsp;Process: 19141 ExecStartPre=/bin/sh -c [ ! -e /usr/bin/galera_recovery ] && VAR= ||   VAR=`/usr/bin/galera_recovery`; [ $? -eq 0 ]   && systemctl set-environment _WSREP&gt;<br>
            &nbsp;&nbsp;Process: 19220 ExecStartPost=/bin/sh -c systemctl unset-environment _WSREP_START_POSITION (code=exited, status=0/SUCCESS)<br>
            &nbsp;&nbsp;Process: 19222 ExecStartPost=/etc/mysql/debian-start (code=exited, status=0/SUCCESS)<br>
            &nbsp;Main PID: 19189 (mysqld)<br>
            &nbsp;&nbsp;&nbsp;Status: &quot;Taking your SQL requests now...&quot;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;Tasks: 31 (limit: 9312)<br>
            Memory: 70.8M<br>
            &nbsp;&nbsp;&nbsp;CGroup: /system.slice/mariadb.service<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─19189 /usr/sbin/mysqld<br>
            <br>
            jul 24 11:33:46 Mint-20 systemd[1]: Starting MariaDB 10.3.22 database server...<br>
            jul 24 11:33:46 Mint-20 mysqld[19189]: 2020-07-24 11:33:46 0 [Note] /usr/sbin/mysqld (mysqld 10.3.22-MariaDB-1ubuntu1) starting as process 19189 ...<br>
            jul 24 11:33:46 Mint-20 systemd[1]: Started MariaDB 10.3.22 database server.</b><br>
        <p class="reduzido miniatura verde">lines 1-20/20 (END)</p>
    </div>

    <p class="comum">Vamos entrar no MariaDB pela primeira vez... e ver o que tem dentro</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ sudo mysql -u root</code><br>
        <span class="azul">MariaDB [(none)]&gt;</span> SHOW DATABASES;<br>
        <p><span class="reduzido miniatura verde">
            +--------------------+<br>
            | Database &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            +--------------------+<br>
            | information_schema |<br>
            | mysql &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            | performance_schema |<br>
            +--------------------+<br>
            3 rows in set (0.001 sec)</span><br>
        </p>
        <p class="azul">MariaDB [(none)]&gt;</p>
    </div>

    <p class="comum">Vou querer colocar uma senha no root e permitir o acesso remoto, visto que este &eacute;
        um servidor de desenvolvimento, ent&atilde;o, posso permitir o acesso remoto facilitando o uso com
        programas como o mysql-workbeanch, phpadmin, e outros, se quiser.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <span class="azul">MariaDB [(none)]&gt;</span> USE mysql;<br>
        <p style="font-size: 11px" class="verde">
            Reading table information for completion of table and column names<br>
            You can turn off this feature to get a quicker startup with -A<br>
            <br>
            <span class="reduzido miniatura verde">Database changed</span><br>
        </p>
        <span class="azul">MariaDB [(none)]&gt;</span> <code>UPDATE user SET PLUGIN='' WHERE user='root';</code><br>
        <p class="reduzido miniatura verde">
            Query OK, 1 row affected (0.001 sec)<br>
            Rows matched: 1 &nbsp;&nbsp;Changed: 1 &nbsp;&nbsp;Warnings: 0<br>
            <br>
        </p>
        <span class="azul">MariaDB [(none)]&gt;</span> <code>FLUSH PRIVILEGES;</code><br>
        <p class="reduzido miniatura verde">
            Query OK, 0 rows affected (0.001 sec)
            <br>
            <br>
        </p>
        <span class="azul">MariaDB [(none)]&gt;</span> <code>SET PASSWORD FOR root@localhost = PASSWORD('Senh@3+2=5');</code><br>
        <p class="reduzido miniatura verde">
            Query OK, 0 rows affected (0.001 sec)
            <br>
            <br>
        </p>
        <span class="azul">MariaDB [(none)]&gt;</span> <code>exit;</code><br>
        <p class="reduzido miniatura verde">Bye<br>
        </p>
        <code>$</code>
    </div>

    <p class="comum">Vamos testar fazer o login remoto.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ mysql -u root -p</code><br>
        <span class="azul">Enter password:</span>
    </div>

    <p class="comum">Digite a senha que voc&ecirc; escolheu e colocou em lugar de <b>Senh@3+2=5</b> no comando
        SET PASSWORD logo acima, quando voc&ecirc; definiu a sua senha.</p>
    <p class="comum">Se voc&ecirc; n&atilde;o cometeu erros deve aparecer a seguinte mensagem.</p>
    <p class="comum"><b>Nota:</b> A partir deste ponto, substituirei '<span class="azul">MariaDB [(none)]&gt;</span>' simplesmente por '&gt;'.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <span class="azul">Enter password:</span>
        <p style="font-size: 11px" class="verde">
            Welcome to the MariaDB monitor.  Commands end with ; or \g.<br>
            Your MariaDB connection id is 37<br>
            Server version: 10.3.22-MariaDB-1ubuntu1 Ubuntu 20.04<br>
            <br>
            Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.<br>
            <br>
            Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.<br>
            <br>
        </p>
        &gt;
    </div>

    <p class="comum">Mostrar todas as bases de dados do mariaDB.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>&gt; SHOW DATABASES;</code>
        <p><span class="reduzido miniatura verde">
            +--------------------+<br>
            | Database &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            +--------------------+<br>
            | information_schema |<br>
            | mysql &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            | performance_schema |<br>
            +--------------------+<br>
            3 rows in set (0.001 sec)</span><br>
        </p>
    </div>

    <p class="comum">Criar uma nova base de dados, vamos dar o nome de 'testes'.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>&gt; CREATE DATABASE test;</code><br>
        <code>&gt; SHOW DATABASES;</code>
        <p><span class="reduzido miniatura verde">
            +--------------------+<br>
            | Database &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            +--------------------+<br>
            | information_schema |<br>
            | mysql &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            | performance_schema |<br>
            | test &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            +--------------------+<br>
            4 rows in set (0.001 sec)</span><br>
        </p>
    </div>

    <p class="comum">Deletar uma base de dados, chamada 'testes'.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>&gt; DROP DATABASE test;</code><br>
        <code>&gt; SHOW DATABASES;</code>
        <p><span class="reduzido miniatura verde">
            +--------------------+<br>
            | Database &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            +--------------------+<br>
            | information_schema |<br>
            | mysql &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            | performance_schema |<br>
            +--------------------+<br>
            3 rows in set (0.001 sec)</span><br>
            <code>&gt; exit;</code><br>
            $
        </p>
    </div>

    <p class="comum">Para saber mais detalhes da vers&atilde;o voc&ecirc; pode usar:</p>
    <p class="comum">Digite a senha que voc&ecirc; escolheu em lugar de <b>Senh@3+2=5</b></p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ mysqladmin -u root -p version</code><br>
        <span class="azul">Enter password:</span>
        <p style="font-size: 11px" class="verde">
            mysqladmin  Ver 9.1 Distrib 10.3.22-MariaDB, for debian-linux-gnu on x86_64<br>
            Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.<br>
            <br>
            Server version &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10.3.22-MariaDB-1ubuntu1<br>
            Protocol version &nbsp;&nbsp; 10<br>
            Connection &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Localhost via UNIX socket<br>
            UNIX socket &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /var/run/mysqld/mysqld.sock<br>
            Uptime: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 hour 15 min 13 sec<br>
            <br>
            Threads: 7 &nbsp;Questions: 107 &nbsp;Slow queries: 0 &nbsp;Opens: 37 &nbsp;Flush tables: 1 &nbsp;Open tables: 31 &nbsp;Queries per second avg: 0.023<br>
        </p>
        $
    </div>

    <p class="comum">Criar uma nova base de dados, <b>direto da consola</b>, vamos dar o nome de 'testes2'.</p>
    <p class="comum">Digite a senha que voc&ecirc; escolheu em lugar de <b>Senh@3+2=5</b></p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ mysqladmin -u root -p create testes2</code><br>
        <code>$ mysql -u root -p</code><br>
        <code>&gt; SHOW DATABASES;</code><br>
        <span class="reduzido miniatura verde">
            +--------------------+<br>
            | Database &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            +--------------------+<br>
            | information_schema |<br>
            | mysql &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            | performance_schema |<br>
            | testes2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            +--------------------+<br>
            4 rows in set (0.001 sec)</span><br>
        <code>&gt; exit;</code><br>
        $
    </div>

    <p class="comum">Deletar a base de dados, 'testes2' <b>direto da consola</b>.</p>
    <p class="comum">Digite a senha que voc&ecirc; escolheu em lugar de <b>Senh@3+2=5</b></p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ mysqladmin -u root -p drop testes2</code><br>
        <code>$ mysql -u root -p</code><br>
        <code>&gt; SHOW DATABASES;</code><br>
        <span class="reduzido miniatura verde">
            +--------------------+<br>
            | Database &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            +--------------------+<br>
            | information_schema |<br>
            | mysql &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            | performance_schema |<br>
            +--------------------+<br>
            3 rows in set (0.041 sec)</span>
        <code>&gt;</code><br>
    </div>

    <p class="comum">Criar um novo usu&aacute;rio 'my' do localhost.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>&gt; CREATE USER my@localhost IDENTIFIED BY 'Senh@';</code>
        <p class="reduzido miniatura verde">Query OK, 0 rows affected (0.001 sec)</p>
    </div>

    <p class="comum">Dar a 'my' do localhost todo acesso a uma DB chamada 'maromba' (que ainda n&atilde;o criamos).</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>&gt; GRANT ALL ON maromba.* TO my@localhost;</code>
        <p class="reduzido miniatura verde">Query OK, 0 rows affected (0.001 sec)</p>
        <code>&gt; FLUSH PRIVILEGES;</code>
        <p class="reduzido miniatura verde">Query OK, 0 rows affected (0.001 sec)</p>
        <code>&gt; SELECT host, user FROM mysql.user;</code>
        <p class="miniatura verde">
            +------------------+<br>
            | host &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            +------------------+<br>
            | localhost | my &nbsp;&nbsp;|<br>
            | localhost | host |<br>
            +------------------+<br>
            <span class="reduzido miniatura verde">2 rows in set (0.001 sec)</span><br>
        </p>
        <code>&gt; exit;</code><br>
        <p class="reduzido miniatura verde">Bye<br>
        </p>
        <code>$</code>
    </div>

    <p class="comum">Agora vamos testar com o novo usu&aacute;rio.</p>
    <p class="comum">Digite a senha que voc&ecirc; escolheu em lugar de <b>Senh@</b></p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ mysql -u my -p</code><br>
        <span class="azul">Enter password:</span>
        <p style="font-size: 11px" class="verde">
            Welcome to the MariaDB monitor.  Commands end with ; or \g.<br>
            Your MariaDB connection id is 14<br>
            Server version: 10.3.22-MariaDB-1ubuntu1 Ubuntu 20.04<br>
            <br>
            Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.<br>
            <br>
            Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.<br>
            <br>
        </p>
        <code>&gt; SHOW DATABASES;</code>
        <p class="miniatura verde">
            +--------------------+<br>
            | Database &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            +--------------------+<br>
            | information_schema |<br>
            +--------------------+<br>
            <span class="reduzido miniatura verde">1 rows in set (0.001 sec)</span><br>
        </p>

        <p><br><code>&gt; CREATE DATABASE maromba;</code></p>

        <p><span class="reduzido miniatura verde">Query OK, 1 row affected (0.001 sec)</span><br>
        </p>

        <p><br><code>&gt; SHOW DATABASES;</code></p>

        <p class="miniatura verde">
            +--------------------+<br>
            | Database &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            +--------------------+<br>
            | information_schema |<br>
            | maromba &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
            +--------------------+<br>
            <span class="reduzido miniatura verde">2 rows in set (0.001 sec)</span><br>
        </p>
        <code>&gt; exit;</code><br>
        <p class="reduzido miniatura verde">Bye<br>
        </p>
        <code>$</code>
    </div>

    <h7 class="reduzido">Como desinstalar totalmente o MariaDB</h7>
    <p class="comum">Use os seguintes comandos</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ sudo su</code><br>
        <code># service mysql stop</code><br>
        <code># service mysql status</code><br>
        <code># apt remove mariadb-server</code><br>
        <code># apt remove --purge mysql-server</code><br>
        <code># apt autoremove</code><br>
        <code># apt remove --purge mysql-common</code><br>
        <code># rm -rf /var/lib/mysql</code><br>
        <code># apt autoremove --purge</code><br>
        <code># apt autoclean</code><br>
        <code># apt clean</code><br>
        <code># reboot</code><br>
    </div>

    <?php
    include("pre-rodape.php");
    ?>

    <!-- ------------------------------------------------------------------------------------------------------------>


    <h2 id="linux-debian">Instalando MariaDB no Debian.</h2>
    <h3 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.4</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster.</h3>
    <a href="#top" class="a" target="_parent">Instala&ccedil;&atilde;o no Linux Mint.</a>
    <!--MariaDB-->
    <p class="comum">S&oacute; precisa descomentar os reposit&oacute;rios oficiais principais.</p>
    <p class="comum">Verifique se tem estes reposit&oacute;rios.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ sudo cat /etc/apt/sources.list</code><br>
        <br>
        <p style="font-size: 12px">
            # verificar se temos estes reposit&oacute;rios, em especial o non-free (no final)<br>
            <br>
            ## Debian - stretch<br>
            deb http://ftp.us.debian.org/debian/ stretch main contrib non-free<br>
            deb-src http://ftp.us.debian.org/debian/ stretch main contrib non-free<br>
            ## Atualiza&ccedil;&otilde;es de seguran&ccedil;a<br>
            deb http://security.debian.org/ stretch/updates main contrib non-free<br>
            deb-src http://security.debian.org/ stretch/updates main contrib non-free<br>
        </p>
    </div>


    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ sudo apt install mariadb-server</code>
    </div>

    <p class="comum">Vamos verificar a vers&atilde;o instalada.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>$ mysql --version</code>
        <br><br>
        <p style="font-size: 12px">
            mysql  Ver 15.1 Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64) using readline 5.2
        </p>
    </div>

    <br>
    <a href="#Conferir" class="a">Conferir se o mariaDB esta rodando...</a><span class="comum"> E outros comandos &uacute;teis...</span>
    <br>
    <br>

<!-- ------------------------------------------------------------------------------------------------------------>

</section>

<?php
include("rodape.php");
?>
