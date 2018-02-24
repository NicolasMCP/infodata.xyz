<!DOCTYPE html>
<!--
Autor  : Nicolas Ramos
Data   : 21/01/2018
Projeto: Dicas
Meta   : Organizar as dicas do acesso SSH do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>

    <h1>SSH Restringindo o Acesso</h1>
    <h2 class="reduzido">Testado em Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no
        Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>SSH Acesso restrito!</h3>

    <p class="comum">Se você ainda não instalou o Servidor de SSH</p>
    <p class="comum">Utilize o comando a seguir...</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
            $ sudo apt install openssh-server<br/>
        </code>
    </div>

    <p class="comum">Permitir somente usuários predeterminados logar via SSH</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
            $ sudo vim /etc/ssh/sshd_config<br/>
        </code>
    </div>

    <p class="miniatura">Verify and Add In File</p>
    <div class="box sombra">
        #--------------------------------------------------------<br/>
        # VERIFICAR SE A PRÓXIMA LINHA ESTA IGUAL A ESTA:<br/>
        PermitEmptyPasswords no<br/>
       <br/>
        # INCLUIR A PRÓXIMA LINHA:<br/>
        AllowUsers root nome-usuario nome-usuario2<br/>
        #--------------------------------------------------------<br/>
    </div>

    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
            $ sudo /etc/init.d/ssh restart<br/>
        </code>
    </div>

</section>

<?php
for($i=0; $i<13; $i++) {echo'<br/>';}
include("rodape.php");
?>
