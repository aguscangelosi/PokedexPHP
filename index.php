<?php
include("./Shared/header.php");
?>

<div class="container-fluid">

    <h1 class="text-center fw-bold">¿Quién es ese Pokémon?</h1>

    <form method="GET" class="container text-center" role="search">

        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-4 mx-auto p-2">

                    <div class="form-floating">
                        <input type="search" class="form-control" id="search" placeholder="Pokémon" name="pokemon-buscado">
                        <label for="floatingInput">Búsqueda</label>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-grid gap-2 col-3 mx-auto">
            <button type="submit" class="btn btn-dark p-3">Buscar</button>
        </div>

        <?php
        if (isset($_SESSION['error-busqueda'])): ?>
            <p style="color: red;"><?php echo $_SESSION['error-busqueda']; ?></p>
            <?php unset($_SESSION['error-busqueda']); ?>

        <?php endif; ?>
    </form>

    <?php
    include_once "./Shared/tabla_pokemons.php";
    ?>

</div>


<?php
//var_dump($_SESSION);
include("./Shared/footer.php");
?>