<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 22/12/2017
    Nota : Organizar as dicas do chrome (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>

    <!--chrome-->

        <h1>Dicas do Chrome</h1>

        <h2>Acessar as Ferramentas de Desenvolvedor</h2>
        <p class="comum">Interessante para ver margens, padding e outros detalhes dos objetos da página</p>
        <p class="miniatura">Procedimento</p>
        <div class="box sombra">
            Pressione simultaneamente:<br/>
            Ctrl + Shift + i<br/>
            Você também pode usar a tecla &lt;F12>
        </div>

        <?php
        include("pre-rodape.php");
        ?>

        <h3>Salvar sites como MHT</h3>
        <p class="comum">Os sites em MHT ficam com todo os componentes em um só arquivo, e podem ser abertos em diversos navegadores (no FireFox você precisa de um plugin).</p>
        <p class="comum">Abra o Chrome e faça o procedimento a seguir...</p>
        <p class="miniatura">Procedimento</p>
        <div class="box sombra">
            Na barra de endereços digite 'chrome://flags/'<br/>
            Pesquise por MHTML <br/>
            Na linha de título 'Save Page as MHTML' mude o botão 'disabled' para 'Enabled' <br/>
            Reinicie o Chrome no botão 'REINICIAR AGORA'<br/>
            Navegue até um site que você quiser salvar. <br/>
            Clique nos tres pontinhos do menu > Mais Ferramentas > Salvar página como<br/>
            Em 'Nome:' modifique o nome do arquivo, deletando as duas ultimas letras, ficando MHT<br/>
            Pronto, agora é so clicar em 'Save'
        </div>

    </section>

<?php
for($i=0; $i<15; $i++) {echo'<br/>';}
include("rodape.php");
?>
