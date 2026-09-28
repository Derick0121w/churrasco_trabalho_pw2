<?php
if(substr(strrchr($_SERVER['SCRIPT_NAME'], '/'), 1) !== "login.php"){
    include '../includes/cabecalho.php';
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Churrasco Farroupilha</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <script src="../js/script.js" defer></script>
</head>
<body>
    <header>
        <h1>Churrasco Farroupilha</h1>
            <nav>
                <a href="../index.php">Início</a><a href="../participantes/cadastrar.php">Nova Inscrição</a>
                <a href="../participantes/listar.php">Participantes</a>
                <a href="../auth/logout.php">Sair</a>
            </nav>
    </header>