<?php
    declare(strict_types=1);
    ?>

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
        function calcularData(DateTime $data1, DateTime $data2): int
        {
            $interval = $data1->diff($data2);
            return $interval->days;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {
                $possibleFormats = array('Y-m-d', 'm/d/Y', 'd/m/Y');
                $data1 = $_POST['data1'];
                $data2 = $_POST['data2'];

                foreach ($possibleFormats as $format) {
                    try {
                        $data1Object = DateTime::createFromFormat($format, $data1);
                        $data2Object = DateTime::createFromFormat($format, $data2);

                        if ($data1Object && $data2Object) {
                            echo "A diferença entre as datas é de " . calcularData($data1Object, $data2Object) . " dias.";
                            break;
                        }
                    } catch (Exception $e) {
                    }
                }

                if (!$data1 || !$data2) {
                    throw new Exception("Erro: Formato de data inválido.");
                }
            } catch (Exception $e) {
                echo "Erro!" . $e->getMessage();
            }
        }
?>
  </body>