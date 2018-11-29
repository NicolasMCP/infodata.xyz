<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar dicas de instalação do Firebird e FlameRobin (agora neste html)
-->

<?php
include("cabecalho.php");
?>

<section>
    <!--Firebird 2.5-->

    <h1>Firebird e FlameRobin no Linux</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">8.2</span> Jessie</h2>

    <h3>Instalando o Firebird 2.5 no Debian</h3>
    <p class="comum">Para isso...</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt-get update<br/>
            $ sudo apt-get install firebird2.5-super<br/>
        </code>
    </div>
    <p class="comum">Dir&aacute; que o usu&aacute;rio SYSDBA e o Administrador da DB, e pede senha<br/>
        <strong>&quot;digite a senha do administrador SYSDBA&quot;</strong><br/>
        Ap&oacute;s o qual damos o seguinte comando<br/><br/></p>
    <div class="box sombra">
        <code>
            $ sudo dpkg-reconfigure firebird2.5-super<br/>
        </code>
    </div>

    <p class="comum">Optamos por <strong>SIM</strong></p>
    <p class="comum">Isso far&aacute; com que a base de dados inicie ao iniciar o SO</p>

    <br/>
    <?php
    include("pre-rodape.php");
    ?>
    <br/>

    <p class="comum">Verificar o estado do Firebird.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo /etc/init.d/firebird2.5-super status<br/>
        </code>
    </div>

    <p class="comum">Iniciar o Firebird.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo /etc/init.d/firebird2.5-super start<br/>
        </code>
    </div>

    <p class="comum">Parar o Firebird.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo /etc/init.d/firebird2.5-super stop<br/>
        </code>
    </div>

    <p class="comum">Reiniciar o Firebird.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo /etc/init.d/firebird2.5-super restart<br/>
        </code>
    </div>


    <br id="FlameRobin"/>
    <?php
    include("pre-rodape.php");
    ?>
    <br>

    <h4>Instalando o FlameRobin no Debian</h4>
    <h5 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">8.2</span> Jessie</h5>
    <p class="comum">Vou precisar descomentar o reposit&oacute;rio Multim&eacute;dia</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo vim /etc/apt/sources.list<br/>
        </code>
    </div>

    <p class="comum">Descomentamos o reposit&oacute;rio...</p>
    <p class="miniatura">Editar o arquivo</p>
    <div class="box sombra">
        <code>
            # deb-multim&eacute;dia<br/>
            deb http://www.deb-multimedia.org jessie main non-free<br/>
        </code>
    </div>

    <p class="comum">Atualizamos e instalamos.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt-get update<br/>
            $ sudo apt-get install deb-multimedia-keyring<br/>
            $ sudo apt-get update<br/>
            $ sudo apt-get install flamerobin<br/>
        </code>
    </div>

    <p class="comum">Eu vou preferir trabalhar em um diret&oacute;rio dentro do meu home</p>
    <p class="comum">Assim n&atilde;o vou esquecer de fazer o backup dele...</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ mkdir ~/bk<br/>
            $ sudo chown -R firebird:firebird db<br/>
            $ sudo chmod 777 db<br/>
        </code>
    </div>

    <p class="comum">Bom isto &eacute; coisa minha, eu prefiro usar os 3 BD do d&eacute;biam em
        tudo exceto quando &eacute; absolutamente necess&aacute;rio usar um reposit&oacute;rio...</p>
    <p class="comum">Como foi no caso aqui do rep&oacute;sit&oacute;rio Multim&eacute;dia.</p>
    <br/>
    <p class="comum">Ent&atilde;o agora prefiro voltar a comentar o reposit&oacute;rio, e continuar a usar meus BD locais do debian.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo vim /etc/apt/sources.list<br/>
        </code>
    </div>

    <p class="comum">Comentamos novamente o reposit&oacute;rio...</p>
    <p class="miniatura">Editar o arquivo</p>
    <div class="box sombra">
        <code>
            # deb-multim&eacute;dia<br/>
            ##deb http://www.deb-multimedia.org jessie main non-free<br/>
        </code>
    </div>

    <p class="comum">Atualizo novamente.</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt-get update<br/>
        </code>
    </div>


</section>

<?php
include("rodape.php");
?>