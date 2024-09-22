<?php
include ("../Layouts/header.php");
?>

<div class="container-fluid">

    <form method="get" action="buscar.php" class="container text-center">

        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-4 mx-auto p-2">

                    <div class="form-floating">
                        <input type="text" class="form-control" id="search" placeholder="Pokémon" required>
                        <label for="floatingInput">Pokémon</label>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-grid gap-2 col-3 mx-auto">
            <button type="submit" class="btn btn-dark">Buscar</button>
        </div>

    </form>

</div>


<?php
include ("../Layouts/footer.php");
?>