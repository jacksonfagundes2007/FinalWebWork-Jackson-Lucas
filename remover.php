<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM apostas WHERE id = $id");
    header("Location: listar.php");
    exit();
}
?>
