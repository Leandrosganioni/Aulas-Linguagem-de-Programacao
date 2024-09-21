<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <form action="" method="POST">
        <?php for($i=1;$i<=5;$i++):?>
        <div class="container">
        <div class="row">
        <label for="palavra" class="form-label">Informe o nome e número <?= $i ?> </label>
            <div class="col">
                <input type="text" name="nomes[]" placeholder="Nome <?= $i ?>"/>
            </div>
            <div class="col">
            <input type="number" name="numeros[]" placeholder="Número <?= $i ?>"/>
            </div>
        </div>
        </div>
        <?php endfor; ?>
        <div class="container">
            <button type="submit">Enviar</button>
        </div>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST"){
                try{

                    $nome = $_POST['nomes'];
                    $numero = $_POST['numeros'];
                    $nomesNumeros = [];
                    foreach ($nome as $chave => $valor)
                    {
                        if ((!isset($nomesNumeros[$valor]) && (!in_array($numero[$chave],$nomesNumeros))))
                        $nomesNumeros[$valor] = $numero[$chave];
                    }
                    print_r($nomesNumeros);
                } catch (Exception $e){
                    echo $e->getMessage();
                }
            }
        ?>

    </form>
</body>