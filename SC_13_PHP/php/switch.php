<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>
    <?php

    $variable ='1';

   switch ($variable) {
    case '1':
        echo ('One');
        break;
    case '2':
        echo ('Two');
    break;
    
    default:
        echo ('Default');
        break;
   }

   echo '<br>';
   
   
   $variable = 2;
   
   switch ($variable) {
       case '1' ==$variable:
        echo ('UM');
        break;
        case '2' ==$variable:
            echo ('DOIS');
            break;
            
            default:
            echo ('Default');
            break;
    }
        
    echo '<br>';
    ?>
</body>
</html>
