<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 12</h1>
    <form action="exer12resp.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="base" class="form-label">Informe a base do número:</label>
                <input type="number" class="form-control" name="base" id="base">
            </div>
            <div class="col">
                <label for="expoente" class="form-label">Informe o expoente do número:</label>
                <input type="number" class="form-control" name="expoente" id="expoente">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
  </body>