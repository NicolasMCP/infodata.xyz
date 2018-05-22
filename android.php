<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 22/12/2017
    Nota : Organizar as dicas do Android (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>

    <!--android-->

        <h1>Dicas do Android</h1>

        <h2>Bloquear chamadas a partir de um N&uacute;mero</h2>
        <p class="comum">Como fazer no Android <strong>Samsung Win</strong></p>
        <p class="miniatura">Procedimento</p>
        <div class="box sombra">
            Telefone &gt; Registros &gt; Localize o N&uacute;mero a Bloquear &gt;<br/>
            Deixe o dedo pressionado sobre esse n&uacute;mero &gt; No menu que aparecer &gt;
            Adicionar a Lista de Rejei&ccedil;&atilde;o.
        </div>

        <p class="comum">Como fazer no Android <strong>Samsung J7</strong></p>
        <p class="miniatura">Procedimento</p>
        <div class="box sombra">
            Telefone &gt; Lista de Contatos &gt; Mais &gt; Configura&ccedil;&odblac;es &gt;<br/>
            Bloqueio de Chamadas &gt; Lista de Bloqueio &gt;<br/>Cadastre os N&uacute;meros que Deseja Bloquear.
        </div>
    </section>

<?php
for($i=0; $i<25; $i++) {echo'<br/>';}
include("rodape.php");
?>
