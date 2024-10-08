<?php

require_once('config/Database.php');

$conn = (new Database)->getConnection();
$querySelect = "SELECT * FROM pokemon";
$search = isset($_GET['pokemon-buscado']) ? $_GET['pokemon-buscado'] : '';
if (!empty($search)) {
    $query = $querySelect . " WHERE nombre LIKE '%$search%' OR tipo LIKE '%$search%' OR nombre LIKE '%$search%'";
} else {
    $query = $querySelect;
}

$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) == 0) {
    $_SESSION['error-busqueda'] = "No se encontraron registros con ese término de búsqueda.";

    // Realizamos una nueva consulta para obtener todos los valores
    $query = $querySelect;
    $result = mysqli_query($conn, $query);
    header('Location: /PokedexPHP/index.php');
} else {
    unset($_SESSION['error-busqueda']);
}

echo '<div class="container-fluid text-center p-3 mt-3 mb-3">';
echo '<table class="table table-hover">';

if (isset($_SESSION["admin"])) {
    echo '<thead><tr><th scope="col">Identificador</th><th scope="col">Imagen</th><th scope="col">Nombre</th><th scope="col">Tipo</th><th scope="col">Descripcion</th><th scope="col">Acciones</th></tr></thead>';
} else {
    echo '<thead><tr><th scope="col">Identificador</th><th scope="col">Imagen</th><th scope="col">Nombre</th><th scope="col">Tipo</th><th scope="col">Descripcion</th></tr></thead>';
}
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tbody>';
    echo '<tr onclick="window.location.href=\'/PokedexPHP/Paginas/vistaDetalle.php?id=' . $row['id'] . '\'">';

    echo '<td class="align-middle">' . $row['numero_identificador'] . '</td>';
    echo '<td class="align-middle">' . '<img src="img_pokemon/' . $row['imagen'] . '" alt="' . $row['nombre'] . '" width="100" height="90">' . '</td>';
    echo '<td class="align-middle">' . $row['nombre'] . '</td>';
    echo '<td class="align-middle">' . '<img src="img_tipo/' . $row['tipo'] . '.png" alt="' . $row['tipo'] . '" width="80" height="20">' . '</td>';
    echo '<td class="align-middle">' . $row['descripcion'] . '</td>';

    if (isset($_SESSION["admin"])) {
        echo '<td><div class="d-flex justify-content-between">
            <form action="Paginas/agregarPokemon.php?id=' . $row['id'] .'" method="post"><input type="hidden" name="pokemon_id" value="' . $row['id'] . '"><button class="btn btn-outline-primary" type="submit">Modificar</button></form>
            <form action="Paginas/borrarPokemon.php?id=' . $row['id'] .'" method="post"><input type="hidden" name="pokemon_id" value="' . $row['id'] . '"><button class="btn btn-outline-danger" type="submit">Baja</button></form>
            </div></td>';
    }

    echo '</tr>';
}
echo '</tbody></table>';
echo '</div>';

// Mostrar el botón para agregar un nuevo Pokémon si es admin
if (isset($_SESSION["admin"])) {
    echo '<div class="d-grid gap-3 w-100 m-3">';
    echo '<button class="btn btn-outline-success" type="submit"><a href="/PokedexPHP/Paginas/agregarPokemon.php">Nuevo Pokemon</a></button>';
    echo '</div>';
}

mysqli_close($conn);
