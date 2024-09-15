<?php

$config = parse_ini_file('configBD.ini');

$conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = "SELECT id, 
                numero_identificador, 
                imagen, 
                nombre, 
                tipo, 
                descripcion  FROM pokemon";
$result = mysqli_query($conn, $query);

echo '<div class="container-fluid">';
echo '<table class="table table-hover">';

if (isset($_SESSION["usuario"])) {
    echo '<thead><tr><th scope="col">Identificador</th><th scope="col">Imagen</th><th scope="col">Nombre</th><th scope="col">Tipo</th><th scope="col">Descripcion</th><th scope="col">Acciones</th></tr></thead>';
} else {
    echo '<thead><tr><th scope="col">Identificador</th><th scope="col">Imagen</th><th scope="col">Nombre</th><th scope="col">Tipo</th><th scope="col">Descripcion</th></tr></thead>';
}

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tbody>';

    echo '<td>' . $row['numero_identificador'] . '</td>';
    echo '<td>' . '<img src="img_pokemon/' . $row['imagen'] . '.png" alt="' . $row['imagen'] . '" width="100" height="90">' . '</td>';
    echo '<td>' . $row['nombre'] . '</td>';
    echo '<td>' . '<img src="img_tipo/' . $row['tipo'] . '.png" alt="' . $row['tipo'] . '" width="80" height="20">' . '</td>';
    echo '<td>' . $row['descripcion'] . '</td>';

    if (isset($_SESSION["usuario"])) {
        echo '<td><div class="d-flex justify-content-between">
            <form action="modificar_pokemon.php" method="post"><input type="hidden" name="pokemon_id" value="' . $row['id'] . '"><button class="btn btn-outline-primary" type="submit">Modificar</button></form>
            <form action="eliminar_pokemon.php" method="post"><input type="hidden" name="pokemon_id" value="' . $row['id'] . '"><button class="btn btn-outline-danger" type="submit">Baja</button></form>
            </div></td>';
    }

    echo '</tr>';
}
echo '</tbody></table>';
echo '</div>';

if (isset($_SESSION["usuario"])) {

    echo '<form class="d-flex justify-content-center" role="search" action="#" method="post">';
    echo '<div class="d-grid gap-3 w-100 m-3">';
    echo '<button class="btn btn-outline-success " type="submit">Nuevo Pokemon</button>';
    echo '</div>';
    echo '</form>';

}


mysqli_close($conn);