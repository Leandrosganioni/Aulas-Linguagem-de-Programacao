<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/cargos.php';
    require_once '../funcoes/atividades.php';
    
    $cargos = listarCargos();
?>

<div class="container mt-5">
    <h2>Cadastrar Nova Atividade</h2>
    
    <form action="" method="POST">
        <div class="form-group">
            <label for="nome">Nome da Atividade</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="cargo_id">Cargo</label>
            <select class="form-control" id="cargo_id" name="cargo_id" required>
                <?php foreach($cargos as $cargo): ?>
                    <option value="<?= $cargo['id'] ?>"><?= $cargo['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <button type="submit" name="cadastrar_atividade" class="btn btn-primary">Cadastrar</button>
    </form>

    <?php
    if(isset($_POST['cadastrar_atividade'])) {
        $dados = [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'cargo_id' => $_POST['cargo_id']
        ];
        
        $resultado = adicionarAtividade($dados);
        
        if($resultado) {
            echo "<div class='alert alert-success mt-3'>Atividade cadastrada com sucesso!</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Erro ao cadastrar atividade.</div>";
        }
    }
    ?>
</div>

<?php require_once 'rodape.php'; ?>