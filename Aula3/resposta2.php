<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <?php
        declare(strict_types=1);

        function soma(int $a, int $b):int{
            return $a + $b;
        }
        function subtracao(int $a, int $b): void{
            echo "<p>Subtração: ".($a - $b)."</p>";
        }
        function saudacao(string $nome = "Visitante"): string{
            return "<p>Olá, $nome</p> ";
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        try
        {
            $valor1 = $_POST['valor1'] ?? 0;
            $valor2 = $_POST['valor2'] ?? 0;
            $soma = soma($valor1, $valor2);
            echo "<p>Soma: $soma</p>";
            subtracao($valor1, $valor2); //n precisa de echo pq a funcao é void la em cima
            saudacao();
            saudacao("Vanessa");
        }
        catch(Exception $e)
        {
            echo "Erro: " .$e->GetMessage();
        }
    

    ?>
</body>