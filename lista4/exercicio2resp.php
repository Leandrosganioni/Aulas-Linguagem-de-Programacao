<?php
    declare(strict_types=1);
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <?php
        function converterMaiusculo(string $texto) {
          return strtoupper($texto);
      }
  
      function converterMinusculo(string $texto) {
          return strtolower($texto);
      }
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        try
        {
          $palavra = $_POST['palavra'];
          echo "A palavra '{$palavra}' em maiúsculas: " . converterMaiusculo($palavra);
          echo "<br>A palavra '{$palavra}' em minúsculas: " . converterMinusculo($palavra);
        }
        catch(Exception $e)
        {
            echo "Erro: " .$e->GetMessage();
        }
    

    ?>
</body>



