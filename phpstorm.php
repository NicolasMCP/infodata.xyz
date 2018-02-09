<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do phpstorm (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>
    <!--phpstorm-->

        <h1>Dicas de Uso do PHPstrom</h1>

        <h2>Edição Multilinha</h2>
        <h3>Para quando queremos inserir os mesmos comandos em várias linhas...</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            Ctrl + Alt + Shift + (Click Cursor Mouse) nas linas a editar<br/>
        </div>

        <?php
        include("pre-rodape.php");
        ?>

        <h2>Ativar quebra automatica de linha</h2>
        <h3 class="justify">Quando a linha é muito longa, se desejamos que ela se divida automaticamente em várias linhas (de acordo com o tamanho da tela do editor).</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            File > Settings > Editor > General > Soft Wraps ><br/>
            ative o checkbox: 'Use soft wraps in editor'<br/>
        </div>

        <?php
        include("pre-rodape.php");
        ?>

        <h1>Usando PHP7.2</h1>

        <h2>Interpretador de comandos PHP7.2 no linux</h2>
        <h3>Configurando phpstorm Passo a passo,</h3>
        <h3>No projeto atual do phpstorm...</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            File > Settings > Languages & Frameworks > PHP<br/>
            > PHP Language Level = 7.2<br/>
            > Cli Interpreter = ... > + > /usr/bin/php7.2 > Apply > Ok > Apply > Ok<br/>
        </div>

        <h3>Depois para projetos futuros (default)...</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            File > Default Settings > Languages & Frameworks > PHP<br/>
            > PHP Language Level = 7.2<br/>
            > Cli Interpreter = ... > + > /usr/bin/php7.2 > Apply > Ok > Apply > Ok<br/>
        </div>

        <h3>Referência</h3>
        <a href="https://www.youtube.com/watch?v=JWo9ivGv8Yw" class="a" target="_blank">https://www.youtube.com/watch?v=JWo9ivGv8Yw</a>
        <br/>
        <h3>Nota: Se desejar usar o PHP 7.1, apenas substitua 7.2 por 7.1 em todos os pontos da dica.</h3>

        <?php
        include("pre-rodape.php");
        ?>

        <h1>Dicionário em Português</h1>

        <h2>Como instalar o dicionário em Português...</h2>
        <h3>Primeiramente fazer o seguinte</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            baixe o dicionário de:<br/>
            <a href="https://github.com/rafaelsc/IntelliJ.Portuguese.Brazil.Dictionary" target="_blank" class="a">https://github.com/rafaelsc/IntelliJ.Portuguese.Brazil.Dictionary</a><br/>
            (descompacte o arquivo em uma pasta)<br/>
        </div>

        <h3>No projeto atual do phpstorm...</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            File > Settings > Editor > Spelling > Dictionaries >
            (clique no sinal de) +<br/>
            (inclua o caminho da pasta descompactada do dicionário)<br/>
            (botões) Apply > Ok<br/>
        </div>

        <h3>Para projetos futuros (default)...</h3>
        <h4>Procedimento</h4>
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
