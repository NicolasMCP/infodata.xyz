<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do chrome (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>

    <!--chrome-->

        <h1>Dicas do Chrome</h1>

        <h2>Acessar as Ferramentas de Desenvolvedor</h2>
        <p class="comum">Interessante para ver margens, padding e outros detalhes dos objetos da p&aacute;gina</p>
        <p class="miniatura">Procedimento</p>
        <div class="box sombra">
            Pressione simultaneamente:<br/>
            Ctrl + Shift + i<br/>
            Voc&ecirc; tamb&eacute;m pode usar a tecla &lt;F12&gt;
        </div>

        <?php
        include("pre-rodape.php");
        ?>

        <h3>Salvar sites como MHT</h3>
        <p class="comum">Os sites em MHT ficam com todo os componentes em um s&oacute; arquivo, e podem ser abertos em diversos navegadores (no FireFox voc&ecirc; precisa de um plugin).</p>
        <p class="comum">Abra o Chrome e fa&ccedil;a o procedimento a seguir...</p>
        <p class="miniatura">Procedimento</p>
        <div class="box sombra">
            Na barra de endere&ccedil;os digite 'chrome://flags/'<br/>
            Pesquise por MHTML <br/>
            Na linha de título 'Save Page as MHTML' mude o bot&atilde;o 'disabled' para 'Enabled' <br/>
            Reinicie o Chrome no bot&atilde;o 'REINICIAR AGORA'<br/>
            Navegue at&eacute; um site que voc&ecirc; quiser salvar. <br/>
            Clique nos tres pontinhos do menu &gt; Mais Ferramentas &gt; Salvar p&aacute;gina como<br/>
            Em 'Nome:' modifique o nome do arquivo, deletando as duas ultimas letras, ficando MHT<br/>
            Pronto, agora &eacute; so clicar em 'Save'
        </div>

    </section>

<?php
for($i=0; $i<17; $i++) {echo'<br/>';}
include("rodape.php");
?>
