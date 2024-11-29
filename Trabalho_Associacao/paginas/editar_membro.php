<?php 
require_once 'cabecalho.php'; 
require_once 'navbar.php'; 
require_once '../funcoes/membros.php';
require_once '../funcoes/cargos.php';

// Verifica se foi passado um ID
if(!isset($_GET['id'])) {
    header('Location: membros.php');
    exit;
}

$id = (int)$_GET['id'];
$membro = retornaMembroPorId($id);
$cargos = listarCargos(); 

if(!$membro) {-
    header('Location: membros.php');
    exit;
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="mb-4">Editar Membro</h2>
            
            <form method="POST" action="">
                <input type="hidden" name="id" value="<?= $id ?>">
                
                <div class="form-group mb-3">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" 
                           value="<?= htmlspecialchars($membro['nome']) ?>" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" 
                           value="<?= htmlspecialchars($membro['email']) ?>" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" 
                           value="<?= htmlspecialchars($membro['telefone']) ?>" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" 
                           value="<?= htmlspecialchars($membro['endereco']) ?>" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="cargo_id">Cargo</label>
                    <select class="form-control" id="cargo_id" name="cargo_id" required>
                        <?php foreach($cargos as $cargo): ?>
                            <option value="<?= $cargo['id'] ?>" 
                                <?= $cargo['id'] == $membro['cargo_id'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($cargo['nome']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <button type="submit" name="atualizar_membro" class="btn btn-primary">
                    Atualizar Membro
                </button>
                <a href="membros.php" class="btn btn-secondary">Cancelar</a>
            </form>

            <?php
            if(isset($_POST['atualizar_membro'])) {
                $resultado = atualizarMembro(
                    (int)$_POST['id'],
                    $_POST['nome'],
                    $_POST['email'],
                    $_POST['telefone'],
                    $_POST['endereco'],
                    (int)$_POST['cargo_id']
                );
                
                if($resultado) {
                    echo "<div class='alert alert-success mt-3'>Membro atualizado com sucesso!</div>";
                    echo "<script>setTimeout(() => { window.location.href = 'membros.php'; }, 2000);</script>";
                } else {
                    echo "<div class='alert alert-danger mt-3'>Erro ao atualizar membro.</div>";
                }
            }
            ?>
        </div>
    </div>
</div>

<?php require_once 'rodape.php'; ?>