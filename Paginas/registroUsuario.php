<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex | Registro</title>
    <link rel="stylesheet" href="../Styles/registro.css"> <!-- Enlace al archivo CSS -->
</head>
<body>
<?php
include ("../Layouts/header.php");
?>

<main>
    <div class="containerMain">
        <h1>Registrarse</h1>

        <!-- Formulario de registro -->
        <form action="registro.php" method="POST">
            <div class="camposFormulario">
                <label for="username">Usuario:</label>
                <input type="text" class="inputTexto" id="username" name="username" placeholder="Ingrese su usuario" required>
            </div>

            <div class="camposFormulario">
                <label for="password">Contraseña:</label>
                <input type="password" class="inputTexto" id="password" name="password" placeholder="Ingrese su contraseña" required>
            </div>

            <div class="camposFormulario">
                <label for="confirm_password">Confirmar Contraseña:</label>
                <input type="password" class="inputTexto" id="confirm_password" name="confirm_password" placeholder="Confirme su contraseña" required>
            </div>

            <div class="camposFormulario">
                <label for="mail">Ingrese su correo electronico</label>
                <input type="email" class="inputTexto" id="email" name="email" placeholder="Ingrese su correo electronico">
            </div>

            <input type="submit" class="inputSubmit" value="Registrarse">
        </form>

        <a href="../index.php">Ya tienes cuenta? Inicia sesión aquí</a>
    </div>
</main>
</body>
</html>