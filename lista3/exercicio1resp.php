<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercício 1</h1>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
                $Menor_Valor = PHP_INT_MAX;
                $Pos_val = 0; 
                for ($i = 1; $i <= 7; $i++) {
                    $valor = $_POST ["valor$i"] ?? 0;
                    if ($valor < $Menor_Valor){
                        $Menor_Valor = $valor;
                        $Pos_val = $i;
                    
                    }
                    
                
                }
                echo "Posicao do menor valor $Menor_Valor é $Pos_val";

                
            } catch(Exception $e) {
                echo "Erro!".$e->getMessage();

            }
        }
    
    ?>
  </body>