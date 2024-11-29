<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/atividades.php';
    require_once '../funcoes/cargos.php';

    // Verifica se o ID foi passado
    if (!isset($_GET['id'])) {
        header('Location: listar_atividades.php');
        exit();
    }

    $id = $_GET['id'];
    $atividade = buscarAtividadePorId($id);
    $cargos = listarCargos();
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Editar Atividade</h2>
            
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?= $atividade['id'] ?>">
                
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" 
                           value="<?= $atividade['nome'] ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" required>
                        <?= $atividade['descricao'] ?>
                    </textarea>
                </div>
                
                <div class="form-group">
                    <label for="cargo_id">Cargo</label>
                    <select class="form-control" id="cargo_id" name="cargo_id" required>
                        <?php foreach($cargos as $cargo): ?>
                            <option value="<?= $cargo['id'] ?>" 
                                <?= ($cargo['id'] == $atividade['cargo_id']) ? 'selected' : '' ?>>
                                <?= $cargo['nome'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <button type="submit" name="editar" class="btn btn-primary">Salvar Alterações</button>
                <a href="listar_atividades.php" class="btn btn-secondary">Cancelar</a>
            </form>

            <?php
            if(isset($_POST['editar'])) {
                $dados = [
                    'nome' => $_POST['nome'],
                    'descricao' => $_POST['descricao'],
                    'cargo_id' => $_POST['cargo_id']
                ];

                $resultado = editarAtividade($_POST['id'], $dados);

                if($resultado) {
                    echo "<div class='alert alert-success mt-3'>Atividade atualizada com sucesso!</div>";
                    echo "<script>
                        setTimeout(function() {
                            window.location.href = 'listar_atividades.php';
                        }, 2000);
                    </script>";
                } else {
                    echo "<div class='alert alert-danger mt-3'>Erro ao atualizar atividade.</div>";
                }
            }
            ?>
        </div>
    </div>
</div>

<?php require_once 'rodape.php'; ?>