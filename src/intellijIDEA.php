<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 01/10/2018
    Nota : Organizar as dicas do phpstorm (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--IntelliJ IDEA-->

    <h1 id="jdk11">Dicas de Uso do IntelliJ IDEA</h1>

    <h2>Usando openJDK <span style="font-family: 'Noto Sans', sans-serif;">11</span></h2>
    <p class="comum">Antes de abrir qualquer projeto, selecione as op&ccedil;&otilde;es:</p>
    <p class="comum"></p>
    <p class="comum"></p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        Configure &gt; Project Defaults &gt; Project Structure<br/>
        bot&atilde;o &gt; New...<br/>
        selecione o SDK (Software Developer Kit) que incluiu (no caso o JDK 11)<br/>
        na pasta: /usr/lib/jvm/java-11-openjdk-amd64<br/>
        bot&atilde;o &gt; Apply<br/>
        bot&atilde;o &gt; Ok<br/>
    </div>

     <?php
    include("pre-rodape.php");
    ?>

    <h5>Dicion&aacute;rio em Portugu&ecirc;s</h5>

    <p class="comum">Como instalar o dicion&aacute;rio em Portugu&ecirc;s...</p>
    <p class="comum">Primeiramente fazer o seguinte</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        baixe o dicion&aacute;rio de:<br/>
        <a href="https://github.com/rafaelsc/IntelliJ.Portuguese.Brazil.Dictionary" target="_blank" class="a">https://github.com/rafaelsc/IntelliJ.Portuguese.Brazil.Dictionary</a><br/>
        (descompacte o arquivo em uma pasta)<br/>
    </div>

    <p class="comum">No projeto atual do IntelliJ IDEA...</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        File &gt; Settings &gt; Editor &gt; Spelling &gt; Dictionaries &gt;
        (clique no sinal de) +<br/>
        (inclua o caminho da pasta descompactada do dicion&aacute;rio)<br/>
        (bot&odblac;es) Apply &gt; Ok<br/>
    </div>

    <p class="comum">Para projetos futuros (default)...</p>
    <p class="comum">Procedimento</p>
    <div class="box sombra">
        File &gt; Default Settings &gt; Editor &gt; Spelling &gt; Dictionaries &gt;
        (clique no sinal de) +<br/>
        (inclua o caminho da pasta descompactada do dicion&aacute;rio)<br/>
        (bot&odblac;es) Apply &gt; Ok<br/>
    </div>

</section>

<?php
include("rodape.php");
?>
