<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício hadad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <form action="" method="POST">
        <?php for($i=1;$i<=5;$i++): ?>
        <div class="container">
        <div class="row">
        <label for="item" class="form-label">Informe o nome e o preço do item <?= $i ?> </label>
            <div class="col">
                <input type="text" name="nomes[]" placeholder="Nom edo item <?= $i ?>"/>
            </div>
            <div class="col">
                <input type="number" name="precos[]" placeholder="Preço do item <?= $i ?>" step="0.01"/>
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
                    $nomes = $_POST['nomes'];
                    $precos = $_POST['precos'];
                    $itens = [];

                    for ($i = 0; $i < count($nomes); $i++) {
                        $precoFinal = $precos[$i] * 1.15; 

                        $itens[$nomes[$i]] = $precoFinal;
                    }

                    asort($itens);

                    foreach ($itens as $nome => $preco) {
                        echo "<p>Nome: {$nome}, Preço com imposto: R$ " . number_format($preco, 2) . "</p>";
                    }
                } catch (Exception $e) {
                    echo "Erro: " . $e->getMessage();
                }
            }
        ?>
    </form>
</body>
</html>
