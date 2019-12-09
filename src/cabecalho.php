<?php
/**
 * Autor: Nicolas Ramos
 *
 */
echo '<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=0.5">
    <meta http-equiv="X-UA-Compatible" content="ie=mozilla">
    <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="../css/totop.css">
    <link rel="stylesheet" href="../css/menu.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <!--    <link rel="shortcut icon" href="favicon.ico" />-->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/totop.js"></script>
    <link rel="icon" type="imagem/png" href="../img/favicon.png"/>
    <title>Dicas InfoData</title>
    
</head>
<body class="geral">

<div id="top" class="header">
    <div class="fix">
        <img src="../img/header.png">
        <div class="titulo-header">Dicas InfoData</div>
    </div>
</div>
<div class="fix">
    <header>
        <input type="checkbox" id="chk_menu">
        <label for="chk_menu" id="lbl_menu"><span class="icon-menu"></span></label>
        <nav class="menu">
            <ul>
                <li><a href="index.php"><span class="icon-home3"></span>Home</a></li>

                <li>
                    <input type="checkbox" id="chk_browser">
        
                    <label for="chk_browser" id="lbl_browser"><span class="icon-earth"></span>Navegadores<i class="icon-select-arrows"></i></label>
                    <ul>
                        <li><a href="firefox.php"><span class="icon-firefox"></span>FireFox</a></li>
                        <li><a href="chrome.php"><span class="icon-chrome"></span>Chrome</a></li>
                        <li><a href="opera.php"><span class="icon-opera"></span>Opera</a></li>
                        <li><a href="ie.php"><span class="icon-IE"></span>Internet Explorer</a></li>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" id="chk_linux">
        
                    <label for="chk_linux" id="lbl_linux"><span class="icon-linux"></span>Linux<i class="icon-select-arrows"></i></label>
                    <ul>
                        <li><a href="repositorio.php"><span class="icon-vynil"></span>Repositorio ISO</a></li>
                        <li><a href="buscas.php"><span class="icon-search"></span>Buscas</a></li>
                        <li><a href="idioma.php"><span class="icon-language"></span>Idioma</a></li>
                        <li><a href="samba.php"><span class="icon-folders"></span>Samba</a></li>
                        <li><a href="usuarios.php"><span class="icon-user-tie"></span>Usu&aacute;rios</a></li>
                        <li><a href="conky.php"><img src="../img/conky17.png">Conky</a></li>
                    </ul>
               </li>
                <li>
                    <input type="checkbox" id="chk_java">
        
                    <label for="chk_java" id="lbl_java"><img src="../img/java.svg" height="20px" width="30px">Java<i class="icon-select-arrows"></i></label>
                    <ul>
                        <li><a href="jdk.php"><span class="icon-mug"></span>Java JDK</a></li>
                        <li><a href="java-painel.php"><img src="../img/java.svg" height="20px" width="30px">Painel Java</a></li>
                    </ul>
                <li>
                    <input type="checkbox" id="chk_lamp">
        
                    <label for="chk_lamp" id="lbl_lamp"><span class="icon-list"></span>LAMP e Cia.<i class="icon-select-arrows"></i></label>
                    <ul>
                        <li><a href="apache.php"><span class="icon-feather"></span>Apache</a></li>
                        <li><a href="mysql.php"><img src="../img/mysql.png">MySQL</a></li>
                        <li><a href="mariaDB.php"><img src="../img/mariadb.png" height="20px" width="28px">MariaDB</a></li>
                        <li><a href="firebird.php"><img src="../img/firebird-logo-32pb.png" height="20px" width="28px">Firebird</a></li>
                        <li><a href="firebird.php#FlameRobin"><img src="../img/flamerobin-logo24pb.png" height="20px" width="28px">FlameRobin</a></li>
                        <li><a href="php.php"><img src="../img/php.svg" height="22px" width="34px">PHP Debian</a></li>
                        <li><a href="php.php#linux-mint"><img src="../img/php.svg" height="22px" width="34px">PHP Mint</a></li>
                        <li><a href="node.php"><img src="../img/nodejs.png" height="20px" width="28px">Node.js</a></li>
                    </ul>
                <li>
                    <input type="checkbox" id="chk_sudo">
        
                    <label for="chk_sudo" id="lbl_sudo"><span class="icon-terminal"></span>Sudo,SSH,nmap<i class="icon-select-arrows"></i></label>
                    <ul>
                        <li><a href="sudo.php"><span class="icon-hash"></span>SUDO</a></li>
                        <li><a href="ssh-restrito.php"><span class="icon-terminal"></span>Restringir SSH</a></li>
                        <li><a href="ssh-porta.php"><span class="icon-terminal"></span>SSH Porta</a></li>
                        <li><a href="ssh-erro.php"><span class="icon-terminal"></span>SSH Erro</a></li>
                        <li><a href="nmap.php"><span class="icon-terminal"></span>nmap</a></li>
                    </ul>
                <li>
                    <input type="checkbox" id="chk_ide">
        
                    <label for="chk_ide" id="lbl_ide"><span class="icon-lightbulb"></span>IDE, SO e App<i class="icon-select-arrows"></i></label>
                    <ul>
                        <li><a href="phpstorm.php"><img src="../img/phpstorm.png" height="20px" width="28px">PHPStorm</a></li>
                        <li><a href="intellijIDEA.php"><img src="../img/intellij.png" height="20px" width="28px">IntelliJ IDEA</a></li>
                        <li><a href="eclipse.php"><img src="../img/eclipse.png" height="20px" width="28px">Eclipse</a></li>
                        <li><a href="netbeans.php"><span class="icon-codepen"></span>NetBeans</a></li>
                        <li><a href="android.php"><span class="icon-android"></span>Android</a></li>
                        <li><a href="vim.php"><img src="../img/vim.png" height="20px" width="28px">Vim</a></li>
                    </ul>
                
                <li>
                    <input type="checkbox" id="chk_github">
        
                <label for="chk_github" id="lbl_github"><span class="icon-github"></span>GitHub<i class="icon-select-arrows"></i></label>
                <ul>
                        <li><a href="https://github.com/NicolasMCP/infodata.xyz" target="_blank"><span class="icon-git"></span>infodata.xyz</a></li>
                        <li><a href="https://github.com/NicolasMCP/Python" target="_blank"><span class="icon-git"></span>Python</a></li>
                        <li><a href="https://github.com/NicolasMCP/Java" target="_blank"><span class="icon-git"></span>Java</a></li>
                        <li><a href="https://github.com/NicolasMCP/ExportCatalog" target="_blank"><span class="icon-git"></span>ExportCatalog</a></li>
                        <li><a href="https://github.com/NicolasMCP/Csharp" target="_blank"><span class="icon-git"></span>C#</a></li>
                        <li><a href="https://github.com/NicolasMCP/SisReenvioGeral" target="_blank"><span class="icon-git"></span>VB e-mail</a></li>
                        <li><a href="https://github.com/NicolasMCP/totop" target="_blank"><span class="icon-git"></span>jQuery ToTop</a></li>
                </ul>
                </li>
                <li><a href="google.php"><span class="icon-google3"></span>Google</a></li>
                <li><a href="icomoon.php"><span class="icon-IcoMoon"></span>IcoMoon</a></li>
                <li><a href="https://drive.google.com/drive/folders/0B8C7-DYa7vcUUVRzanFhZENMTFU" target="_blank"><span class="icon-google-drive"></span>Certificados</a></li>
                <li><a href="licencas.php"><span class="icon-copyright"></span>Licen&ccedil;as</a></li>                        
            </ul>
        </nav>
    </header>
    <a id="totop"><img src="../img/totop.png" alt="imagem para o topo" /></a>
    '
?>
