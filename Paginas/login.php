<?php
include("../Shared/header.php");
?>

    <h1 class="text-center fw-bold">Iniciar Sesión</h1>

    <form action="../services/auth.php" method="POST" class="mb-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-4 mx-auto p-2">
                    <div class="form-floating m-2">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Usuario" required>
                        <label for="floatingInput">Usuario</label>
                    </div>

                    <div class="form-floating m-2">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                        <label for="floatingInput">Contraseña</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 col-3 mx-auto">
            <button type="submit" class="btn btn-dark p-3">Iniciar sesión</button>
        </div>

        <?php

            if (isset($_SESSION['error'])): ?>
                <p style="color: red;"><?php echo $_SESSION['error']; ?></p>
                <?php unset($_SESSION['error']); ?>

        <?php endif; ?>


    </form>

<?php
include("../Shared/footer.php");
?>