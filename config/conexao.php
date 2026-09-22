<?php
$host = "localhost";
$user = "root";
$password = "";
$banco = "churrasco";
$conn = new mysqli($host, $user, $password, $banco);

if ($conn -> connect_error) {
    die("Falha: " .  $conn->connect_error);
}