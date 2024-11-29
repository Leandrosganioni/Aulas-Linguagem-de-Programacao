<?php
declare(strict_types=1);

require_once('../config/bancodedados.php');


function novoMembro(string $nome, string $email, string $telefone, string $endereco, int $cargo_id): bool {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO membro (nome, email, telefone, endereco, cargo_id) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$nome, $email, $telefone, $endereco, $cargo_id]);
}

function excluirMembro(int $id): bool {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM membro WHERE id = ?");
    return $stmt->execute([$id]);
}

function todosMembros(string $busca = ''): array {
    global $pdo;
    $stmt = $pdo->prepare("SELECT m.id, m.nome, m.email, m.telefone, m.endereco, c.nome AS cargo_nome FROM membro m JOIN cargo c ON m.cargo_id = c.id WHERE m.nome LIKE ? OR m.email LIKE ? OR c.nome LIKE ?");
    $stmt->execute(["%$busca%", "%$busca%", "%$busca%"]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function retornaMembroPorId(int $id): ?array {
    global $pdo;
    $stmt = $pdo->prepare("SELECT m.*, c.nome AS cargo_nome FROM membro m JOIN cargo c ON m.cargo_id = c.id WHERE m.id = ?");
    $stmt-> execute([$id]);
    $membro = $stmt->fetch(PDO::FETCH_ASSOC);
    return $membro ? $membro : null;
}

function atualizarMembro(int $id, string $nome, string $email, string $telefone, string $endereco, int $cargo_id): bool {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE membro SET nome = ?, email = ?, telefone = ?, endereco = ?, cargo_id = ? WHERE id = ?");
    return $stmt->execute([$nome, $email, $telefone, $endereco, $cargo_id, $id]);
}

function buscarMembrosPorCargo(int $cargo_id): array {
    global $pdo;
    $stmt = $pdo->prepare("SELECT m.*, c.nome AS cargo_nome FROM membro m JOIN cargo c ON m.cargo_id = c.id WHERE m.cargo_id = ? ORDER BY m.nome");
    $stmt->execute([$cargo_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


?>
