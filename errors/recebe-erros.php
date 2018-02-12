<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=0.5">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
</head>
<body>
<?php
$recebe = $_GET['q'];// recebe o código de erro
// já que só eu sei essa página

http_response_code($recebe);// Envia os dados no cabeçalho da resposta, suporte desde o PHP5

//echo "<h1 style='text-align:center'>Erro $recebe</h1>";

//mostra o meme relacionado ao erro
//echo "<img src=\"https://jul10l1r4.github.io/HTTP_-_Resposta/img/$recebe\">";
echo "
<div style=\"text-align: center;\">
    <img src=\"/errors/escudo$recebe.png\">
</div>
";
?>
</body>
</html>





