<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do chrome (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>

    <!--chrome-->

        <h1>Dicas do Chrome</h1>

        <h2>Acessar as Ferramentas de Desenvolvedor</h2>
        <h3>Interessante para ver margens, padding e outros detalhes dos objetos da página</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            Pressione simultaneamente:<br/>
            Ctrl + Shift + i<br/>
            Você também pode usar a tecla &lt;F12>
        </div>

        <?php
        include("pre-rodape.php");
        ?>

        <h2>Salvar sites como MHT</h2>
        <h3>Os sites em MHT ficam com todo os componentes em um só arquivo, e podem ser abertos em diversos navegadores (no FireFox você precisa de um plugin).</h3>
        <h3>Abra o Chrome e faça o procedimento a seguir...</h3>
        <h4>Procedimento</h4>
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
for($i=0; $i<13; $i++) {echo'<br/>';}
include("rodape.php");
?>
