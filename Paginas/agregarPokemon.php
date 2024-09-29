<?php
include("../Shared/header.php");
?>
<?php
require_once('../config/Database.php');
$conn = (new Database)->getConnection();

if (isset($_GET['id'])) {
    $query = "SELECT id, 
                numero_identificador, 
                nombre, 
                tipo, 
                descripcion, 
                informacion 
          FROM pokemon 
          WHERE id = ?";

    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $_GET['id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $pokemon = $result->fetch_assoc();
}

$tiposDisponibles = ['normal', 'planta', 'agua', 'fuego', 'dragon', 'Electrico', 'fantasma', 'psiquico'];

$nombrePokemon = isset($pokemon['nombre']) ? $pokemon['nombre'] : '';
$numeroIdentificador = isset($pokemon['numero_identificador']) ? $pokemon['numero_identificador'] : '';
$tipoPokemon = isset($pokemon['tipo']) ? (array)$pokemon['tipo'] : [];
$descripcionPokemon = isset($pokemon['descripcion']) ? $pokemon['descripcion'] : '';
$informacionPokemon = isset($pokemon['informacion']) ? $pokemon['informacion'] : '';
$imagenPokemon = isset($pokemon['imagen']) ? $pokemon['imagen'] : '';


echo '
<h1 class="fw-bold text-center p-3">Añadir Pokemón</h1>

<form id="agregar-pokemon mt-3" action="../services/logicaAgregarPokemon.php" method="post" enctype="multipart/form-data" class="mb-5">

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-4 mx-auto p-2">

                <div class="form-floating m-2">
                    <input type="text" class="form-control" placeholder="" name="nombre-pokemon" value="' . $nombrePokemon . '" required>
                    <label for="floatingInput">Nombre del Pokémon</label>
                </div>

                <div class="form-floating m-2">
                    <input type="text" class="form-control" name="numero-identficador" placeholder="" value="' . $numeroIdentificador . '" required>
                    <label for="floatingInput">Número de identificación</label>
                </div>
                <div class="m-2">
                    <select class="form-select" multiple aria-label="Multiple select example" name="tipo-pokemon" required>';

foreach ($tiposDisponibles as $tipo) {
    $selected = in_array($tipo, $tipoPokemon) ? 'selected' : '';
    echo '<option value="' . $tipo . '" ' . $selected . '>' . ucfirst($tipo) . '</option>';
}

echo '
      </select>
                </div>

                <div class="form-floating m-2">
                    <textarea class="form-control" placeholder="" name="descripcion-pokemon" required>' . $descripcionPokemon . '</textarea>
                    <label for="floatingTextarea">Descripción del Pokémon</label>
                </div>

                <div class="form-floating m-2">
                    <textarea class="form-control" placeholder="" style="height: 100px" name="informacion-pokemon" required>' . $informacionPokemon . '</textarea>
                    
                    <label for="floatingTextarea2">Información del Pokémon</label>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Imagen del pokémon</label>
                    <input class="form-control" type="file" id="formFile" name="imagen-pokemon" ' . ($imagenPokemon ? '' : 'required') . '>
                    ';

if ($imagenPokemon) {
    echo '<img src="' . $imagenPokemon . '" alt="Imagen del Pokémon" class="img-thumbnail mt-2">';
}

$boton = isset($_GET['id']) ? 'Actualizar' : 'Agregar';
$idHidden = isset($_GET['id']) ? '<input type="hidden" value="' . $_GET['id'] . '" name="id">' : '';
echo '         
          </div>
            </div>
        </div>
    </div>
 
       ' . $idHidden . '
    <div class="d-grid gap-2 col-3 mx-auto">
        <button type="submit" class="btn btn-dark p-3">' . $boton . '</button>
    </div>

</form>';

?>

<?php
include("../Shared/footer.php");
?>
