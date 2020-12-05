<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
        $v = array( "nome" => "Ana", "idade" => 23, "peso" => 65.5);
        $v["fuma"] = true;
        foreach ($v as $k => $c){
            echo "O campo $k possui o conteudo $c <br/>";
        }
    ?>
</pre>  
</body>
</html>