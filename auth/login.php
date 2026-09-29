<?php 
session_start(); 

if (isset($_SESSION['usuario_id'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao Sistema - Churrasco Farroupilha</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="login-container">
    <h2>Acesso ao Sistema</h2>

    <?php if (isset($_GET['erro'])): ?>
        <p style="color: red; font-weight: bold;">E-mail ou senha incorretos!</p>
    <?php endif; ?>
    
    <form action="autenticar.php" method="POST">
        <div>
            <label>E-mail:</label><br>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Senha:</label><br>
            <input type="password" name="senha" required>
        </div>
        <button type="submit">Entrar</button>
    </form>
</div>

<?php include '../includes/rodape.php'; ?>