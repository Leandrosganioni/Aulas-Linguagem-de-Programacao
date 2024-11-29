<?php
require_once '../funcoes/membros.php';


if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    
    // Tenta excluir o membro
    if (excluirMembro($id)) {

        header('Location: membros.php?sucesso=1');
    } else {

        header('Location: membros.php?erro=1');
    }
} else {

    header('Location: membros.php');
}
exit;