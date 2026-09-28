<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario_id'])) {

    $arquivo = substr(strrchr($_SERVER['SCRIPT_NAME'], '/'), 1);
    

    if ($arquivo === 'index.php') {
        header("Location: ./auth/login.php");
    } else {
        header("Location: ../auth/login.php");
    }
    exit();
}
?>