<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //comentario inline
        # outro comentario inline
        /* comentario
            multiline
        */
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br> A variavel B vale $b";
        
    ?>
</body>
</html>