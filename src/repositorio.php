<!DOCTYPE html>
<!--
    Autor: Nicolas Ramos
    Nota : Organizar as dicas do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

<section>
<!--linux-->

    <h1>Reposit&oacute;rio Local usando ISOs</h1>
    <h2 class="reduzido">Testado em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.4</span> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h2>

    <h3>Reposit&oacute;rio com as imagens ISO dos DVD ou BD</h3>
    <p class="comum">Primeiro baixe o ISO dos DVD</p>
    <p class="comum">Vou colocar no tutorial somente para um DVD, os outros e s&oacute; fazer igual</p>
    <p class="comum">Nas Refer&ecirc;ncias constar&atilde;o os links dos arquivos necess&aacute;rios...</p>
    <p class="comum">Usarei DVD mas aplica-se tamb&eacute;m aos BD</p>
    <p class="comum">Primeiro criamos uma pasta que ir&aacute; conter os ISO</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo mkdir /home/db<br>
        $ sudo mkdir /home/db/ISO<br>
        $ sudo chown -R $USER:$USER /home/db<br>
        $ sudo chmod -R 777 /home/db/<br>
    </div>

    <p class="comum">Vamos baixar os arquivos para o DVD</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ cd /home/db/ISO<br>
        $ wget https://cdimage.debian.org/debian-cd/9.4.0/amd64/jigdo-dvd/debian-9.4.0-amd64-DVD-1.jigdo<br>
        $ wget https://cdimage.debian.org/debian-cd/9.4.0/amd64/jigdo-dvd/debian-9.4.0-amd64-DVD-1.template<br>
    </div>

    <p class="comum">Baixar e descompactar o jigdo</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ wget http://atterer.org/sites/atterer/files/2009-08/jigdo/jigdo-bin-0.7.3.tar.bz2<br>
        $ tar -xjvf jigdo-bin-0.7.3.tar.bz2<br>
    </div>

    <p class="comum">Colocamos os arquivos do DVD no mesmo diret&oacute;rio</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ mv debian-9.4.0-amd64-DVD-1.jigdo jigdo-bin-0.7.3<br>
        $ mv debian-9.4.0-amd64-DVD-1.template jigdo-bin-0.7.3<br>
        $ cd jigdo-bin-0.7.3<br>
    </div>

    <p class="comum">Iniciamos a constru&ccedil;&atilde;o do ISO com jigdo</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        ./jigdo-lite debian-9.4.0-amd64-DVD-1.jigdo<br>
        (Files to scan:) /home/db/ISO/debian-8.5.0-amd64-BD-1.iso<br>
        <p class="miniatura">Quando apresenta (Files to Scan) se tivermos um DVD anterior informamos, sen&atilde;o damos &lt;Enter&gt;<br><br></p>

        (Debian mirror [ftp://ftp.debian.org/debian/]:) http://ftp.debian.org/debian/<br>
        <p class="miniatura">Quando apresenta (Debian mirror) digitamos 'http://ftp.debian.org/debian/'</p>
    </div>
    <p class="comum">depois ir&aacute; come&ccedil;ar o download dos pacotes...</p>
    <p class="comum">Ao concluir, voc&ecirc; ter&aacute; o ISO: debian-9.4.0-amd64-DVD-1.iso</p>
    <p class="comum">Vamos colocar ele na pasta dos ISOs</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ mv debian-9.4.0-amd64-DVD-1.iso /home/db/ISO/<br>
        $ cd /home/db/ISO/<br>
    </div>

    <h3>Agora vamos configurar o Reposit&oacute;rio</h3>
    <p class="comum">Ok, agora que j&aacute; tenho um flamante ISO do DVD. Vamos configurar para us&aacute;-lo</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo mkdir /mnt/iso-1<br>
    </div>

    <p class="comum">Vamos primeiro montar manualmente para testar...</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo mount -t iso9660 -o loop /home/db/ISO/debian-9.4.0-amd64-DVD-1.iso /mnt/iso-1<br>
    </div>

    <p class="comum">Da&iacute; alteramos o sources.list</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo vim /etc/apt/sources.list<br>
    </div>

    <p class="comum">Incluimos a seguinte linha no arquivo</p>
    <p class="miniatura">C&oacute;digo no Arquivo</p>
    <div class="box sombra">
        # ISO dos DVD<br>
        deb [trusted=yes] file:/mnt/iso-1 stretch contrib main<br>
    </div>

    <p class="comum">Agora vamos testar</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        $ sudo apt update<br>
        <p class="miniatura">Observe as mensagens retornadas</p>
    </div>

    <h4>Tornando permanente</h4>
    <p class="comum" style="text-align: justify">Se esta tudo certo vamos tornar permanente, colocando no fstab para que os ISO sejam montados automaticamente</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo vim /etc/fstab<br>
    </div>

    <p class="comum">Incluir no final do arquivo</p>
    <p class="miniatura">C&oacute;digo no Arquivo</p>
    <div class="box sombra">
        # iso-1 #<br>
        /home/db/ISO/debian-9.4.0-amd64-DVD-1.iso /mnt/iso-1 iso9660 loop,user,auto 0 0<br>
    </div>

    <p class="comum">Reinicie</p>
    <p class="miniatura">C&oacute;digo</p>
    <div class="box sombra">
        $ sudo reboot<br>
    </div>

    <p class="comum">Confira novamente</p>
    <p class="miniatura">Procedimento</p>
    <div class="box sombra">
        $ sudo apt update<br>
        <p class="miniatura">Observe as mensagens retornadas</p>
    </div>

    <h5>S&oacute; para Refer&ecirc;ncia</h5>
    <p class="comum">Ultimas linhas do meu arquivo /etc/fstab</p>
    <p class="miniatura">C&oacute;digo no Arquivo</p>
    <div class="box sombra">
        # iso-1 #<br>
        /home/db/ISO/debian-9.4.0-amd64-BD-1.iso /mnt/iso-1 iso9660 loop,user,auto 0 0<br>
        # iso-2 #<br>
        /home/db/ISO/debian-9.4.0-amd64-BD-2.iso /mnt/iso-2 iso9660 loop,user,auto 0 0<br>
        # iso-3 #<br>
        /home/db/ISO/debian-9.4.0-amd64-BD-3.iso /mnt/iso-3 iso9660 loop,user,auto 0 0<br>
    </div>

    <p class="comum">Primeiras linhas do meu arquivo /etc/apt/sources.list</p>
    <p class="miniatura">C&oacute;digo no Arquivo</p>
    <div class="box sombra">
        # ISO de los BD de debian<br>
        &nbsp;&nbsp;deb [trusted=yes] file:/mnt/iso-1 stretch contrib main<br>
        &nbsp;&nbsp;deb [trusted=yes] file:/mnt/iso-2 stretch contrib main<br>
        &nbsp;&nbsp;deb [trusted=yes] file:/mnt/iso-3 stretch contrib main<br>
    </div>


    <br>
    <p class="comum">Mais Refer&ecirc;ncias</p>

    <p class="comum">Ultimas linhas do meu arquivo /etc/fstab COM 'buster' AGORA MUDOU PARA</p>
    <a href="../files/fstab.buster" download="files/fstab.buster" class="a">Arquivo /etc/fstab linhas finais</a>

    <p class="comum">TODO o meu arquivo /etc/apt/sources.list AGORA COM 'buster'</p>
    <a href="../files/sources.list.buster" download="files/sources.list.buster" class="a">Arquivo /etc/apt/sources.list</a>

    <p class="comum">Fontes de arquivos do Debian</p>
    <a href="https://www.debian.org/CD/http-ftp/index.pt.html" target="_blank" class="a">https://www.debian.org/CD/http-ftp/index.pt.html</a>
    <p class="comum">DVDs para 'stretch' (arquivos jigdos e templates)</p>
    <a href="https://cdimage.debian.org/debian-cd/9.4.0/amd64/jigdo-dvd/" target="_blank" class="a">https://cdimage.debian.org/debian-cd/9.4.0/amd64/jigdo-dvd/</a><br>

    <p class="comum">DVDs para 'buster' (arquivos jigdos e templates)</p>
    <a href="https://cdimage.debian.org/cdimage/weekly-builds/amd64/jigdo-dvd/" target="_blank" class="a">https://cdimage.debian.org/cdimage/weekly-builds/amd64/jigdo-dvd/</a><br>
    <div class="quadro">
        $ sudo apt update<br>
        E: O ficheiro Release para file:/mnt/iso-1/dists/buster/Release est&aacute; expirado (inv&aacute;lido desde 3d 0h 36min 18s). N&atilde;o ser&atilde;o aplicadas as atualiza&ccedil;&otilde;es para este reposit&oacute;rio.<br>
        <p class="miniatura">Mesmo que o Reposit&oacute;rio de Testing, esteja vencido, se desejar fazer uso dele. Solu&ccedil;&atilde;o:<br><br></p>
        $ sudo apt -o Acquire::Check-Valid-Until=false update<br>
    </div>

    <p class="comum">BDs somente 'stretch' (arquivos jigdos e templates)</p>
    <a href="https://cdimage.debian.org/debian-cd/9.4.0/amd64/jigdo-bd/" target="_blank" class="a">https://cdimage.debian.org/debian-cd/9.4.0/amd64/jigdo-bd/</a><br>
    <p class="comum">Jigdo</p>
    <a href="http://atterer.org/jigdo/" target="_blank" class="a">http://atterer.org/jigdo/</a><br>
    <p class="comum">exdebian.org</p>
    <a href="https://exdebian.org/foro/problema-al-usar-los-dvd-de-debian-stretch-como-repositorio-local-solucionado" target="_blank" class="a">https://exdebian.org/foro/problema-al-usar-los-dvd-de-debian-stretch-como-repositorio-local-solucionado</a><br>
    <p class="comum">DVD = 'Digital Video Disc' </p>
    <p class="comum">BD = 'Blu-ray Disc'</p>

</section>

<?php
include("rodape.php");
?>
