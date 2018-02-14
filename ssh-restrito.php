<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do acesso SSH do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>

        <h1>SSH Restringindo o Acesso, para Linux<br/>
            Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>

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
            AllowUsers root nome-usuario nome-usuario2<br/>
            #--------------------------------------------------------<br/>
        </div>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo /etc/init.d/ssh restart<br/>
        </div>

    </section>

<?php
for($i=0; $i<12; $i++) {echo'<br/>';}
include("rodape.php");
?>
