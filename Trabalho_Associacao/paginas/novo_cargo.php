<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/cargos.php';
?>

<div class="container mt-5">
    <h2>Novo Cargo</h2>
    
    <form action="" method="POST">
        <div class="form-group">
            <label for="nome">Nome do Cargo</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        
        <button type="submit" name="criar_cargo" class="btn btn-primary">Criar Cargo</button>
    </form>

    <?php
    if(isset($_POST['criar_cargo'])) {
        $resultado = criarCargo($_POST['nome']);
        
        if($resultado) {
            echo "<div class='alert alert-success mt-3'>Cargo criado com sucesso!</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Erro ao criar cargo.</div>";
        }
    }
    ?>
</div>

<?php require_once 'rodape.php'; ?>