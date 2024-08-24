<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 7</h1>
    <form action="exer7resp.php" method="POST">
        <div class="container mt-3 ">
        <div class="row">
            <div class="col mb-3 mt-3 ">
                <label for="farhenheit" class="form-label">Informe a temperatura em Fahrenheit: </label>
                <input type="number" class="form-control" name="farhenheit" id="farhenheit">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
        </div>
    </form>
  </body>