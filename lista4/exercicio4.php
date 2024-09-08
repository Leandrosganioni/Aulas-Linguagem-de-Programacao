<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 4</h1>
    <form action="exercicio4resp.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="dia" class="form-label">Informe um dia: </label>
                <input type="text" class="form-control" name=dia id="dia">
            </div>
            <div class="col">
                <label for="mes" class="form-label">Informe um mês: </label>
                <input type="text" class="form-control" name="mes" id="mes">
            </div>
            <div class="col">
                <label for="ano" class="form-label">Informe um ano: </label>
                <input type="text" class="form-control" name="ano" id="ano">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
  </body>