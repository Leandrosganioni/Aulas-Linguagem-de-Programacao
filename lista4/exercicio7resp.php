<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercício 7</h1>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $possibleFormats = array('Y-m-d', 'm/d/Y', 'd/m/Y');

        foreach ($possibleFormats as $format) {
            $data1 = DateTime::createFromFormat($format, $_POST['data1']);
            $data2 = DateTime::createFromFormat($format, $_POST['data2']);

            if ($data1 && $data2) {
                $intervalo = $data1->diff($data2);
                $diferencaDias = $intervalo->days;

                echo "<p'>A diferença das datas informadas é $diferencaDias dias.</p>";
                break;
            }
        }

        if (!$data1 || !$data2) {
            throw new Exception("Erro: Formato inválido.");
        }
    } catch (Exception $e) {
        echo "Erro!" . $e->getMessage();
    }
}
?>
  </body>