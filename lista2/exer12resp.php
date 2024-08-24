<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercício 12</h1>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
                $base = (int) $_POST['base'] ?? 0;
                $expoente = (int) $_POST['expoente'] ?? 0;
                $resultado = $base ** $expoente;
                echo "<p>Resultado: $resultado</p>";
            }
            catch(Exception $e) {
                echo "Erro! ".$e->getMessage();

            }   
        }
    ?>
  </body>