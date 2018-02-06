<!DOCTYPE html>
<!--
Autor  : Herley Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do IcoMoon (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>

<!--icomoon-->

    <h1>Usando Icones do IcoMoon</h1>

    <h2>Icones vetoriais free nos seus softwares...</h2>
    <h3>
        Para baixar os icones (veja que as licenças são diferentes em cada libraria) proceda assim,
        primeiro acesse o site
    </h3>
    <h4>Procedimento</h4>
    <div class="box sombra">
        <a href="https://icomoon.io/app/#/select" class="a" target="_blank">https://icomoon.io/app/#/select</a><br/>
        Selecione as librarias e icones que vai usar<br/>
    </div>

    <h3>depois</h3>
    <h4>Procedimento</h4>
    <div class="box sombra">
        clicar em <strong>Generate fonts F</strong><br/>
        no mesmo botão vai aparecer <strong>Download</strong>, clique nele<br/>
        escolha a pasta dentro do seu progeto web<br/>
        extraia a pasta fonts e o arquivo 'style.css'<br/>
        renomeie 'styles.css' para 'fonts.css'<br/>
        já pode deletar o arquivo 'icomoon.zip'<br/>
    </div>

    <h3>para usar os icones no seu progeto você debe colocar assim:</h3>
    <h4>Procedimento</h4>
    <div class="box sombra">
        <span style="color: #039BE5">&lt;</span><span style="color: orangered">span </span>
        <span style="color: #F1AA00">class=</span><span style="color: #118800">"icon-<strong>NOME</strong>"</span>
        <span style="color: #039BE5">&gt;&lt;/</span><span style="color: orangered">span</span><span style="color: #039BE5">&gt;</span>;<br/><br/>
        substituindo <strong><span style="color: #118800">NOME</span></strong> pelo nome do ícone no link:<br/>
        <a href="https://icomoon.io/app/#/select/font" class="a" target="_blank">https://icomoon.io/app/#/select/font</a><br/>
    </div>
    <br/>
    <h3>Referência</h3>
    <a href="https://codigoadicto.com/usando-fonts-en-los-iconos-con-icomoon" target="_blank" class="a">https://codigoadicto.com/usando-fonts-en-los-iconos-con-icomoon</a>

    <?php
    for($i=0; $i<2; $i++) {echo'<br/>';}
    include("rodape.php");
    ?>

</section>
</body>
</html>
