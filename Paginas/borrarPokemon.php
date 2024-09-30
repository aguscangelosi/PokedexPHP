<?php
require_once('../config/Database.php');
$conn = (new Database)->getConnection();

if (isset($_GET['id'])) {
    $query = "DELETE FROM pokemon WHERE id = ?";

    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $_GET['id']);
    $stmt->execute();
    header('Location: /PokedexPHP/');
}