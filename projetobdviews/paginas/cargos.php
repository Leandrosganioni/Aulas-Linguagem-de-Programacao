<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/cargos.php';
    
    $cargos = listarCargos();
?>

<div class="container mt-5">
    <div class="row mb-3">
        <div class="col-md-10">
            <h2>Cargos Existentes</h2>
        </div>
        <div class="col-md-2 text-right">
            <a href="novo_cargo.php" class="btn btn-primary">Criar Cargo</a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Cargo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cargos as $cargo): ?>
                <tr>
                    <td><?= $cargo['id'] ?></td>
                    <td><?= $cargo['nome'] ?></td>
                    <td>
                        <a href="editar_cargo.php?id=<?= $cargo['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="excluir_cargo.php?id=<?= $cargo['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este cargo?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>