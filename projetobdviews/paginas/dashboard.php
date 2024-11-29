<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<?php

    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/cargos.php';
    require_once '../funcoes/atividades.php';
    require_once '../funcoes/membros.php';
    require_once('../config/bancodedados.php');

    $cargos = listarCargos();
    $dadosAtividades = [];
    $dadosMembros = [];
    
    foreach ($cargos as $cargo) {
        $atividades = buscarAtividadesPorCargo($cargo['id']);
        $membros = buscarMembrosPorCargo($cargo['id']);
        
        $dadosAtividades[] = [
            'cargo' => $cargo['nome'], 
            'quantidade' => count($atividades)
        ];
        
        $dadosMembros[] = [
            'cargo' => $cargo['nome'], 
            'quantidade' => count($membros)
        ];
    }
    
?>

<div class="container mt-5">
    <h2>Dashboard de Atividades e Cargos</h2>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Atividades por Cargo</div>
                <div class="card-body">
                    <canvas id="atividadesChart"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Membros por Cargo</div>
                <div class="card-body">
                    <canvas id="membrosChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Dados de Atividades
    const dadosAtividades = <?= json_encode($dadosAtividades) ?>;
    const atividadesChart = document.getElementById('atividadesChart');

    // Gráfico de Atividades
    new Chart(atividadesChart, {
        type: 'bar',
        data: {
            labels: dadosAtividades.map(item => item.cargo),
            datasets: [{
                label: 'Número de Atividades',
                data: dadosAtividades.map(item => item.quantidade),
                backgroundColor: 'rgba(75, 192, 192, 0.6)'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Dados de Membros
    const dadosMembros = <?= json_encode($dadosMembros) ?>;
    const membrosChart = document.getElementById('membrosChart');

    // Gráfico de Membros
    new Chart(membrosChart, {
        type: 'pie',
        data: {
            labels: dadosMembros.map(item => item.cargo),
            datasets: [{
                label: 'Número de Membros',
                data: dadosMembros.map(item => item.quantidade),
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)'
                ]
            }]
        },
        options: {
            responsive: true
        }
    });
});
</script>

<!-- Inclua o Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php require_once 'rodape.php'; ?>
