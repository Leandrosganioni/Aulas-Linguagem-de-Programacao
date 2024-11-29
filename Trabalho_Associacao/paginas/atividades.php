<?php 
require_once 'cabecalho.php'; 
require_once 'navbar.php'; 
require_once '../funcoes/atividades.php';
require_once '../funcoes/cargos.php';

$busca = $_GET['busca'] ?? '';
$atividades = listarAtividades();
$cargos = listarCargos();
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">Gerenciamento de Atividades</h2>
            
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="nova_atividade.php" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Nova Atividade
                </a>
                
                <form class="d-flex" method="GET">
                    <input type="text" name="busca" class="form-control me-2" placeholder="Buscar atividade..." 
                           value="<?= $_GET['busca'] ?? '' ?>">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

            <?php if (empty($atividades)): ?>
                <div class="alert alert-info text-center" role="alert">
                    Nenhuma atividade cadastrada ainda.
                </div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Cargo Relacionado</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($atividades as $a): ?>
                            <tr>
                                <td><?= htmlspecialchars($a['id']) ?></td>
                                <td><?= htmlspecialchars($a['nome']) ?></td>
                                <td><?= htmlspecialchars($a['descricao']) ?></td>
                                <td><?= htmlspecialchars($a['cargo_nome'] ?? 'Sem cargo') ?></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="editar_atividade.php?id=<?= $a['id'] ?>" 
                                           class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="excluir_atividade.php?id=<?= $a['id'] ?>" 
                                           class="btn btn-sm btn-danger" 
                                           onclick="return confirm('Tem certeza que deseja excluir esta atividade?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'rodape.php'; ?>