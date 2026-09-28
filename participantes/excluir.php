<?php
require_once '../includes/verificar_login.php';
require_once '../config/conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM participantes WHERE id = $id";

mysqli_query($conn, $sql);
header('Location: listar.php');
exit;
?>