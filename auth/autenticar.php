<?php
session_start();
require_once '../config/conexao.php';

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$stmt = $conn->prepare("SELECT id, nome, senha FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($usuario = $resultado->fetch_assoc()) {
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];

        // Descobre a pasta raiz dinamicamente
        $caminho_atual = $_SERVER['SCRIPT_NAME'];
        $partes = explode('/', trim($caminho_atual, '/'));
        $pasta_raiz = '/' . $partes[0];

        header("Location: " . $pasta_raiz . "/index.php");
        exit();
    }
}

header("Location: login.php?erro=1");
exit();
?>