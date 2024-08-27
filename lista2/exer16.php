<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 16</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 16</h1>
    <p>Desconto</p>
    <form action="exer16resp.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label">Informe o valor do produto:</label>
                <input type="number" class="form-control" name="valor" id="valor">
            </div>
            <div class="col">
                <label for="desconto" class="form-label">Informe quantidade de desconto:</label>
                <input type="number" class="form-control" name="desconto" id="desconto">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
  </body>