<?php
    declare(strict_types=1);
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <?php
        function comparaData($data1, $data2)
        {
            return date_diff($data1, $data2);;
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        try
        {
            $data1 = new DateTime($_POST['data1']);
            $data2 = new DateTime($_POST['data2']);
            $resultado = comparaData($data1, $data2);
            echo "A diferença de tempo das datas é: " . $resultado->y . " anos, " . $resultado->m . " meses e " . $resultado->d . " dias.";
        }
        catch(Exception $e)
        {
            echo "Erro: " .$e->GetMessage();
        }
    

    ?>
</body>



