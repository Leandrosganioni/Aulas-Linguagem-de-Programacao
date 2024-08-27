<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 20</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 20</h1>
    <p>Velocidade média</p>
    <form action="exer20resp.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="distance" class="form-label">Informe a distância:</label>
                <input type="number" class="form-control" name="distance" id="distance">
            </div>
            <div class="col">
                <label for="time" class="form-label">Informe o tempo:</label>
                <input type="number" class="form-control" name="time" id="time">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
  </body>