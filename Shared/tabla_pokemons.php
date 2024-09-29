<?php

require_once('config/Database.php');

$conn = (new Database)->getConnection();


$query = "SELECT id, 
                numero_identificador, 
                imagen, 
                nombre, 
                tipo, 
                descripcion  FROM pokemon";

$result = mysqli_query($conn, $query);
$search = isset($_GET['pokemon-buscado']) ? $_GET['pokemon-buscado'] : '';
$querySelect = "SELECT * FROM pokemon";
$query = "";

if (!empty($search)) {
    $query = $querySelect . " WHERE nombre LIKE '%$search%' OR tipo LIKE '%$search%' OR nombre LIKE '%$search%'";
} else {
    $query = $querySelect;
}
$result = mysqli_query($conn, $query);

$noexiste = mysqli_num_rows($result) == 0;

if ($noexiste) {
    $result = mysqli_query($conn, $querySelect);
}
echo '<div class="container-fluid">';
echo '<table class="table table-hover">';

if (isset($_SESSION["admin"])) {
    echo '<thead><tr><th scope="col">Identificador</th><th scope="col">Imagen</th><th scope="col">Nombre</th><th scope="col">Tipo</th><th scope="col">Descripcion</th><th scope="col">Acciones</th></tr></thead>';
} else {
    echo '<thead><tr><th scope="col">Identificador</th><th scope="col">Imagen</th><th scope="col">Nombre</th><th scope="col">Tipo</th><th scope="col">Descripcion</th></tr></thead>';
}
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tbody>';
    echo '<tr>';

    echo '<td>' . $row['numero_identificador'] . '</td>';
    echo '<td>' . '<img src="img_pokemon/' . $row['imagen'] . '" alt="' . $row['nombre'] . '" width="100" height="90">' . '</td>';
    echo '<td>' . $row['nombre'] . '</td>';
    echo '<td>' . '<img src="img_tipo/' . $row['tipo'] . '.png" alt="' . $row['tipo'] . '" width="80" height="20">' . '</td>';
    echo '<td>' . $row['descripcion'] . '</td>';

    if (isset($_SESSION["admin"])) {
        echo '<td><div class="d-flex justify-content-between">
            <form action="Paginas/agregarPokemon.php?id=' . $row['id'] .'" method="post"><input type="hidden" name="pokemon_id" value="' . $row['id'] . '"><button class="btn btn-outline-primary" type="submit">Modificar</button></form>
            <form action="eliminar_pokemon . php" method="post"><input type="hidden" name="pokemon_id" value="' . $row['id'] . '"><button class="btn btn-outline-danger" type="submit">Baja</button></form>
            </div></td>';
    }

    echo '</tr>'; // Cerrar el <tr>
}
echo '</tbody></table>';
echo '</div>';

if (isset($_SESSION["admin"])) {

    echo '<div class="d-grid gap-3 w-100 m-3">';
    echo '<button class="btn btn-outline-success " type="submit"><a href="/PokedexPHP/Paginas/agregarPokemon.php">Nuevo Pokemon</a></button>';
    echo '</div>';

}

mysqli_close($conn);