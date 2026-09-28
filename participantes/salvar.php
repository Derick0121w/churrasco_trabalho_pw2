<?php
require_once '../includes/verificar_login.php';
require_once '../config/conexao.php';

$nome = $_POST['nome'];
$turma = $_POST['turma'];
$telefone = $_POST['telefone'];
$tipo_churrasco = $_POST['tipo_churrasco'];
$acompanhamento = $_POST['acompanhamento'];
$confirmado = $_POST['confirmado'];
$pago = $_POST['pago'];

if ($nome != "" && $turma != "" && $tipo_churrasco != "") {
    $sql = "INSERT INTO participantes (nome, turma, telefone, tipo_churrasco, acompanhamento, confirmado, pago) 
            VALUES ('$nome', '$turma', '$telefone', '$tipo_churrasco', '$acompanhamento', '$confirmado', '$pago')";
    
    mysqli_query($conn, $sql);
    header('Location: cadastrar.php?sucesso=1');
    exit;
}

header('Location: cadastrar.php?erro=1');
exit;
?>