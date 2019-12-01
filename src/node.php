<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do Node.js (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
	<!--Node.js-->

	<h1>Instalando Node.js no Linux</h1>
    <h2 class="reduzido">Testado em Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no
		Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>Instalando o Node.js</h3>
    <p class="comum">Siga estes passos...</p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
        <code>
            $ su<br>
            # apt install curl<br>
            # curl -sL https://deb.nodesource.com/setup_9.x | bash -<br>
            # apt install nodejs<br>
            # exit<br>
        </code>
	</div>

	<p class="comum">Teste a instala&ccedil;&atilde;o</p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
        <code>
            $ node -v<br>
        </code>
        <samp>
            v9.5.0<br><br>
        </samp>
        <code>
            $ npm -v<br>
        </code>
		<samp>
            5.6.0<br>
        </samp>
	</div>

	<h3>Instalar TypeScript no Linux</h3>
    <p class="comum">Instalando o <strong>TypeScript</strong></p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
        <code>
            $ sudo npm install -g typescript<br>
        </code>
		<samp>
            + typescript@2.7.2
        </samp>
	</div>

	<h4>Instalar @angular/cli no Linux</h4>
    <p class="comum">Instalando o Angular Cli</p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
        <code>
            $ su -<br>
            npm install -g @angular/cli<br>
        </code>
		<samp>
            + @angular/cli@1.7.0
        </samp>
	</div>

	<p class="comum">Verifica&ccedil;&atilde;o do ambiente</p>
	<p class="miniatura">C&oacute;digo</p>
	<div class="box sombra">
        <code>
            $ ng -v<br>
        </code>
        <pre>
    _                      _                 ____ _     ___
   / \   _ __   __ _ _   _| | __ _ _ __     / ___| |   |_ _|
  / △ \ | '_ \ / _` | | | | |/ _` | '__|   | |   | |    | |
 / ___ \| | | | (_| | |_| | | (_| | |      | |___| |___ | |
/_/   \_\_| |_|\__, |\__,_|_|\__,_|_|       \____|_____|___|
               |___/

Angular CLI: 1.7.0
Node: 9.5.0
OS: linux x64
Angular:
...
		</pre>
	</div>

</section>

<?php
include("rodape.php");
?>