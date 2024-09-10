<?php
    declare(strict_types=1);
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <?php

        function conter(string $palavra, string $palavra2){
        if (strpos($palavra, $palavra2) != false){
            echo "A palavra {$palavra2} está contida na {$palavra}";
        }else{
            echo "A palavra {$palavra2} definitivamente não está contida na palavra {$palavra}";
        }
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        try
        {
            $palavra = $_POST['palavra'];
            $palavra2 = $_POST['palavra2'];
            conter($palavra, $palavra2);
        }
        catch(Exception $e)
        {
            echo "Erro: " .$e->GetMessage();
        }
    

    ?>
</body>



