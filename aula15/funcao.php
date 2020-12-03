<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function teste(&$x){
            $x += 2;
            echo "<p>o valor de X e $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A e $a</p>"
    ?>
</body>
</html>