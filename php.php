<?php
session_start();

$host = "localhost";
$user = "root";
$pass = ""; // XAMPP padrão não tem senha
$db   = "ecommerce";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>