<!DOCTYPE html>
<!--
Autor  : Nicolas Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do Android (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>

    <!--android-->

        <h1>Dicas do Android</h1>

        <h2>Bloquear chamdas a partir de um Número</h2>
        <h3>Como fazer no Android Samsung Win</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            Telefone > Registros > Localize o Número a Bloquear ><br/>
            Deixe o dedo pressionado sobre esse número > No menu que aparecer >
            Adicionar a Lista de Rejeição.
        </div>

        <h3>Como fazer no Android Samsung J7</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            Telefone > Lista de Contatos > Mais > Configurações ><br/>
            Bloqueio de Chamadas > Lista de Bloqueio ><br/>Cadastre os Números que Deseja Bloquear.
        </div>
    </section>

<?php
for($i=0; $i<25; $i++) {echo'<br/>';}
include("rodape.php");
?>
