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

    $imagen = $_FILES['imagen-pokemon'];
    $imagenNombre = $imagen['name'];
    $imagenTmp = $imagen['tmp_name'];
    $directorioDestino = "../img_pokemon/";


    $rutaFinal = $directorioDestino . $imagenNombre;
    move_uploaded_file($imagenTmp, $rutaFinal);

    echo "Datos ingresados correctamente y archivo subido! <br>";
    $seInicioCorrectamente = true;

} else {
    die("ERROR, falta de datos");
}

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $insersionSql = "UPDATE pokemon 
                     SET numero_identificador = ?, imagen = ?, nombre = ?, tipo = ?, descripcion = ?, informacion = ? 
                     WHERE id = ?";
} else {
$insersionSql = "INSERT INTO pokemon(numero_identificador, imagen, nombre, tipo, descripcion, informacion)
VALUES(?,?,?,?,?,?)";
}

$stmt = $conn->prepare($insersionSql);
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $stmt->bind_param("ssssssi", $numeroIdentficador, $imagenNombre, $nombrePokemon, $tipo, $descripcion, $informacion, $id);
} else {
    $stmt->bind_param("ssssss", $numeroIdentficador, $imagenNombre, $nombrePokemon, $tipo, $descripcion, $informacion);
}
if ($stmt->execute()) {
    echo "Se pudo insertar correctamente el pokemon";
    header('Location: /PokedexPHP/');
} else {
    echo "Error, no se pudo insertar el pokemon";
    session_start();
    $_SESSION["error"] = "No se pudo insertar el pokemon";
}

$stmt->close();
$conn->close();
?>