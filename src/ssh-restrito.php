<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do acesso SSH do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>

    <h1>SSH Restringindo o Acesso</h1>
    <h2 class="reduzido">Testado em Debian <span style="font-family: 'Noto Sans', sans-serif;">8</span> Jessie</h2>

    <h3>SSH Acesso restrito!</h3>

    <p class="comum">Se voc&ecirc; ainda n&atilde;o instalou o Servidor de SSH</p>
    <p class="comum">Utilize o comando a seguir...</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo apt install openssh-server<br/>
        </code>
    </div>

    <p class="comum">Permitir somente usu&aacute;rios predeterminados logar via SSH</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        <code>
            $ sudo vim /etc/ssh/sshd_config<br/>
        </code>
    </div>

    <p class="comum justify">
        Verifique se encontra as seguintes linhas, dentro do arquivo, se estiverem comentadas, descomente;
        se estiverem diferentes, modifique para ficar iguais a estas;
        se n&atilde;o existirem, crie as que faltarem.
    </p>
    <p class="comum">A primeira linha s&oacute; &eacute; necessaria caso queira incluir o 'root'</p>
    <p class="comum justify">Nota: &eacute; considerada uma m&aacute; pratica liberar o uso do 'root' pelo ssh, m&aacute;s as vezes &eacute; necess&aacute;rio.</p>
    <p class="miniatura">Verify and Add In File</p>
    <div class="box sombra">
        PermitRootLogin yes<br/>
        PasswordAuthentication yes<br/>
        PermitEmptyPasswords no<br/>
        AllowUsers root nome-usuario nome-usuario2<br/>
    </div>

    <p class="miniatura">C&oacute;digo</p>
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
