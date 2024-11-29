<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/cargos.php';
    require_once '../funcoes/membros.php';
    
    $cargos = listarCargos();
    $busca = $_GET['busca'] ?? '';
    $membros = todosMembros();
    if (!empty($busca)) {
        $membros = array_filter($membros, function($membro) use ($busca) {
            return 
                stripos($membro['nome'], $busca) !== false ||
                stripos($membro['email'], $busca) !== false ||
                stripos($membro['cargo_nome'], $busca) !== false;
        });
    }
?>
?>

<div class="container mt-5">
    <h2>Cadastrar Novo Membro</h2>
    
    <form action="" method="POST">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" required>
        </div>
        
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>
        
        <div class="form-group">
            <label for="cargo_id">Cargo</label>
            <select class="form-control" id="cargo_id" name="cargo_id" required>
                <?php foreach($cargos as $cargo): ?>
                    <option value="<?= $cargo['id'] ?>"><?= $cargo['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <button type="submit" name="cadastrar_membro" class="btn btn-primary">Cadastrar</button>
    </form>

    <?php
    if(isset($_POST['cadastrar_membro'])) {
        $resultado = novoMembro(
            $_POST['nome'], 
            $_POST['email'], 
            $_POST['telefone'], 
            $_POST['endereco'], 
            $_POST['cargo_id']
        );
        
        if($resultado) {
            echo "<div class='alert alert-success mt-3'>Membro cadastrado com sucesso!</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Erro ao cadastrar membro.</div>";
        }
    }
    ?>
</div>

<?php require_once 'rodape.php'; ?>