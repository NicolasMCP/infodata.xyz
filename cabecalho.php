<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Ramos
 * Date: 3/01/18
 * Time: 12:11
 */
echo '<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=mozilla">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/backontop.css"/>
    <!--    <link rel="shortcut icon" href="favicon.ico" />-->
    <script src="js/backontop.js"></script>
    <title>Dicas InfoData</title>
    
    <script>window.addEventListener( "scroll", Scroll );</script>
</head>
<body class="geral">

<div id="top" class="header">
    <div class="fix">
        <img src="img/header.png">
        <div class="titulo-header">Dicas InfoData</div>
    </div>
</div>
<div class="fix">
    <header>
        <input type="checkbox" id="chk_menu">
        <label for="chk_menu" id="lbl_menu"><span class="icon-reorder"></span></label>
        <nav class="menu">
            <ul>
                <li><a href="index.php"><span class="icon-home3"></span>Home</a></li>
                <li><a href="google.php"><span class="icon-google3"></span>Google</a></li>
                <li>
                    <input type="checkbox" id="chk_browser">
        
                    <label for="chk_browser" id="lbl_browser"><span class="icon-earth"></span>Navegadores<i class="icon-select-arrows"></i></label>
                    <ul>
                        <li><a href="firefox.php"><span class="icon-firefox2"></span>FireFox</a></li>
                        <li><a href="chrome.php"><span class="icon-chrome2"></span>Chrome</a></li>
                        <li><a href="opera.php"><span class="icon-opera"></span>Opera</a></li>
                        <li><a href="ie.php"><span class="icon-internet-explorer"></span>Internet Explorer</a></li>
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
                        <li><a href="usuarios.php"><span class="icon-user"></span>Usuários</a></li>
                    </ul>
               </li>
                <li>
                    <input type="checkbox" id="chk_java">
        
                    <label for="chk_java" id="lbl_java"><span class="icon-local_cafe"></span>Java<i class="icon-select-arrows"></i></label>
                    <ul>
                        <li><a href="jdk.php"><span class="icon-mug"></span>Java JDK</a></li>
                        <li><a href="java-painel.php"><span class="icon-document-file-java2"></span>Painel Java</a></li>
                    </ul>
                <li>
                    <input type="checkbox" id="chk_lamp">
        
                    <label for="chk_lamp" id="lbl_lamp"><span class="icon-list-ul"></span>LAMP e Node.js<i class="icon-select-arrows"></i></label>
                    <ul>
                        <li><a href="apache.php"><span class="icon-feather"></span>Apache</a></li>
                        <li><a href="mariaDB.php"><img src="img/mariadb.png" height="20px" width="28px">MariaDB</a></li>
                        <li><a href="mysql.php"><img src="img/mysql.png">MySQL</a></li>
                        <li><a href="php.php"><span class="icon-file-php"></span>PHP</a></li>
                        <li><a href="node.php"><img src="img/nodejs.png" height="20px" width="28px">Node.js</a></li>
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
        
                <label for="chk_ide" id="lbl_ide"><span class="icon-lightbulb"></span>Ide,SO,App<i class="icon-select-arrows"></i></label>
                    <ul>
                        <li><a href="phpstorm.php"><span class="icon-bulb"></span>PHPStorm</a></li>
                        <li><a href="netbeans.php"><span class="icon-codepen"></span>NetBeans</a></li>
                        <li><a href="android.php"><span class="icon-android"></span>Android</a></li>
                        <li><a href="vim.php"><img src="img/vim.png" height="20px" width="28px">Vim</a></li>
                    </ul>
                <li><a href="icomoon.php"><span class="icon-IcoMoon"></span>IcoMoon</a></li>
                <li><a href="licencas.php"><span class="icon-copyright"></span>Licenças</a></li>
            </ul>
        </nav>
    </header>
    <!-- Botão exibida conforme a rolagem, "backontop.js" -->
    <a href="#top" class="tutop"><img src="img/backtotop.png" alt="imagem para o topo" title=""/></a>'
?>
