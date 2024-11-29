<?php 
require_once 'cabecalho.php'; 
require_once 'navbar.php'; 
require_once '../funcoes/membros.php';

$busca = $_GET['busca'] ?? '';
$membros = todosMembros($busca);
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">Gerenciamento de Membros da Associação</h2>
            
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="novo_membro.php" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Novo Membro
                </a>
                
                <form class="d-flex" method="GET">
                    <input type="text" name="busca" class="form-control me-2" placeholder="Buscar membro..." 
                           value="<?= $_GET['busca'] ?? '' ?>">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

            <?php if (empty($membros)): ?>
                <div class="alert alert-info text-center" role="alert">
                    Nenhum membro cadastrado ainda.
                </div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Endereço</th>
                                <th>Cargo</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($membros as $m): ?>
                            <tr>
                                <td><?= htmlspecialchars($m['id']) ?></td>
                                <td><?= htmlspecialchars($m['nome']) ?></td>
                                <td><?= htmlspecialchars($m['email']) ?></td>
                                <td><?= htmlspecialchars($m['telefone']) ?></td>
                                <td><?= htmlspecialchars($m['endereco']) ?></td>
                                <td><?= htmlspecialchars($m['cargo_nome']) ?></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="editar_membro.php?id=<?= $m['id'] ?>" 
                                           class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="excluir_membro.php?id=<?= $m['id'] ?>" 
                                           class="btn btn-sm btn-danger" 
                                           onclick="return confirm('Tem certeza que deseja excluir este membro?')">
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