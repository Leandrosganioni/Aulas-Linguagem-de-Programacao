
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        try
        {
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];
            if (checkdate($mes, $dia, $ano)) {
                echo "<h1>Data válida</h1>";
                echo "<h2>A data {$dia}/{$mes}/{$ano} está correta, parabéns.</h2>";
            } else {
                echo "<p>Data inválida</p>";
            }

        }
        catch(Exception $e)
        {
            echo "Erro: " .$e->GetMessage();
        }
    

    ?>
</body>



