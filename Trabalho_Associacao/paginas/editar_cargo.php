<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/cargos.php';
    
    // Verifica se foi passado um ID
    if(!isset($_GET['id'])) {
        header('Location: cargos.php');
        exit;
    }
    
    $id = $_GET['id'];
    $cargo = buscarCargoPorId($id);
?>

<div class="container mt-5">
    <h2>Editar Cargo</h2>
    
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="form-group">
            <label for="nome">Nome do Cargo</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $cargo['nome'] ?>" required>
        </div>
        
        <button type="submit" name="editar_cargo" class="btn btn-primary">Atualizar Cargo</button>
    </form>

    <?php
    if(isset($_POST['editar_cargo'])) {
        $resultado = alterarCargo($_POST['id'], $_POST['nome']);
        
        if($resultado) {
            echo "<div class='alert alert-success mt-3'>Cargo atualizado com sucesso!</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Erro ao atualizar cargo.</div>";
        }
    }
    ?>
</div>

<?php require_once 'rodape.php'; ?>