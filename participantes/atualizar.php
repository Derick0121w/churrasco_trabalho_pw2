<?php
require_once '../includes/verificar_login.php';
require_once '../config/conexao.php';

$id = (int)($_POST['id'] ?? 0);
$nome = trim($_POST['nome'] ?? '');
$turma = trim($_POST['turma'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');
$tipo_churrasco = trim($_POST['tipo_churrasco'] ?? '');
$acompanhamento = trim($_POST['acompanhamento'] ?? '');
$confirmado = (int)($_POST['confirmado'] ?? 0);
$pago = (int)($_POST['pago'] ?? 0);

if ($id > 0 && !empty($nome) && !empty($turma)) {
    $stmt = $conn->prepare("UPDATE participantes SET nome = ?, turma = ?, telefone = ?, tipo_churrasco = ?, acompanhamento = ?, confirmado = ?, pago = ? WHERE id = ?");
    $stmt->bind_param("sssssiii", $nome, $turma, $telefone, $tipo_churrasco, $acompanhamento, $confirmado, $pago, $id);
    $stmt->execute();
}

header('Location: listar.php');
exit;
?>