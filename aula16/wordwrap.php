<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $t = "Aqui temos um exemplo de testo gigante para mostrar o funcionamento da função wordwrap";
        $r = wordwrap($t,20,"<br/>\n",false);
    ?>
</body>
</html>