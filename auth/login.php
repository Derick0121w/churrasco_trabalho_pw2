<?php 
session_start(); 
if (isset($_SESSION['usuario_id'])) {
    header("Location: ../index.php");
    exit();
}

include '../includes/cabecalho.php';


?>

<div class="login-container">
    <h2>Acesso ao Sistema</h2>
    <?php if (isset($_GET['erro'])){echo "<p style='color: red;'>E-mail ou senha incorretos!</p>";}?>
    <form action="autenticar.php" method="POST">
        <div>
            <label>E-mail:</label><br>
            <input type="email" name="email" required>
        </div><br>
        <div>
            <label>Senha:</label><br>
            <input type="password" name="senha" required>
        </div><br>
        <button type="submit">Entrar</button>
    </form>
</div>

<?php 
include '../includes/rodape.php'; 
?>