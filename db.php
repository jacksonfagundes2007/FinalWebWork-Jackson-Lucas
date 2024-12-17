<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'jogo_bicho';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
