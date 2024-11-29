<?php
require_once '../config/bancodedados.php';
require_once '../funcoes/atividades.php';

// Verifica se o ID foi passado
if (!isset($_GET['id'])) {
    header('Location: atividades.php');
    exit();
}

$id = $_GET['id'];
$resultado = excluirAtividade($id);


exit();
?>