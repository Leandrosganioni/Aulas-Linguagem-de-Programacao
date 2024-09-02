<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            try
            {
                $valor = (int) $_POST['valor'] ?? 0;
                switch($valor)
                {
                    case 10:
                        echo "Nota A";
                        break;
                    case 9:
                        echo "Nota B";
                        break;
                    case 8:
                        echo "Nota C";
                        break;
                    case 7:
                        echo "Nota D";
                        break;
                    default: //significa qualquer outro
                        echo "Nota E";
                        //não precisa do break pois é o último
                }
                $dado = 1;
                $dado = ($dado >= 1 ) ? "Sim" : "Nao"; //if em uma única linha. Se lê dado recebe a condição onde, se dado for maior ou igual 1? Se sim, "Sim" se não, "Nao" nome disso é operador ternário!
                
                $i = 1;
                while ($i <= 5)
                {
                    echo "$i \n";
                    $i++;
                }
                $i=0;
                do
                {
                    echo "$i \n";
                    $i++;
                }
                while ($i <= 5);

                for ($i =0; $i <5; $i++)
                {
                    echo "$i \n";
                }
            }    
            catch(Exception $e) 
            {
                echo "Erro! ".$e->getMessage();
            }
        }
    ?>
</body>
</html>