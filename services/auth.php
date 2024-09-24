<?php
session_start();

require('./config/Database.php');

$conn = (new Database)->getConnection();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM usuario WHERE username = ? AND password = ?");
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$row = $result->fetch_assoc()) {
        $_SESSION['error'] = "Usuario o contraseña incorrecta.";
        header('Location: login.php');
        return;
    }

    header('Location: tabla_pokemons.php');
}
?>
