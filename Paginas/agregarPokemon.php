<?php
include("../Shared/header.php");
?>

    <h1 class="fw-bold text-center p-3">Añadir Pokemón</h1>

    <form id="agregar-pokemon mt-3" action="../services/logicaAgregarPokemon.php" method="post" enctype="multipart/form-data" class="mb-5">

        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-4 mx-auto p-2">

                    <div class="form-floating m-2">
                        <input type="text" class="form-control" placeholder="" name="nombre-pokemon" required>
                        <label for="floatingInput">Nombre del Pokémon</label>
                    </div>

                    <div class="form-floating m-2">
                        <input type="number" class="form-control" name="numero-identficador" placeholder="" required>
                        <label for="floatingInput">Número de identificación</label>
                    </div>

                    <div class="m-2">
                        <select class="form-select" multiple aria-label="Multiple select example" name="tipo-pokemon" required>
                            <option value="normal">Normal</option>
                            <option value="agua">Planta</option>
                            <option value="agua">Agua</option>
                            <option value="fuego">Fuego</option>
                            <option value="dragon">Dragón</option>
                            <option value="electrico">Eléctrico</option>
                            <option value="fantasma">Fantasma</option>
                            <option value="psiquico">Psíquico</option>
                        </select>
                    </div>

                    <div class="form-floating m-2">
                        <textarea class="form-control" placeholder="" name="descripcion-pokemon" required></textarea>
                        <label for="floatingTextarea">Descripción del Pokémon</label>
                    </div>

                    <div class="form-floating m-2">
                        <textarea class="form-control" placeholder="" style="height: 100px" name="informacion-pokemon" required></textarea>
                        <label for="floatingTextarea2">Información del Pokémon</label>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Imagen del pokémon</label>
                        <input class="form-control" type="file" id="formFile" name="imagen-pokemon" required>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-grid gap-2 col-3 mx-auto">
            <button type="submit" class="btn btn-dark p-3">Agregar</button>
        </div>

    </form>

<?php
include("../Shared/footer.php");
?>