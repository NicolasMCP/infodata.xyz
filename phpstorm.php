<!DOCTYPE html>
<!--
Autor  : Nicolas Ramos
Data   : 12/01/2018
Projeto: Dicas
Meta   : Organizar as dicas do phpstorm (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--phpstorm-->

    <h1>Dicas de Uso do PHPStorm</h1>

    <h2>Edição Multilinha</h2>
    <p class="comum">Para quando queremos inserir os mesmos comandos em várias linhas...</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        Ctrl + Alt + Shift + (Click Cursor Mouse) nas linas a editar<br/>
    </div>

    <?php
    include("pre-rodape.php");
    ?>

    <h3>Ativar quebra automatica de linha</h3>
    <p class="comum justify">Quando a linha é muito longa, se desejamos que ela se divida automaticamente em várias linhas (de acordo com o tamanho da tela do editor).</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        File > Settings > Editor > General > Soft Wraps ><br/>
        ative o checkbox: 'Use soft wraps in editor'<br/>
    </div>

    <?php
    include("pre-rodape.php");
    ?>

    <h4>Usando PHP7.2 no PHPStorm</h4>

    <p class="comum">Interpretador de comandos PHP7.2 no linux</p>
    <p class="comum">Configurando phpstorm Passo a passo,</p>
    <p class="comum">No projeto atual do phpstorm...</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        File > Settings > Languages & Frameworks > PHP<br/>
        > PHP Language Level = 7.2<br/>
        > Cli Interpreter = ... > + > /usr/bin/php7.2 > Apply > Ok > Apply > Ok<br/>
    </div>

    <p class="comum">Depois para projetos futuros (default)...</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        File > Default Settings > Languages & Frameworks > PHP<br/>
        > PHP Language Level = 7.2<br/>
        > Cli Interpreter = ... > + > /usr/bin/php7.2 > Apply > Ok > Apply > Ok<br/>
    </div>

    <p class="comum">Referência</p>
    <a href="https://www.youtube.com/watch?v=JWo9ivGv8Yw" class="a" target="_blank">https://www.youtube.com/watch?v=JWo9ivGv8Yw</a>
    <br/>
    <p class="comum">Nota: Se desejar usar o PHP 7.1, apenas substitua 7.2 por 7.1 em todos os pontos da dica.</p>

    <?php
    include("pre-rodape.php");
    ?>

    <h5>Dicionário em Português no PHPStorm</h5>

    <p class="comum">Como instalar o dicionário em Português...</p>
    <p class="comum">Primeiramente fazer o seguinte</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        baixe o dicionário de:<br/>
        <a href="https://github.com/rafaelsc/IntelliJ.Portuguese.Brazil.Dictionary" target="_blank" class="a">https://github.com/rafaelsc/IntelliJ.Portuguese.Brazil.Dictionary</a><br/>
        (descompacte o arquivo em uma pasta)<br/>
    </div>

    <p class="comum">No projeto atual do phpstorm...</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        File > Settings > Editor > Spelling > Dictionaries >
        (clique no sinal de) +<br/>
        (inclua o caminho da pasta descompactada do dicionário)<br/>
        (botões) Apply > Ok<br/>
    </div>

    <p class="comum">Para projetos futuros (default)...</p>
    <p class="comum">Procedimento</p>
    <div class="box sombra">
        File > Default Settings > Editor > Spelling > Dictionaries >
        (clique no sinal de) +<br/>
        (inclua o caminho da pasta descompactada do dicionário)<br/>
        (botões) Apply > Ok<br/>
    </div>

</section>

<?php
include("rodape.php");
?>
