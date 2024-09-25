<?php
session_start();

require('../config/Database.php');

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
        header('Location: ../Paginas/login.php');
        return;
    }

//    if($row['rol_id'] == 2){
    $_SESSION['usuario'] = $username;
//    }

    if($row['rol_id'] == 1){
        $_SESSION['admin'] = true;
    }

    header('Location: ../index.php');
    exit();
}

