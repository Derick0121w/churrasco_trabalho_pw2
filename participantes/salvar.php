<?php
require_once '../includes/verificar_login.php';
require_once '../config/conexao.php';

$nome = trim($_POST['nome'] ?? '');
$turma = trim($_POST['turma'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');
$tipo_churrasco = trim($_POST['tipo_churrasco'] ?? '');
$acompanhamento = trim($_POST['acompanhamento'] ?? '');
$confirmado = (int)($_POST['confirmado'] ?? 0);
$pago = (int)($_POST['pago'] ?? 0);

if (!empty($nome) && !empty($turma) && !empty($tipo_churrasco)) {
    $stmt = $conn->prepare("INSERT INTO participantes (nome, turma, telefone, tipo_churrasco, acompanhamento, confirmado, pago) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssii", $nome, $turma, $telefone, $tipo_churrasco, $acompanhamento, $confirmado, $pago);
    
    if ($stmt->execute()) {
        header('Location: cadastrar.php?sucesso=1');
        exit;
    }
}

header('Location: cadastrar.php?erro=1');
exit;
?>