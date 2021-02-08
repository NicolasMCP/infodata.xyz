<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas neste html, criado inicialmente em 06/10/2020. Sujeito a mudanças.
-->

<?php
include("cabecalho.php");
?>

<section>
<!--InstalarJDK-->

	<h1>Instalando um Ambiente Java</h1>
    <h2 class="reduzido">Testado em Linux Mint <span style="font-family: 'Noto Sans', sans-serif;">20</span> Ulyana e em<br>
    Ubuntu <span style="font-family: 'Noto Sans', sans-serif;">20</span> Focal Fossa.</h2>

    <h3>Instala&ccedil;&atilde;o do JDK <span style="font-family: 'Noto Sans', sans-serif;">11.0.8</span> LST da Amazon</h3>
    <p class="comum">(Isto &eacute; o que costumamos chamar de 'receita de bolo')</p><br>
    <p class="comum">Acompanhe passo a passo da instala&ccedil;&atilde;o...</p><br>
    <p class="comum">Clique no link a seguir</p>
    <p class="comum"><a href="https://github.com/corretto/corretto-11/releases" class="a" target="_blank">JDK 11.0.8 LST da Amazon</a>.
        Para voc&ecirc; fazer o download do JDK 11.0.8 LST da Amazon.</p>
    <p class="comum">Vai aparecer uma tela semelhante a esta:</p><br>

    <!-- Estou ciente de que a imagem é maior do que o determinado, no entanto o objetivo é que a pessoa se desejar
    possa ver a imagem em outra aba no tamanho e resolução total, para ter uma melhor visualização-->
    <img src="../img/jdk-amazon-links.png" width="800" height="552">

    <p class="comum">Tanto o Linux Mint 20 como Ubuntu 20, de 64bits, clique no primeiro link</p>

    <p class="comum">Vai aparecer uma tela semelhante a esta:</p><br>

    <img src="../img/jdk-amazon-correto-01.png">

    <p class="comum">Clique em OK.</p><br>

    <img src="../img/jdk-amazon-correto-02.png">

    <p class="comum">Clique em Instalar Pacote.</p><br>

    <img src="../img/jdk-amazon-correto-03.png">

    <p class="comum">Depois de autenticar, abra o terminal e use:</p>

    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        java -version<br>
        javac -version
    </div>

    <p class="comum">O resultado dever&aacute; ser semelhante a este</p><br>

    <!-- Estou ciente de que a imagem é maior do que o determinado, no entanto o objetivo é que a pessoa se desejar
    possa ver a imagem em outra aba no tamanho e resolução total, para ter uma melhor visualização-->
    <img src="../img/jdk-amazon-correto-04.png" width="800" height="377">


    <p class="comum">Depois instale o git assim:</p>

    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        sudo apt install git
    </div>

    <p class="comum">O resultado dever&aacute; ser semelhante a este</p><br>

    <!-- Estou ciente de que a imagem é maior do que o determinado, no entanto o objetivo é que a pessoa se desejar
    possa ver a imagem em outra aba no tamanho e resolução total, para ter uma melhor visualização-->
    <img src="../img/jdk-amazon-correto-05.png" width="800" height="602">


    <p class="comum">Verifique a vers&atilde;o do git</p>

    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        git --version
    </div>

    <p class="comum">O resultado dever&aacute; ser semelhante a este</p><br>

    <img src="../img/jdk-amazon-correto-06.png" width="800" height="452">


    <p class="comum">Se voc&ecirc; j&aacute; &eacute; usu&aacute;rio do github, notabug, ou gitlab, etc.,
        vamos configura-lo usando um exemplo de algu&eacute;m que tem um e-mail do gmail (evidentemente
        voc&ecirc; deve alterar 'SeuEmail' para o nome no seu e-mail). Foi usado o gmail.com somente por
        ser um dos mais comuns, o seu provedor de e-mail pode ser outro sem sombra de d&uacute;vidas. <br>
        ssh-keygen &eacute; usado para gerar uma chave ssh e termos acesso diretamente ao GitHub.
    </p>

    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        git config --global user.email &quot;SeuEmail@gmail.com&quot;<br>
        git config --global user.name &quot;SeuUserGitHub&quot;<br>
        ssh-keygen
    </div>

    <p class="comum">O resultado dever&aacute; ser semelhante a este</p><br>

    <img src="../img/git-01.png" width="800" height="274">


    <p class="comum">Para configurar o acesso ssh, entre no seu github e v&aacute; em Settings</p>
    <br>

    <!-- Estou ciente de que a imagem é maior do que o determinado, no entanto o objetivo é que a pessoa se desejar
    possa ver a imagem em outra aba no tamanho e resolução total, para ter uma melhor visualização-->
    <img src="../img/git-02.png" width="800" height="900">


    <br><br><br>

</section>

<?php
include("rodape.php");
?>
