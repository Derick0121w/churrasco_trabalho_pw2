<?php
require_once '../includes/verificar_login.php';
require_once '../config/conexao.php';

$nome = $_POST['nome'] ?? '';
$turma = $_POST['turma'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$tipo_churrasco = $_POST['tipo_churrasco'] ?? '';
$acompanhamento = $_POST['acompanhamento'] ?? '';
$confirmado = $_POST['confirmado'] ?? 0;
$pago = $_POST['pago'] ?? 0;

$stmt = $conn->prepare("INSERT INTO participantes (nome, turma, telefone, tipo_churrasco, acompanhamento, confirmado, pago) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssii", $nome, $turma, $telefone, $tipo_churrasco, $acompanhamento, $confirmado, $pago);

if ($stmt->execute()) {
    echo "<script>alert('Participante cadastrado com sucesso.'); window.location.href='../index.php';</script>";
} else {
    echo "Erro: " . $conn->error;
}
?>