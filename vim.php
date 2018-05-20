<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Data : 31/12/2017
    Nota : Organizar as dicas do Sudo e SSH do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--vim-->

    <h1>Dicas do Vim</h1>
    <h2 class="reduzido">Testado em Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span> Stretch e no
        Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>Instalando o Vim</h3>
    <p class="comum">Instalando o Vim para <strong>consola</strong></p>
    <p class="comum">A instalação é feita dos repositórios</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
            $ sudo apt install vim<br/>
        </code>
    </div>

    <p class="comum">Instalando o Vim <strong>Grafico</strong></p>
    <p class="comum">Quase igual ao anterior</p>
    <p class="miniatura">Código</p>
    <div class="box sombra">
        <code>
            $ sudo apt install vim-gtk<br/>
        </code>
        <p class="miniatura">ou<br/></p>
        <code>
            $ sudo apt install vim-gnome<br/>
        </code>
    </div>

    <h4>Comandos mais comuns</h4>
    <p class="comum">Os comandos são basicamente 1 ou 2 caracteres</p>
    <p class="comum">Fique atento a ultima linha do editor, onde aparecerão as mensagens informativas</p>
    <div class="quadro">
        <strong>0</strong> - Inicio da linha.<br/>
        <strong>$</strong> - Fim da linha.<br/><br/>
        <div class="lineIn"></div>
        <strong>w</strong> - Proxima palavra (Word).<br/>
        <strong>b</strong> - Palavra anterior (Back).<br/><br/>
        <div class="lineIn"></div>
        <strong>1G</strong> - Vai (Go) para o inicio do arquivo.<br/>
        <strong>nG</strong> - Vai (Go) para a linha 'n' do arquivo.<br/>
        <strong>G</strong> ou <strong>$G</strong> - Vai (Go) para o fim do arquivo.<br/><br/>
        <div class="lineIn"></div>
        <strong>:w</strong> - Salva (Write) o arquivo.<br/>
        <strong>:w</strong> nome-de-arquivo - Salvar Como...'nome-de-arquivo'.<br/>
        <strong>:q</strong> - Sai (Quit) do arquivo, sem salvar.<br/>
        <strong>:x</strong> - Salva e Sai (:wq tem o mesmo efeito, salva e sai).<br/><br/>
        <div class="lineIn"></div>
        <strong>x</strong> - Deleta o carater atual.<br/>
        <strong>dd</strong> - Deleta a linha atual.<br/>
        <strong>yy</strong> - Copia a linha atual.<br/>
        <strong>D</strong> - Deleta do carater atual até o final da linha atual.<br/>
        <strong>r</strong> - Replace 1 car. Troca o caracter atual pelo proximo digitado.<br/><br/>
        <div class="lineIn"></div>
        <strong>R</strong> - Passa a modo Replace, substituindo os caracteres atuais pelos digitados.<br/>
        <strong>i</strong> - Passa a modo Insert - a partir do proximo caracter (ao atual).<br/>
        <strong>I</strong> - Passa a modo Insert - no Inicio da linha.<br/>
        <strong>A</strong> - Passa a modo Insert - após (After) ao final da Linha atual.<br/><br/>
        <div class="lineIn"></div>
        <strong>v</strong> - 'Visual', marca texto visualmente, use as teclas do cursor para deslocar.<br/>
        <strong>y</strong> - Copia o que foi marcado por 'Visual'.<br/>
        <strong>p</strong> - Cola (Paste) APOS o caracter atual, o que foi copiado com 'y' ou 'yy'; ou o que foi recortado com 'd', 'dd', 'D' ou 'x'.<br/><br/>
        <div class="lineIn"></div>
        <strong>.</strong> - Repete o último comando.<br/>
        <strong>u</strong> - Desfaz o último comando.<br/>
        <strong>ESC</strong> - A tecla <strong>ESC</strong> sai do modo de comando (Insert, Replace, Visual, etc.).<br/>
    </div>

    <p class="comum justify">Esta é uma lista bem modesta, a quantia de comandos de vi, vim, gvim é ENORME, mas para mim fica prático ter só os mais interessantes e mais alguns ... senão fica difícil de achar o que se quer...</p>
    <div class="quadro">
        <strong>/texto-a-buscar</strong> - Busca 'texto-a-buscar' para frente.<br/>
        <strong>n</strong> - Repete a última busca.<br/>
        <strong>N</strong> - Repete a última busca, mas em sentido contrário.<br/><br/>
        <div class="lineIn"></div>
        <strong>:s/old/new/g</strong> - Substitui 'old' por 'new' (todas as ocorrências), na linha.<br/>
        <strong>:%s/old/new/g</strong> - Substitui 'old' por 'new' (todas as ocorrências), no Arquivo Todo.<br/>
        <strong>:m,n s/txt/txt2/g</strong> - Substitui 'old' por 'new' desde a linha 'm' até a linha 'n' do Arquivo.<br/>
    </div>

</section>

<?php
include("pre-rodape.php");
?>
