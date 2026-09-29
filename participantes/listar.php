<?php
require_once '../includes/verificar_login.php';
require_once '../config/conexao.php';

$busca = isset($_GET['busca']) ? trim($_GET['busca']) : '';

if ($busca !== '') {
    $stmt = $conn->prepare("SELECT * FROM participantes WHERE nome LIKE ?");
    $param_busca = "%" . $busca . "%";
    $stmt->bind_param("s", $param_busca);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else {
    $resultado = $conn->query("SELECT * FROM participantes");
}

include '../includes/cabecalho.php';
?>

<h2>Lista de Participantes</h2>

<form method="GET" action="listar.php">
    <input type="text" name="busca" value="<?php echo htmlspecialchars($busca); ?>" placeholder="Buscar por nome">
    <button type="submit">Pesquisar</button>
</form><br>

<table>
    <tr>
        <th>Nome</th>
        <th>Turma</th>
        <th>Tipo</th>
        <th>Presença</th>
        <th>Pagamento</th>
        <th>Situação</th>
        <th>Ações</th>
    </tr>

<?php
while ($p = $resultado->fetch_assoc()) {
    if ($p['confirmado'] == 1 && $p['pago'] == 1) {
        $situacao = "INSCRIÇÃO REGULARIZADA";
    } elseif ($p['confirmado'] == 1 && $p['pago'] == 0) {
        $situacao = "PAGAMENTO PENDENTE";
    } else {
        $situacao = "AGUARDANDO CONFIRMAÇÃO";
    }

    $confirmado_texto = $p['confirmado'] ? 'Confirmado' : 'Não confirmada';
    $pago_texto = $p['pago'] ? 'Pago' : 'Pendente';

    echo "<tr>";
    echo "<td>" . htmlspecialchars($p['nome']) . "</td>";
    echo "<td>" . htmlspecialchars($p['turma']) . "</td>";
    echo "<td>" . htmlspecialchars($p['tipo_churrasco']) . "</td>";
    echo "<td>" . $confirmado_texto . "</td>";
    echo "<td>" . $pago_texto . "</td>";
    echo "<td><b>" . $situacao . "</b></td>";
    echo "<td>";
    echo "<a href='editar.php?id=" . (int)$p['id'] . "'>Editar</a> | ";
    echo "<a href='excluir.php?id=" . (int)$p['id'] . "' onclick=\"return confirm('Deseja realmente excluir?');\">Excluir</a>";
    echo "</td>";
    echo "</tr>";
}
?>
</table>

<?php 
include '../includes/rodape.php'; 
?>