<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <style>
        .nota{
            color: blue;
        }
        .aprovado{
            color: green;
        }
        .rec{
            color:yellow;
        }
        .rep{
            color: red;
        }
        .bc{
            background-color: #000
        }
    </style>
</head>
<body>
    <?php
        $nota1 = isset($_GET['numero1']) ? $_GET['numero1'] : 0;
        $nota2 = isset($_GET['numero2']) ? $_GET['numero2'] : 0;
        $m = ($nota1+$nota2)/2;
        echo "<p>A média entre <span class='nota'>$nota1</span> e <span class='nota'>$nota2</span> é igual a <span class='nota'>$m</span></p>";
        if($m > 6){
            $situação = "<span class='bc aprovado'>aprovado</span>";
        }elseif($m > 5 || $m < 6){
            $situação = "<span class='bc rec'>recuperação</span>";
        }
        else{
            $situação = "<span class='bc rep'>reprovado</span>";
        }
        echo "<p>Situação do aluno: $situação</p>";
    ?>
</body>
</html>