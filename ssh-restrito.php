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
    <h2 class="reduzido">Testado em Debian <span style="font-family: 'Noto Sans', sans-serif;">8</span> Jessie</h2>

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

    <p class="comum justify">
        Verifique se encontra as seguintes linhas, dentro do arquivo, se estiverem comentadas, descomente;
        se estiverem diferentes, modifique para ficar iguais a estas;
        se não existirem, crie as que faltarem.
    </p>
    <p class="comum">A primeira linha só é necessaria caso queira incluir o 'root'</p>
    <p class="comum justify">Nota: é considerada uma má pratica liberar o uso do 'root' pelo ssh, más as vezes é necessário.</p>
    <p class="miniatura">Verify and Add In File</p>
    <div class="box sombra">
        PermitRootLogin yes<br/>
        PasswordAuthentication yes<br/>
        PermitEmptyPasswords no<br/>
        AllowUsers root nome-usuario nome-usuario2<br/>
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
