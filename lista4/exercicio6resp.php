<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 6 resposta</h1>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $numero = $_POST['valor1'];
                    $numeroArredondado = round($numero);
                    echo "<p'>O número informado arredondado é: $numeroArredondado</p>";
                }
            } catch(Exception $e) {
                echo "Erro!".$e->getMessage();

            }
        }
    
    ?>
  </body>