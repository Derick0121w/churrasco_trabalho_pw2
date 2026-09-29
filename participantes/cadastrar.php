<?php require_once '../includes/verificar_login.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Participante</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <script src="../js/script.js" defer></script>
</head>
<body>
    <h2>Cadastrar Participante</h2>
    <form id="formCadastro" action="salvar.php" method="POST" onsubmit="return validarCadastro()">
        <div>
            <label>Nome:</label><br>
            <input type="text" id="nome" name="nome">
        </div>
        <div>
            <label>Turma:</label><br>
            <input type="text" id="turma" name="turma">
        </div>
        <div>
            <label>Telefone:</label><br>
            <input type="text" id="telefone" name="telefone">
        </div>
        <div>
            <label>Tipo de Churrasco:</label><br>
            <select id="tipo_churrasco" name="tipo_churrasco">
                <option value="">Selecione...</option>
                <option value="Tradicional">Tradicional</option>
                <option value="Vegetariano">Vegetariano</option>
            </select>
        </div>
        <div>
            <label>Acompanhamento:</label><br>
            <input type="text" name="acompanhamento">
        </div>
        <div>
            <label>Presença Confirmada?</label><br>
            <select name="confirmado">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div>
            <label>Pagamento Realizado?</label><br>
            <select name="pago">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <br>
        <button type="submit">Salvar Inscrição</button>
    </form>
    <br>
    <a href="../index.php">Voltar</a>
</body>
</html>