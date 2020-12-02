<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
            $ano = isset($_GET["ano"])?$_GET["ano"]:"[não informado]";
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[não informado]";
            $idade = date("Y") - $ano;
            echo "$nome e do sexo $sexo tem $idade anos";
        ?>
        <a href="./exercicio2.html">voltar</a>
    </div>
</body>
</html>