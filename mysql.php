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

        <h1>MySQL no Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no<br/>
            Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>

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

    </section>

<?php
for($i=0; $i<3; $i++) {echo'<br/>';}
include("rodape.php");
?>