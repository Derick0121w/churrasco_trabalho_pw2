<?php
require_once '../includes/verificar_login.php';
require_once '../config/conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM participantes WHERE id = $id";
$resultado = mysqli_query($conn, $sql);
$p = mysqli_fetch_assoc($resultado);

require_once '../includes/cabecalho.php';
?>

<h2>Editar Participante</h2>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $p['id'] ?>">
    
    <label>Nome:</label><br>
    <input type="text" name="nome" value="<?= $p['nome'] ?>" required><br>

    <label>Turma:</label><br>
    <input type="text" name="turma" value="<?= $p['turma'] ?>" required><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone" value="<?= $p['telefone'] ?>"><br>

    <label>Tipo de Churrasco:</label><br>
    <select name="tipo_churrasco">
        <option value="Tradicional" <?= $p['tipo_churrasco'] == 'Tradicional' ? 'selected' : '' ?>>Tradicional</option>
        <option value="Vegetariano" <?= $p['tipo_churrasco'] == 'Vegetariano' ? 'selected' : '' ?>>Vegetariano</option>
    </select><br>

    <label>Acompanhamento:</label><br>
    <input type="text" name="acompanhamento" value="<?= $p['acompanhamento'] ?>"><br>

    <label>Presença:</label><br>
    <select name="confirmado">
        <option value="1" <?= $p['confirmado'] ? 'selected' : '' ?>>Confirmada</option>
        <option value="0" <?= !$p['confirmado'] ? 'selected' : '' ?>>Não confirmada</option>
    </select><br>

    <label>Pagamento:</label><br>
    <select name="pago">
        <option value="1" <?= $p['pago'] ? 'selected' : '' ?>>Pago</option>
        <option value="0" <?= !$p['pago'] ? 'selected' : '' ?>>Pendente</option>
    </select><br>

    <button type="submit">Salvar Alterações</button>
</form>

<?php 
require_once '../includes/rodape.php'; 
?>