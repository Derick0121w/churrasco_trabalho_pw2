<?php
require_once 'includes/verificar_login.php';
require_once 'config/conexao.php';

$total = $conn->query("SELECT COUNT(*) as qtd FROM participantes")->fetch_assoc()['qtd'];
$confirmados = $conn->query("SELECT COUNT(*) as qtd FROM participantes WHERE confirmado = 1")->fetch_assoc()['qtd'];
$nao_confirmados = $conn->query("SELECT COUNT(*) as qtd FROM participantes WHERE confirmado = 0")->fetch_assoc()['qtd'];
$pagos = $conn->query("SELECT COUNT(*) as qtd FROM participantes WHERE pago = 1")->fetch_assoc()['qtd'];
$pendentes = $conn->query("SELECT COUNT(*) as qtd FROM participantes WHERE pago = 0")->fetch_assoc()['qtd'];
$tradicional = $conn->query("SELECT COUNT(*) as qtd FROM participantes WHERE tipo_churrasco = 'Tradicional'")->fetch_assoc()['qtd'];
$vegetariano = $conn->query("SELECT COUNT(*) as qtd FROM participantes WHERE tipo_churrasco = 'Vegetariano'")->fetch_assoc()['qtd'];

include '../includes/cabecalho.php';
?>

<h1>CHURRASCO DA SEMANA FARROUPILHA</h1>
<p>Bem-vindo, <?php echo $_SESSION['usuario_nome']; ?>! | <a href="auth/logout.php">Sair</a></p>

<nav>
    <a href="participantes/cadastrar.php">Nova Inscrição</a> | 
    <a href="participantes/listar.php">Participantes</a>
</nav>

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

<?php 
include '../includes/rodape.php'; 
?>