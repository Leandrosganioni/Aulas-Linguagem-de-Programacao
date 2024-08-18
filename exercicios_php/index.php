<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Hoje é dia <?php 
    
    echo date("d/m/Y");
    
    
    ?></h1>
    <form action="resposta.php" method="POST"> <!-- sempre tem que ter action e method -->
        <input type="text" name="valor" />
        <button type="submit">Enviar</button>
    </form>
</body>