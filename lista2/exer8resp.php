<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 8</h1>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
                $largura = (int) $_POST['largura'] ?? 0;
                $altura = (int) $_POST['altura'] ?? 0;
                $resultado = ($largura * $altura);
                echo "<p>Área do retangulo: $resultado</p>";
            }
            catch(Exception $e) {
                echo "Erro! ".$e->getMessage();

            }
            
        }
    
    ?>
  </body>