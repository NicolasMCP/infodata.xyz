<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do Google (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--google-->

    <h1>Dicas do Google</h1>

    <h2>Google Fonts</h2>
    <h3>Visualize os fontes de letra a incluir na sua aplicação</h3>
    <h4>Procedimento</h4>
    <div class="box sombra">
        <a href="https://fonts.google.com/" target="_blank" class="a">https://fonts.google.com/</a><br/>
    </div>

    <h3>dentro da página escolha um fonte, copie o nome e consulte a API do Google</h3>
    <h4>Procedimento</h4>
    <div class="box sombra">
        http://fonts.googleapis.com/css?family=[cole o nome aqui]<br/>
    </div>

    <h3>para a fonte 'Arvo' vai ficar assim:</h3>
    <h4>Link</h4>

    <div class="box sombra">
        <a href="http://fonts.googleapis.com/css?family=Arvo" target="_blank" class="a">http://fonts.googleapis.com/css?family=Arvo</a><br/>
    </div>

    <h3>copie (ctrl + c) a o idioma que quiser e cole no CSS, exemplo:</h3>
    <h4>Código</h4>
    <div class="box sombra">
        /* latin */<br/>
        @font-face {<br/>
        font-family: 'Arvo';<br/>
        font-style: normal;<br/>
        font-weight: 400;<br/>
        src: local('Arvo'), url(http://fonts.gstatic.com/s/arvo/v10/J0GYVYTizO1mjpT3aOcSbQ.woff2) format('woff2');<br/>
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2212, U+2215;<br/>
        }<br/>
    </div>

    <h3>veja a informação sobre o uso da fonte 'Arvo'</h3>
    <h4>Link</h4>
    <div class="box sombra">
        <a href="https://fonts.google.com/?selection.family=Arvo&category=Serif" target="_blank" class="a">https://fonts.google.com/?selection.family=Arvo&category=Serif</a><br/>
    </div>

    <h3>veja a definição do font-family e use do mesmo modo no seu CSS</h3>
    <h4>Código</h4>
    <div class="box sombra">
        font-family: 'Arvo', serif;<br/>
    </div>


    <?php
    include("rodape.php");
    ?>

</section>
</body>
</html>
