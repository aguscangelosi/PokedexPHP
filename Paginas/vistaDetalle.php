<?php
include("../Shared/header.php");
require_once('../config/Database.php');
$conn = (new Database)->getConnection();
?>

<?php

if (isset($_GET["id"])) {
    $query = "SELECT id, 
                numero_identificador, 
                imagen,
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

    echo '<div class="container">

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-4 p-4">
                <img src="/PokedexPHP/img_pokemon/' . $pokemon['imagen'] . '" alt="' . $pokemon['nombre'] . '" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8 p-3">
                <div class="card-body">
                    <h2 class="card-title text-uppercase fw-bold">' . $pokemon['nombre'] . '</h2>
                    <p class="card-text"><small class="text-body-secondary">
                            <img src="/PokedexPHP/img_tipo/' . $pokemon['tipo'] . '.png' . '" class="img-fluid rounded-start" alt="tipo">
                    </small></p>
                    <h5 class="fs-5 fw-medium">Descripción</h5>
                    <p class="card-text fw-normal">' . $pokemon['descripcion'] . '</p>
                    <h5 class="fs-5 fw-medium">Información</h5>
                    <p class="card-text fw-normal">' . $pokemon['informacion'] . '</p>
                </div>
            </div>
        </div>
    </div>

</div>';
}
?>


<?php
include("../Shared/footer.php");
?>
