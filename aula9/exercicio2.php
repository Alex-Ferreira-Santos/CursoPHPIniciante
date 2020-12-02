<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php
        $a = isset($_GET['ano']) ? $_GET['ano'] : 1900;
        $i = date('Y') - $a;
        echo "Você nasceu em $a e tera $i anos <br>";
        if($i < 16){
            $tipoVoto = "nao votar";
        }elseif(($i >= 16 && $i < 18) || ($i>65)){
            $tipoVoto = "voto opcional";
        }
        else{
            $tipoVoto = "voto obrigatorio";
        }
        
        echo "Para essa idade, $tipoVoto";
    ?>
</body>
</html>