<?php
session_start(); // Siempre al inicio del script

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validar si las contraseñas coinciden
    if ($password !== $confirm_password) {
        $_SESSION['error'] = 'Las contraseñas no coinciden';
        header("Location: register.php"); // Redirigir al mismo formulario si hay error
        exit();
    }

    header("Location: ../index.php");
    exit();
}


include ("../Layouts/header.php");
?>

    <form action="register.php" method="POST">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-4 mx-auto p-2">
                    <div class="form-floating m-2">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Usuario" required>
                        <label for="floatingInput">Usuario</label>
                    </div>

                    <div class="form-floating m-2">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electronico" required>
                        <label for="floatingInput">Email</label>
                    </div>

                    <div class="form-floating m-2">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                        <label for="floatingInput">Contraseña</label>
                    </div>

                    <div class="form-floating m-2">
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Repite la contraseña" required>
                        <label for="floatingInput">Repite la contraseña</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 col-3 mx-auto">
            <button type="submit" class="btn btn-dark p-3">Registrarse</button>
        </div>

        <?php
        if (isset($_SESSION['error'])) {
            echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }
        ?>
    </form>

<?php include ("../Layouts/footer.php"); ?>