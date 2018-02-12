<!DOCTYPE html>
<!--
Autor  : Nicolas Ramos
Data   : 22/12/2017
Projeto: Dicas
Meta   : Organizar as dicas do Linux (agora neste html, antes em OOo)
-->

<?php
include("cabecalho.php");
?>

    <section>
    <!--linux-->

        <h1>Repositório Local em Linux Debian <span style="font-family: 'Noto Sans', sans-serif;">9.3</span></h1>
        <h1> Stretch e no Debian <span style="font-family: 'Noto Sans', sans-serif;">10</span> Buster</h1>

        <h2>Usar os DVD ou BD como Repositório Local</h2>
        <h3>Primeiro baixe o ISO dos DVD</h3>
        <h3>Vou colocar no tutorial somente para um DVD, os outros e só fazer igual</h3>
        <h3>Nas Referências constarão os links dos arquivos necessários...</h3>
        <h3>Usarei DVD mas aplica-se também aos BD</h3>
        <h3>Primeiro criamos uma pasta que irá conter os ISO</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo mkdir /home/db<br/>
            $ sudo mkdir /home/db/ISO<br/>
            $ sudo chown -R $USER:$USER /home/db<br/>
            $ sudo chmod -R 777 /home/db/<br/>
        </div>

        <h3>Vamos baixar os arquivos para o DVD</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ cd /home/db/ISO<br/>
            $ wget https://cdimage.debian.org/debian-cd/9.3.0/amd64/jigdo-dvd/debian-9.3.0-amd64-DVD-1.jigdo<br/>
            $ wget https://cdimage.debian.org/debian-cd/9.3.0/amd64/jigdo-dvd/debian-9.3.0-amd64-DVD-1.template<br/>
        </div>

        <h3>Baixar e descompactar o jigdo</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ wget http://atterer.org/sites/atterer/files/2009-08/jigdo/jigdo-bin-0.7.3.tar.bz2<br/>
            $ tar -xjvf jigdo-bin-0.7.3.tar.bz2<br/>
        </div>

        <h3>Colocamos os arquivos do DVD no mesmo diretório</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ mv debian-9.3.0-amd64-DVD-1.jigdo jigdo-bin-0.7.3<br/>
            $ mv debian-9.3.0-amd64-DVD-1.template jigdo-bin-0.7.3<br/>
            $ cd jigdo-bin-0.7.3<br/>
        </div>

        <h3>Iniciamos a construção do ISO com jigdo</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            ./jigdo-lite debian-9.3.0-amd64-DVD-1.jigdo<br/>
            (Files to scan:) /home/db/ISO/debian-8.5.0-amd64-BD-1.iso<br/>
            <h4>Quando apresenta (Files to Scan) se tivermos um DVD anterior informamos, senão damos &lt;Enter><br/><br/></h4>

            (Debian mirror [ftp://ftp.debian.org/debian/]:) http://ftp.debian.org/debian/<br/>
            <h4>Quando apresenta (Debian mirror) digitamos 'http://ftp.debian.org/debian/'</h4>
        </div>
        <h3>depois irá começar o download dos pacotes...</h3>
        <h3>Ao concluir, você terá o ISO: debian-9.3.0-amd64-DVD-1.iso</h3>
        <h3>Vamos colocar ele na pasta dos ISOs</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ mv debian-9.3.0-amd64-DVD-1.iso /home/db/ISO/<br/>
            $ cd /home/db/ISO/<br/>
        </div>

        <h2>Agora vamos configurar o Repositório</h2>
        <h3>Ok, agora que já tenho um flamante ISO do DVD. Vamos configurar para usá-lo</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo mkdir /mnt/iso-1<br/>
        </div>

        <h3>Vamos primeiro montar manualmente para testar...</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo mount -t iso9660 -o loop /home/db/ISO/debian-9.3.0-amd64-DVD-1.iso /mnt/iso-1<br/>
        </div>

        <h3>Daí alteramos o sources.list</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo vim /etc/apt/sources.list<br/>
        </div>

        <h3>Incluimos a seguinte linha no arquivo</h3>
        <h4>Código no Arquivo</h4>
        <div class="box sombra">
            # ISO dos DVD<br/>
            deb [trusted=yes] file:/mnt/iso-1 stretch contrib main<br/>
        </div>

        <h3>Agora vamos testar</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            $ sudo apt update<br/>
            <h4>Observe as mensagens retornadas</h4>
        </div>

        <h2>Tornando permanente</h2>
        <h3 style="text-align: justify">Se esta tudo certo vamos tornar permanente, colocando no fstab para que os ISO sejam montados automaticamente</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo vim /etc/fstab<br/>
        </div>

        <h3>Incluir no final do arquivo</h3>
        <h4>Código no Arquivo</h4>
        <div class="box sombra">
            # iso-1 #<br/>
            /home/db/ISO/debian-9.3.0-amd64-DVD-1.iso /mnt/iso-1 iso9660 loop,user,auto 0 0<br/>
        </div>

        <h3>Reinicie</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo reboot<br/>
        </div>

        <h3>Confira novamente</h3>
        <h4>Procedimento</h4>
        <div class="box sombra">
            $ sudo apt update<br/>
            <h4>Observe as mensagens retornadas</h4>
        </div>

        <h2>Só para Referência</h2>
        <h3>Ultimas linhas do meu arquivo /etc/fstab</h3>
        <h4>Código no Arquivo</h4>
        <div class="box sombra">
            # iso-1 #<br/>
            /home/db/ISO/debian-9.3.0-amd64-BD-1.iso /mnt/iso-1 iso9660 loop,user,auto 0 0<br/>
            # iso-2 #<br/>
            /home/db/ISO/debian-9.3.0-amd64-BD-2.iso /mnt/iso-2 iso9660 loop,user,auto 0 0<br/>
            # iso-3 #<br/>
            /home/db/ISO/debian-9.3.0-amd64-BD-3.iso /mnt/iso-3 iso9660 loop,user,auto 0 0<br/>
        </div>

        <h3>Primeiras linhas do meu arquivo /etc/apt/sources.list</h3>
        <h4>Código no Arquivo</h4>
        <div class="box sombra">
            # ISO de los BD de debian<br/>
            &nbsp;&nbsp;deb [trusted=yes] file:/mnt/iso-1 stretch contrib main<br/>
            &nbsp;&nbsp;deb [trusted=yes] file:/mnt/iso-2 stretch contrib main<br/>
            &nbsp;&nbsp;deb [trusted=yes] file:/mnt/iso-3 stretch contrib main<br/>
        </div>


        <br/>
        <h3>Mais Referências</h3>

        <h3>Ultimas linhas do meu arquivo /etc/fstab COM 'buster' AGORA MUDOU PARA</h3>
        <a href="files/fstab.buster" class="a">Arquivo /etc/fstab linhas finais</a>

        <h3>TODO o meu arquivo /etc/apt/sources.list AGORA COM 'buster'</h3>
        <a href="files/sources.list.buster" class="a">Arquivo /etc/apt/sources.list</a>

        <h3>Fontes de arquivos do Debian</h3>
        <a href="https://www.debian.org/CD/http-ftp/index.pt.html" target="_blank" class="a">https://www.debian.org/CD/http-ftp/index.pt.html</a>
        <h3>DVDs para 'stretch' (arquivos jigdos e templates)</h3>
        <a href="https://cdimage.debian.org/debian-cd/9.3.0/amd64/jigdo-dvd/" target="_blank" class="a">https://cdimage.debian.org/debian-cd/9.3.0/amd64/jigdo-dvd/</a><br/>

        <h3>DVDs para 'buster' (arquivos jigdos e templates)</h3>
        <a href="https://cdimage.debian.org/cdimage/weekly-builds/amd64/jigdo-dvd/" target="_blank" class="a">https://cdimage.debian.org/cdimage/weekly-builds/amd64/jigdo-dvd/</a><br/>
        <div class="quadro">
            $ sudo apt update<br/>
            E: O ficheiro Release para file:/mnt/iso-1/dists/buster/Release está expirado (inválido desde 3d 0h 36min 18s). Não serão aplicadas as actualizações para este repositório.<br/>
            <h4>Mesmo que o Repositório de Testing, esteja vencido, se desejar fazer uso dele. Solução:<br/><br/></h4>
            $ sudo apt -o Acquire::Check-Valid-Until=false update<br/>
        </div>

        <h3>BDs somente 'stretch' (arquivos jigdos e templates)</h3>
        <a href="https://cdimage.debian.org/debian-cd/9.3.0/amd64/jigdo-bd/" target="_blank" class="a">https://cdimage.debian.org/debian-cd/9.3.0/amd64/jigdo-bd/</a><br/>
        <h3>Jigdo</h3>
        <a href="http://atterer.org/jigdo/" target="_blank" class="a">http://atterer.org/jigdo/</a><br/>
        <h3>exdebian.org</h3>
        <a href="https://exdebian.org/foro/problema-al-usar-los-dvd-de-debian-stretch-como-repositorio-local-solucionado" target="_blank" class="a">https://exdebian.org/foro/problema-al-usar-los-dvd-de-debian-stretch-como-repositorio-local-solucionado</a><br/>
        <h3>DVD = 'Digital Video Disc' </h3>
        <h3>BD = 'Blu-ray Disc'</h3>

        <?php
        include("pre-rodape.php");
        ?>

        <h2>Buscas</h2>
        <h3>Localizar onde esta instalado um programa</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ which nome_programa<br/>
        </div>

        <h3>Buscar um arquivo na pasta</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ locate nome_arquivo<br/>
        </div>

        <?php
        include("pre-rodape.php");
        ?>

        <h2>Idioma</h2>
        <h3>Instalar mais manuais do 'man' em espanhol</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo apt install manpages-es manpages-es-extra<br/>
        </div>

        <h3>Trocar o mapa do teclado no caso para brasileiro (espanhol seria 'es')</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo setxkbmap br<br/>
        </div>

        <h3>Listar os usuários do sistema</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo cat /etc/passwd | cut -d: -f1 | less<br/>
        </div>

        <?php
        include("pre-rodape.php");
        ?>

        <h2>Samba</h2>
        <h3>Mudar as configurações do SAMBA</h3>
        <h4>Código</h4>
        <div class="box sombra">
            http://localhost:901<br/>
        </div>

        <?php
        include("pre-rodape.php");
        ?>

        <h2>Usuários e Grupos</h2>
        <h3>Novo usuário TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo adduser nome_usuario<br/>
        </div>

        <h3>Mudar a senha do usuário TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo passwd nome_usuario<br/>
        </div>

        <h3>Deletar o usuário TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo userdel nome_usuario<br/>
        </div>

        <h3>Renomear usuário TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo usermod -l nome_novo_usuario nome_usuario<br/>
        </div>

        <h3>Novo grupo de usuários, vazio TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo adduser --group nome_grupo<br/>
        </div>

        <h3>Deletar grupo de usuários TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo groupdel nome_grupo<br/>
        </div>

        <h3>Incluir um usuário, no grupo de usuários TTY</h3>
        <h4>Código</h4>
        <div class="box sombra">
            $ sudo adduser nome_usuario nome_grupo<br/>
        </div>
    </section>

<?php
include("rodape.php");
?>
