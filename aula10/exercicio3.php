<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php
        $estado = isset($_GET['estado']) ? $_GET['estado'] : null;
        switch ($estado) {
            case "Rio":
            case "Sao":
            case "Minas":
            case "Espirito":
                echo "Região Sudeste";
                break;

            case "Bahia":                   
            case "Sergipe":                  
            case "Pernambuco":                  
            case "RioGrandeDoNorte":                    
            case "Ceara":                   
            case "Piaui":                 
            case "Maranhão":                    
            case "Paraiba":                       
                echo "Região Nordeste";
                break;
            
            case "MatoGrosso":
            case "MatoGrossoDoSul":
            case "Goias":
            case "DistritoFederal":
                echo "Região Centro-oeste";
                break;
            
            case "Parana":
            case "SantaCatarina":
            case "RioGrandedoSul":
                echo "Região Sul";
                break;
            case "Amazonas":
            case "Para":
            case "Acre":
            case "Roraima":
            case "Rondonia":
            case "Amapa":
            case "Tocantins":
                echo "Região Norte";
                break;
            default:
                echo "Estado invalido";
        }
    ?>
    <br><a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>