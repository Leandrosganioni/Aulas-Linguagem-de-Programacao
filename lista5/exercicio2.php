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
        <label for="palavra" class="form-label">Informe o nome e três notas <?= $i ?> </label>
            <div class="col">
                <input type="text" name="nomes[]" placeholder="Nome do aluno <?= $i ?>"/>
            </div>
            <div class="col">
            <input type="number" name="nota1[]" placeholder="nota do aluno <?= $i ?>"/>
            </div>
            <div class="col">
            <input type="number" name="nota2[]" placeholder="nota do aluno <?= $i ?>"/>
            </div>
            <div class="col">
            <input type="number" name="nota3[]" placeholder="nota do aluno <?= $i ?>"/>
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

                    $nomes = $_POST['nomes'];
                    $notas1 = $_POST['nota1'];
                    $notas2 = $_POST['nota2'];
                    $notas3 = $_POST['nota3'];
                    $nomesMedia = [];
                    for ($i = 0; $i < count($nomes); $i++) 
                    {
                        $media = ($notas1[$i] + $notas2[$i] + $notas3[$i]) / 3;
                        $nomesMedia[$nomes[$i]] = $media;
                    }
                    arsort($nomesMedia);

                    foreach ($nomesMedia as $aluno => $media) {
                        echo "<li class='list-group-item'>{$aluno}: " . number_format($media, 2) . "</li>";
                    }
                    
                } catch (Exception $e){
                    echo $e->getMessage();
                }
            }
        ?>

    </form>
</body>