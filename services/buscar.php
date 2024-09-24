<?php
include("../Shared/header.php");
require_once('../config/Database.php');
$conn = (new Database)->getConnection();
$pokemonBuscado = "";
if(isset($_GET['pokemon-buscado'])){
    $pokemonBuscado = $_GET['pokemon-buscado'];
}

$query = "SELECT * FROM pokemon WHERE nombre LIKE '%$pokemonBuscado%'";

$sePudo = mysqli_query($conn, $query);
if($sePudo){
    $resultado = mysqli_fetch_assoc($sePudo);
}
echo "<br>" . $resultado['nombre'];