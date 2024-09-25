<?php
include("../Shared/header.php");
require_once('../config/Database.php');
$conn = (new Database)->getConnection();
$pokemonBuscado = "";
if(isset($_GET['pokemon-buscado'])){
    $pokemonBuscado = $_GET['pokemon-buscado'];
}
//Si no se busca nada, esto debe aparecer por default
$queryDefault = "SELECT * FROM pokemon";

//Si se busca por nombre o por tipo debe aparecer esto
$query = "SELECT * FROM pokemon WHERE nombre LIKE '%$pokemonBuscado%' OR tipo LIKE '%$pokemonBuscado%'";

//Si se conecto la base de datos y se realizo la consulta da true
$sePudo = mysqli_query($conn, $query);

if($sePudo){
    $resultado = mysqli_fetch_assoc($sePudo);
    foreach ($resultado as $pokemonActual) {
        echo $pokemonActual['nombre'];
        echo $pokemonActual['tipo'];
        echo $pokemonActual['descripcion'];
        echo $pokemonActual['imagen'];
        
    }
}
/*
while(){

}
*/
echo "<br>" . $resultado['nombre'];