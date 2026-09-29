<?php
require_once 'includes/verificar_login.php';
require_once 'config/conexao.php';

$total = $conn->query("SELECT COUNT(*) as qtd FROM participantes")->fetch_assoc()['qtd'] ?? 0;
$confirmados = $conn->query("SELECT COUNT(*) as qtd FROM participantes WHERE confirmado = 1")->fetch_assoc()['qtd'] ?? 0;
$nao_confirmados = $conn->query("SELECT COUNT(*) as qtd FROM participantes WHERE confirmado = 0")->fetch_assoc()['qtd'] ?? 0;
$pagos = $conn->query("SELECT COUNT(*) as qtd FROM participantes WHERE pago = 1")->fetch_assoc()['qtd'] ?? 0;
$pendentes = $conn->query("SELECT COUNT(*) as qtd FROM participantes WHERE pago = 0")->fetch_assoc()['qtd'] ?? 0;
$tradicional = $conn->query("SELECT COUNT(*) as qtd FROM participantes WHERE tipo_churrasco = 'Tradicional'")->fetch_assoc()['qtd'] ?? 0;
$vegetariano = $conn->query("SELECT COUNT(*) as qtd FROM participantes WHERE tipo_churrasco = 'Vegetariano'")->fetch_assoc()['qtd'] ?? 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Churrasco Farroupilha - Início</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <header>
        <h1>Churrasco Farroupilha</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="participantes/cadastrar.php">Nova Inscrição</a>
            <a href="participantes/listar.php">Participantes</a>
            <a href="auth/logout.php">Sair</a>
        </nav>
    </header>

    <h1>CHURRASCO DA SEMANA FARROUPILHA</h1>
    <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome'] ?? 'Usuário'); ?>! | <a href="auth/logout.php">Sair</a></p>

    <h2>Resumo do Churrasco</h2>
    <ul>
        <li>Total de inscritos: <?php echo $total; ?></li>
        <li>Confirmados: <?php echo $confirmados; ?></li>
        <li>Não confirmados: <?php echo $nao_confirmados; ?></li>
        <li>Pagamentos realizados: <?php echo $pagos; ?></li>
        <li>Pagamentos pendentes: <?php echo $pendentes; ?></li>
        <li>Churrasco tradicional: <?php echo $tradicional; ?></li>
        <li>Vegetariano: <?php echo $vegetariano; ?></li>
    </ul>

<?php include 'includes/rodape.php'; ?>