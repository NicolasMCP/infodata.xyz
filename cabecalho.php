<?php
/**
 * Created by PhpStorm.
 * User: Herley Ramos
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
    <title>Dicas InfoData</title>
    <!-- Responsável por fazer toda a troca e toda a substituição entre .tutop e totop -->
    <script>
        // Efeito scroll, rolagem da página, pega a barra na esquerda e muda ela para ficar fixa
        const Scroll = () => {      // Arrow function `ES6`
            if ( window.pageYOffset > 80 ) {// Se a página estiver descida 180pxeis ela faz o código abaixo
                let top = document.querySelector( `.tutop` )
                top.setAttribute( `style`, `animation-name:totop;animation-duration:0.5s` )
                setTimeout(function(){					
                    top.setAttribute( `class`, `totop` )
                }  , 500)
            }else {
                let top = document.querySelector( `.totop` )
                top.setAttribute( `style`, `animation-name:tutop;animation-duration:0.5s` )
                setTimeout(function(){		
                    top.setAttribute( `class`, `tutop` )
                }  , 500)
            }
        }
        // Ativa a nossa função
        window.addEventListener( `scroll`, Scroll );

    </script>
</head>
<body class="geral">
<a name="inicio"></a>
<!-- Este id é e será o ponto de referencia para o scroll -->
<div id="top" class="header">
    <img src="img/header.png">
    <div class="titulo-header">Dicas InfoData</div>
</div>
<header>
    <input type="checkbox" id="chk_menu">
    <label for="chk_menu" id="lbl_menu"><span class="icon-reorder"></span></label>
    <nav class="menu">
        <ul>
            <li><a href="#"><span class="icon-home3"></span>Home</a></li>
            <li><a href="#"><span class="icon-google3"></span>Google</a></li>
            <li>
                <input type="checkbox" id="chk_browser">
    
                <label for="chk_browser" id="lbl_browser"><span class="icon-earth"></span>Navegadores<i class="icon-select-arrows"></i></label>
                <ul>
                    <li><a href="#"><span class="icon-firefox2"></span>FireFox</a></li>
                    <li><a href="#"><span class="icon-chrome2"></span>Chrome</a></li>
                    <li><a href="#"><span class="icon-internet-explorer"></span>Internet Explorer</a></li>
                    <li><a href="#"><span class="icon-opera"></span>Opera</a></li>
                </ul>
            </li>
            <li>
                <input type="checkbox" id="chk_linux">
    
                <label for="chk_linux" id="lbl_linux"><span class="icon-linux"></span>Linux<i class="icon-select-arrows"></i></label>
                <ul>
                    <li><a href="#"><span class="icon-vynil"></span>Repositorio ISO</a></li>
                    <li><a href="#"><span class="icon-search"></span>Buscas</a></li>
                    <li><a href="#"><span class="icon-language"></span>Idioma</a></li>
                    <li><a href="#"><span class="icon-folders"></span>Samba</a></li>
                    <li><a href="#"><span class="icon-user"></span>Usuários</a></li>
                </ul>
           </li>
            <li>
                <input type="checkbox" id="chk_java">
    
                <label for="chk_java" id="lbl_java"><span class="icon-local_cafe"></span>Java<i class="icon-select-arrows"></i></label>
                <ul>
                    <li><a href="#"><span class="icon-document-file-java"></span>Java JRE</a></li>
                    <li><a href="#"><span class="icon-mug"></span>Java JDK</a></li>
                    <li><a href="#"><span class="icon-document-file-java2"></span>Painel Java</a></li>
                </ul>
            <li>
                <input type="checkbox" id="chk_lamp">
    
                <label for="chk_lamp" id="lbl_lamp"><span class="icon-list-ul"></span>LAMP e Node.js<i class="icon-select-arrows"></i></label>
                <ul>
                    <li><a href="#"><span class="icon-feather"></span>Apache</a></li>
                    <li><a href="#"><img src="mariadb.png" height="18px" width="18px">MariaDB</a></li>
                    <li><a href="#"><img src="mysql.png">MySQL</a></li>
                    <li><a href="#"><span class="icon-file-php"></span>PHP</a></li>
                    <li><a href="#"><img src="nodejs.png" height="18px" width="18px">Node.js</a></li>
                </ul>
            <li>
                <input type="checkbox" id="chk_sudo">
    
                <label for="chk_sudo" id="lbl_sudo"><span class="icon-terminal"></span>Sudo,SSH,nmap<i class="icon-select-arrows"></i></label>
                <ul>
                    <li><a href="#"><span class="icon-hash"></span>SUDO</a></li>
                    <li><a href="#"><span class="icon-terminal"></span>Restringir SSH</a></li>
                    <li><a href="#"><span class="icon-terminal"></span>SSH Porta</a></li>
                    <li><a href="#"><span class="icon-terminal"></span>SSH Erro</a></li>
                    <li><a href="#"><span class="icon-terminal"></span>nmap</a></li>
                </ul>
            <li>
                <input type="checkbox" id="chk_ide">
    
            <label for="chk_ide" id="lbl_ide"><span class="icon-lightbulb"></span>Ide,SO,App<i class="icon-select-arrows"></i></label>
                <ul>
                    <li><a href="#"><span class="icon-bulb"></span>PHPStorm</a></li>
                    <li><a href="#"><span class="icon-codepen"></span>NetBeans</a></li>
                    <li><a href="#"><span class="icon-android"></span>Android</a></li>
                    <li><a href="#"><img src="vim.png" height="18px" width="18px">Vim</a></li>
                </ul>
            <li><a href="#"><span class="icon-IcoMoon"></span>Licenças</a></li>
        </ul>
    </nav>
</div>
</header>
<!-- Ancora, na qual é exibida conforme a posição de rolagem, ver o arquivo "Ecmascript/scroll-smart.js" -->
<a href="#top" class="tutop"><img src="img/backtotop.png" alt="imagem para o topo" title="subir ao topo"/></a>'
?>
