<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/PokedexPHP/config/Database.php');
$conn = (new Database)->getConnection();

$seInicioCorrectamente = false;

if (isset($_POST["nombre-pokemon"]) && isset($_POST["numero-identficador"])
    && isset($_POST["tipo-pokemon"]) && isset($_POST["descripcion-pokemon"]) && isset($_POST["informacion-pokemon"]) && isset($_FILES['imagen-pokemon'])) {

    $nombrePokemon = $_POST["nombre-pokemon"];
    $numeroIdentficador = $_POST["numero-identficador"];
    $tipo = $_POST["tipo-pokemon"];
    $descripcion = $_POST["descripcion-pokemon"];
    $informacion = $_POST["informacion-pokemon"];

    // Manejo de la imagen
    $imagen = $_FILES['imagen-pokemon'];
    $imagenNombre = $imagen['name'];
    $imagenTmp = $imagen['tmp_name'];
    $directorioDestino = "../img_pokemon/";

    // Mover la imagen al directorio
    $rutaFinal = $directorioDestino . $imagenNombre;
    move_uploaded_file($imagenTmp, $rutaFinal);

    echo "Datos ingresados correctamente y archivo subido! <br>";
    $seInicioCorrectamente = true;

} else {
    die("ERROR, falta de datos");
}

// Inserción en la base de datos
$insersionSql = "INSERT INTO pokemon(numero_identificador, imagen, nombre, tipo, descripcion, informacion)
VALUES(?,?,?,?,?,?)";

$stmt = $conn->prepare($insersionSql);
$stmt->bind_param("isssss", $numeroIdentficador, $rutaFinal, $nombrePokemon, $tipo, $descripcion, $informacion);
if ($stmt->execute()) {
    echo "Se pudo insertar correctamente el pokemon";
} else {
    echo "Error, no se pudo insertar el pokemon";
}

$stmt->close();
$conn->close();
?>