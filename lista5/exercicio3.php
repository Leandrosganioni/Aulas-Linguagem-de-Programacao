<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <form action="" method="POST">
        <?php for($i=1;$i<=5;$i++): ?>
        <div class="container">
        <div class="row">
        <label for="produto" class="form-label">Informe o código, nome e preço do produto <?= $i ?> </label>
            <div class="col">
                <input type="number" name="codigos[]" placeholder="Código <?= $i ?>"/>
            </div>
            <div class="col">
                <input type="text" name="nomes[]" placeholder="Nome do produto <?= $i ?>" />
            </div>
            <div class="col">
                <input type="number" name="precos[]" placeholder="Preço do produto <?= $i ?>"/>
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

                    $codigos = $_POST['codigos'];
                    $nomes = $_POST['nomes'];
                    $precos = $_POST['precos'];


                    $produtos = [];


                    for ($i = 0; $i < count($codigos); $i++) {

                        $precoFinal = $precos[$i] > 100 ? $precos[$i] * 0.9 : $precos[$i];

                        $produtos[$codigos[$i]] = [
                            'nome' => $nomes[$i],
                            'preco' => $precoFinal
                        ];
                    }
                    uasort($produtos, function($a, $b) {
                        return strcmp($a['nome'], $b['nome']);
                    });
                    foreach ($produtos as $codigo => $infoProduto) {
                        echo "<p>Código: {$codigo}, Nome: {$infoProduto['nome']}, Preço: R$ " . number_format($infoProduto['preco'], 2) . "</p>";
                    }

                } catch (Exception $e) {
                    echo "Erro: " . $e->getMessage();
                }
            }
        ?>
    </form>
</body>
</html>
