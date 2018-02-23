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
<!--MySql-->

    <h1>Instalando o MySQL no Linux</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>
    <p class="comum">Nota: A instalação para Linux Mint esta logo abaixo.</p>

    <h3>Instalando o MySQL da Oracle no Debian</h3>
    <p class="comum">Escolha entre a versão do MySql 5.6, 5.7 ou 8.0</p>
    <p class="comum justify">Aqui estou usando a 8.0 (se quiser outra, mude o número da versão. Por exemplo mudando da 8.0 para 5.7, no Repositório mude: mysql-8.0 para mysql-5.7, ali após a palavra STRETCH em negrito. Não se esqueça de fazer isso nas duas linhas...)</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
        $ sudo su<br/>
        # echo "# MySQL colocar os repositórios escolher entre 5.6, 5.7, 8.0" >> /etc/apt/sources.list<br/>
        <!--# echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" >> /etc/apt/sources.list<br/>-->
        # echo "deb [trusted=yes] http://repo.mysql.com/apt/debian/ <strong>stretch</strong> mysql-8.0" >> /etc/apt/sources.list<br/>
        # echo "deb-src [trusted=yes] http://repo.mysql.com/apt/debian/ <strong>stretch</strong> mysql-8.0" >> /etc/apt/sources.list<br/>
        </code>
        <p class="miniatura">Tanto para 'debian stretch' como para 'debian buster' coloque stretch na linha logo acima<br/><br/></p>
        <code>
        # exit<br/>
        $ sudo apt update<br/>
        </code>
    </div>

    <p class="comum">Agora vamos instalar o MySql propriamente dito...</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
        $ sudo apt install mysql-server<br/>
        </code>
    </div>

    <p class="comum">Esta rodando ?</p>
    <p class="comum">Vamos ver...</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
        $ sudo systemctl status mysql<br/>
        </code>
    </div>

    <p class="comum">Se desejar podemos instalar também o <strong>MySql Workbench</strong></p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
        $ sudo apt install mysql-workbench<br/>
        </code>
    </div>

    <?php
    include("pre-rodape.php");
    ?>

    <p class="reduzido">Instalação no Linux Mint...</p>
</section>

<?php
for($i=0; $i<3; $i++) {echo'<br/>';}
include("rodape.php");
?>