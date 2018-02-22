<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do Node.js (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
	<!--Node.js-->

	<h1>Instalando Node.js no Linux</h1>
    <h2>Testado em Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no
		Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

	<p class="comum">Instalando o <strong>Node.js</strong></p>
	<p class="miniatura">Código</p>
	<div class="box sombra">
		$ su<br/>
		# apt install curl<br/>
		# curl -sL https://deb.nodesource.com/setup_9.x | bash -<br/>
		# apt install nodejs<br/>
		# exit<br/>
	</div>

	<p class="comum">Teste a instalação</p>
	<p class="miniatura">Código</p>
	<div class="box sombra">
		$ node -v<br/>
		v9.5.0<br/><br/>
		$ npm -v<br/>
		5.6.0<br/>
	</div>

	<h3>Instalar TypeScript no Linux</h3>
    <p class="comum">Instalando o <strong>TypeScript</strong></p>
	<p class="miniatura">Código</p>
	<div class="box sombra">
		$ sudo npm install -g typescript<br/>
		// + typescript@2.7.2
	</div>

	<h4>Instalar @angular/cli no Linux</h4>
    <p class="comum">Instalando o Angular Cli</p>
	<p class="miniatura">Código</p>
	<div class="box sombra">
		$ su -<br/>
		npm install -g @angular/cli<br/>
		// + @angular/cli@1.7.0
	</div>

	<p class="comum">Verificação do ambiente</p>
	<p class="miniatura">Código</p>
	<div class="box sombra">
		$ ng -v<br/>
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