<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario_id'])) {

    $raiz = dirname($_SERVER['SCRIPT_NAME']);
    

    if (basename($raiz) === 'participantes' || basename($raiz) === 'auth') {
        header("Location: ../auth/login.php");
    } else {
        header("Location: auth/login.php");
    }
    exit();
}
?>