<?php
include("../Shared/header.php");
require_once('../config/Database.php');
$conn = (new Database)->getConnection();
$pokemonBuscado = "";
if (isset($_GET['pokemon-buscado'])) {
    $pokemonBuscado = $_GET['pokemon-buscado'];
}

//Si se busca por nombre o por tipo debe aparecer esto
$query = "SELECT * FROM pokemon WHERE nombre LIKE '%$pokemonBuscado%' OR tipo LIKE '%$pokemonBuscado%'";
$count = "SELECT count(*) FROM pokemon WHERE nombre LIKE '%$pokemonBuscado%' OR tipo LIKE '%$pokemonBuscado%'";

//Si se conecto la base de datos y se realizo la consulta da true


$sePudo = mysqli_query($conn, $query);

if ($sePudo) {
    $resultado = mysqli_fetch_assoc($sePudo);
    if ($count !== 0) {

        foreach ($resultado as $pokemonActual) {
            echo $pokemonActual['nombre'];
            echo $pokemonActual['tipo'];
            echo $pokemonActual['descripcion'];
            echo $pokemonActual['imagen'];
        }
        echo 'true';
        header("Location: /PokedexPHP/services/buscar.php");
    } else {
        header("Location: /PokedexPHP/Paginas/agregarPokemon.php");
        echo "No se encontraron resultados";
    }
}

echo "<br>" . $resultado['nombre'];