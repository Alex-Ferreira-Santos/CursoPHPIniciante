<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frase = "Gosto de estudar matemática!!!";
        $novaFrase = str_replace("Matemática","PHP",$frase);
        print($novaFrase);
    ?>
</body>
</html>