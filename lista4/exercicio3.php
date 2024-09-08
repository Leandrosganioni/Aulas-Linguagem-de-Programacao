<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 3</h1>
    <form action="exercicio3resp.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="palavra" class="form-label">Informe uma palavra: </label>
                <input type="text" class="form-control" name="palavra" id="palavra">
            </div>
            <div class="col">
                <label for="palavra2" class="form-label">Informe outra palavra: </label>
                <input type="text" class="form-control" name="palavra2" id="palavra2">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
  </body>