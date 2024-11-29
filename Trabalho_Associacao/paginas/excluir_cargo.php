<?php
require_once '../funcoes/cargos.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    if(excluirCargo($id)) {
        // Redireciona com mensagem de sucesso
        header('Location: cargos.php?msg=sucesso');
    } else {
        // Redireciona com mensagem de erro
        header('Location: cargos.php?msg=erro');
    }
    exit;
} else {
    // Se não foi passado ID, redireciona
    header('Location: cargos.php');
    exit;
}
?>