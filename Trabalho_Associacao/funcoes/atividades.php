<?php
require_once '../config/bancodedados.php';


function listarAtividades(): array {
    global $pdo;
    $stmt = $pdo->query("SELECT a.*, c.nome AS cargo_nome FROM atividade a LEFT JOIN cargo c ON a.cargo_id = c.id");  
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buscarAtividadePorId($id) {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM atividade WHERE id = $id");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function adicionarAtividade($dados) {
    global $pdo;
    $nome = $dados['nome'];
    $descricao = $dados['descricao'];
    $cargo_id = $dados['cargo_id'];
    
    $pdo->query("INSERT INTO atividade (nome, descricao, cargo_id) VALUES ('$nome', '$descricao', $cargo_id)");
    
    return true;
}

function editarAtividade($id, $dados) {
    global $pdo;
    $nome = $dados['nome'];
    $descricao = $dados['descricao'];
    $cargo_id = $dados['cargo_id'];
    
    $pdo->query("UPDATE atividade SET nome = '$nome', descricao = '$descricao', cargo_id = $cargo_id WHERE id = $id");
    
    return true;
}

function excluirAtividade($id) {
    global $pdo;
    $pdo->query("DELETE FROM atividade WHERE id = $id");
    return true;
}

function buscarAtividadesPorCargo($cargoId) {
    global $pdo;
    return $pdo->query("SELECT * FROM atividade WHERE cargo_id = $cargoId")->fetchAll(PDO::FETCH_ASSOC);
}