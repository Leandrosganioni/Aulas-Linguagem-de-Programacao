<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 15</h1>
    <p>IMC!</p>
    <form action="exer15resp.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="kg" class="form-label">Informe o peso em kg:</label>
                <input type="number" class="form-control" name="kg" id="kg">
            </div>
            <div class="col">   
                <label for="metros" class="form-label">Informe a altura em metros:</label>
                <input type="number" class="form-control" name="metros" id="metros">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
  </body>