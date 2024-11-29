<?php
// funcoes/cargos.php

require_once '../config/bancodedados.php';

function listarCargos(): array {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM cargo ORDER BY nome");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buscarCargoPorId(int $id): ?array {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM cargo WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}  

function criarCargo(string $nome): bool {	
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO cargo (nome) VALUES (?)");
    return $stmt->execute([$nome]);
}

function alterarCargo(int $id, string $nome): bool {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE cargo SET nome = ? WHERE id = ?");
    return $stmt->execute([$nome, $id]);
}

function excluirCargo(int $id): bool {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM cargo WHERE id = ?");
    return $stmt->execute([$id]);
}