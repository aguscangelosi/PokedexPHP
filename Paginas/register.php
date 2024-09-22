<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        $_SESSION['error'] = "Todos los campos son obligatorios.";
        header('Location: register.php');
        exit();
    }

    if ($password != $confirmPassword) {
        $_SESSION['error'] = "Las contraseñas no coinciden.";
        header('Location: register.php');
        exit();
    }

    // TODO: validaciones que deberian hacerce con la base de datos

//    if ($email  && $username existen en la base de datos){
//        $_SESSION['error'] = "el email ya se encuentra registrado" || "el usuario ya se encuentra registrado";
//
//        header('Location: register.php');
//        exit();
//    }

    // TODO: guardar los datos en la base de datos si todo esta bien



}

?>