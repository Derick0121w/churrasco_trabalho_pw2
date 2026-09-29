<?php 
session_start(); 
if (isset($_SESSION['usuario_id'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Churrasco Semana Farroupilha</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="login-container">
        <h2>Acesso ao Sistema</h2>
        <?php if (isset($_GET['erro'])): ?>
            <p style="color: red;">E-mail ou senha incorretos!</p>
        <?php endif; ?>
        <form action="autenticar.php" method="POST">
            <div>
                <label>E-mail:</label><br>
                <input type="email" name="email" required>
            </div>
            <br>
            <div>
                <label>Senha:</label><br>
                <input type="password" name="senha" required>
            </div>
            <br>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>