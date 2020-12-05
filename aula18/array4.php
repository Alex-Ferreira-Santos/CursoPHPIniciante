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
        $v = array( 0=>5, 1=>9, 2=>8, 3=>7);
        unset($v[0]);
        print_r($v);
        
    ?>
</pre>  
</body>
</html>