<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php
        $n = isset($_GET['num']) ? $_GET['num'] : 0;
        $o = isset($_GET['oper']) ? $_GET['oper'] : 1;
        switch ($o) {
            case 1:
                $r = $n * 2;
                echo $r;
                break;
            case 2:
                $r = $n ^ 3;
                echo $r;
                break;
            case 3:
                $r = sqrt($n);
                echo $r;
                break;
        }
        echo "O resultado da operacao solicitada foi $r";
    ?>
    <a href="exercicio1.html">Voltar</a>
</body>
</html>