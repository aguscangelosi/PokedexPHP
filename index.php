<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Styles/styles.css">
    <title>Poedex | Iniciar Sesión</title>
</head>
<body>
<?php
include ("Layouts/header.php");
?>

    <main>
        <div class="containerMain">
            <h1>Iniciar Sesión</h1>

            <form method="POST" action="auth.php">
                <div class="camposFormulario">
                    <label for="username">Usuario:</label>
                    <input class="inputTexto" type="text" id="username" name="username" placeholder="Ingrese su usuario" required>
                </div>
                <div class="camposFormulario">
                    <label for="password">Contraseña:</label>
                    <input class="inputTexto" type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
                </div>
                <button class="inputSubmit" type="submit">Iniciar Sesión</button>
                <?php
                session_start();
                if (isset($_SESSION['error'])): ?>
                    <p style="color: red;"><?php echo $_SESSION['error']; ?></p>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>
            </form>

        </div>
    </main>
</body>
</html>