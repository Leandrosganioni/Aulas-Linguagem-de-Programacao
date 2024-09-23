<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <form action="" method="POST">
        <?php for($i=1;$i<=5;$i++): ?>
        <div class="container">
        <div class="row">
        <label for="livro" class="form-label">Informe o título e a quantidade em estoque do livro <?= $i ?> </label>
            <div class="col">
                <input type="text" name="titulos[]" placeholder="Título do livro <?= $i ?>"/>
            </div>
            <div class="col">
                <input type="number" name="quantidades[]" placeholder="Quantidade em estoque <?= $i ?>"/>
            </div>
        </div>
        </div>
        <?php endfor; ?>
        <div class="container">
            <button type="submit">Enviar</button>
        </div>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST"){
                try {

                    $titulos = $_POST['titulos'];
                    $quantidades = $_POST['quantidades'];

                    $livros = [];

                    for ($i = 0; $i < count($titulos); $i++) {
                        $livros[$titulos[$i]] = $quantidades[$i];
                    }
                    ksort($livros);

                    foreach ($livros as $titulo => $quantidade) {
                        if ($quantidade < 5) {
                            echo "<p>Baixa quantidade - Título: {$titulo}, Quantidade: {$quantidade}</p>";
                        } else {
                            echo "<p>Título: {$titulo}, Quantidade: {$quantidade}</p>";
                        }
                    }

                } catch (Exception $e) {
                    echo "Erro: " . $e->getMessage();
                }
            }
        ?>
    </form>
</body>
</html>
