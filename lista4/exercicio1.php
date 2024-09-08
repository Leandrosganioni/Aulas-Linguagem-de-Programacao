<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 1 lista 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <h3>Exercício 1</h3>
    <form action="exercicio1resp.php" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" name="valor" class="form-control">
            </div>
            <div class="col">
                <label for="num" class="form-label">Informe o número:</label>
                <input type="number" class="form-control" name="num" id="num">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form> 
</body>