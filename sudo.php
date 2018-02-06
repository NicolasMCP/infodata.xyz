<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do Sudo e SSH do Linux (agora neste html, antes em OOo)
Defaults:ALL timestamp_timeout=-1 siempre
Defaults:ALL timestamp_timeout=30 minutos
-->

<?php
include("cabecalho.php");
?>

<section>
<!--sudo-->

    <h1>Sudo e SSH, Linux Debian Stretch 9.3</h1>

    <h2>Configurar sudo</h2>
    <h3>Você deve incluir o seu usuário no arquivo de configuração</h3>
    <h4>Código</h4>
    <div class="box sombra">
        # visudo<br/>
    </div>

    <h3>Se o comando anterior não funcionar, use...</h3>
    <h4>Código</h4>
    <div class="box sombra">
        # apt install sudo<br/>

    </div>

    <h3>dentro do arquivo (após a linha do root) inclua a linha com seu usuario</h3>
    <h4>Incluir no arquivo (2º linha)</h4>
    <div class="box sombra">
        root    ALL=(ALL:ALL) ALL<br/>
        my      ALL=(ALL:ALL) ALL<br/>
    </div>
    <h3>Reinicie o computador</h3>

    <?php
    include("pre-rodape.php");
    ?>

    <h2>SSH Acesso restrito!</h2>
    <h3>Se você ainda não instalou o Servidor de SSH</h3>
    <h3>Utilize o comando a seguir...</h3>
    <h4>Código</h4>
    <div class="box sombra">
        $ sudo apt install openssh-server<br/>
    </div>

    <h3>Permitir somente usuários predeterminados logar via SSH</h3>
    <h4>Código</h4>
    <div class="box sombra">
        $ sudo vim /etc/ssh/sshd_config<br/>
    </div>

    <h4>Verify and Add In File</h4>
    <div class="box sombra">
        #--------------------------------------------------------<br/>
        # VERIFICAR SE A PRÓXIMA LINHA ESTA IGUAL A ESTA:<br/>
        PermitEmptyPasswords no<br/>
       <br/>
        # INCLUIR A PRÓXIMA LINHA:<br/>
        AllowUsers root nicolas suporte<br/>
        #--------------------------------------------------------<br/>
    </div>
    <h4>Código</h4>
    <div class="box sombra">
        $ sudo /etc/init.d/ssh restart<br/>
    </div>

    <?php
    include("pre-rodape.php");
    ?>

    <h2>Mudando a porta SSH</h2>

    <h3>Mudar a porta de acesso do SSH</h3>
    <h4>Código</h4>
    <div class="box sombra">
        $ sudo vim /etc/ssh/sshd_config<br/>
    </div>
    <h4>Código dentro do arquivo</h4>
    <div class="box sombra">
        #-------------------------------------------------<br/>
        # MUDAR A PORTA NA PRÓXIMA LINHA:<br/>
        Port 22<br/>
       <br/>
        #-------------------------------------------------<br/>
    </div>
    <h4>Código</h4>
    <div class="box sombra">
        $ sudo /etc/init.d/ssh restart<br/>
    </div>


    <?php
    include("rodape.php");
    ?>

    <h2>SSH, Erro broken pipe</h2>

    <h3>Para concertar temos que alterar um arquivo</h3>
    <h4>Código</h4>
    <div class="box sombra">
        $ sudo vim /etc/ssh/sshd_config<br/>
    </div>
    <h4>Código dentro do arquivo</h4>
    <div class="box sombra">
        #-------------------------------------------------<br/>
        # INCLUIR A PRÓXIMA LINHA:<br/>
        ServerAliveInterval 30<br/>
       <br/>
        #-------------------------------------------------<br/>
    </div>
    <h4>Código</h4>
    <div class="box sombra">
        $ sudo /etc/init.d/ssh restart<br/>
    </div>


    <?php
    include("rodape.php");
    ?>

</section>
</body>
</html>
