<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
        <h1>Exercício 10</h1>
        <form action="exer10resp.php" method="POST">
            <div class="row">
                <div class="col">
                    <label for="largura" class="form-label" nome="largura">Digite a largura do retângulo:</label>
                    <input type="number" class="form-control" name="largura" id="largura">
                </div>
                <div class="col">
                    <label for="altura" class="form-label" nome="altura">Digite a altura do retângulo:</label>
                    <input type="number" class="form-control" name="altura" id="altura">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Calcular</button>
        </form>
    </div>
</body>