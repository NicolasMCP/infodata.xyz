<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 14/01/2018
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
    <p class="comum">Escolha entre a vers&atilde;o do MySql 5.6, 5.7 ou 8.0</p>
    <p class="comum justify">Aqui estou usando a 8.0 (se quiser outra, mude o n&uacute;mero da vers&atilde;o. Por exemplo mudando da 8.0 para 5.7, no Reposit&oacute;rio mude: mysql-8.0 para mysql-5.7, ali ap&oacute;s a palavra STRETCH em negrito. N&atilde;o se esque&ccedil;a de fazer isso nas duas linhas...)</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
        $ sudo su<br/>
        # echo &quot;# MySQL colocar os reposit&oacute;rios escolher entre 5.6, 5.7, 8.0&quot; &gt;&gt; /etc/apt/sources.list<br/>
        <!--# echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" >> /etc/apt/sources.list<br/>-->
        # echo &quot;deb [trusted=yes] http://repo.mysql.com/apt/debian/ <strong>stretch</strong> mysql-8.0&quot; &gt;&gt; /etc/apt/sources.list<br/>
        # echo &quot;deb-src [trusted=yes] http://repo.mysql.com/apt/debian/ <strong>stretch</strong> mysql-8.0&quot; &gt;&gt; /etc/apt/sources.list<br/>
        </code>
        <p class="miniatura">Tanto para 'debian stretch' como para 'debian buster' coloque stretch na linha logo acima<br/><br/></p>
        <code>
        # exit<br/>
        $ sudo apt update<br/>
        </code>
    </div>

    <p class="comum">Agora vamos instalar o MySql propriamente dito...</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
        $ sudo apt install mysql-server<br/>
        </code>
    </div>

    <p class="comum">Esta rodando ?</p>
    <p class="comum">Vamos ver...</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
        $ sudo systemctl status mysql<br/>
        </code>
    </div>

    <p class="comum">Se desejar podemos instalar tamb&eacute;m o <strong>MySql Workbench</strong></p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
        $ sudo apt install mysql-workbench<br/>
        </code>
    </div>

    <?php
    include("pre-rodape.php");
    ?>

    <p class="reduzido">Instala&ccedil;&atilde;o no Linux Mint...</p>
</section>

<?php
for($i=0; $i<3; $i++) {echo'<br/>';}
include("rodape.php");
?>