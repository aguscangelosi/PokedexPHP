<?php
include ("../Layouts/header.php");
session_start();
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
                            <input type="email" class="form-control" id="email" name="email" name="username" placeholder="Ingrese su correo electronico" required>
                            <label for="floatingInput">Email</label>
                        </div>

                        <div class="form-floating m-2">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                            <label for="floatingInput">Contraseña</label>
                        </div>

                        <div class="form-floating m-2">
                            <input type="text" class="form-control" id="confirm_password" name="confirm_password" placeholder="Repite la contraseña" required>
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

        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-4 mx-auto p-2">

                    <button type="button" class="btn btn-secondary justify-content-center m-2" href="../index.php"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        ¿Ya tienes cuenta? Inicia sesión aquí
                    </button>

                </div>
            </div>
        </div>


<?php
include ("../Layouts/footer.php");
?>