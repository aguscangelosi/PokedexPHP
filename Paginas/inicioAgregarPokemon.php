<?php
    require_once('../config/Database.php');
    $conn = (new Database)->getConnection();

    $seInicioCorrectamente = false;

    if(isset($_POST["nombre-pokemon"]) && isset($_POST["numero-identficador"])
        && isset($_POST["tipo-pokemon"]) && isset($_POST["descripcion-pokemon"]) && isset($_POST["informacion-pokemon"])){
        $nombrePokemon = $_POST["nombre-pokemon"];
        $numeroIdentficador = $_POST["numero-identficador"];
        $tipo = $_POST["tipo-pokemon"];
        $descripcion = $_POST["descripcion-pokemon"];
        $informacion = $_POST["informacion-pokemon"];
        echo "Datos ingresados correctamente";
        $seInicioCorrectamente = true;
    }else{
        die("ERROR, falta de datos");
    }
/*
    function transformarTipoDePokemonEnImagen(){
        switch ($tipo) {
            case agua:
                return "imagen";
        }
    }

    INSERT INTO pokemon(numero_identificador, imagen, nombre, tipo, descripcion, informacion)
    VALUES($numeroIdentficador, $tipo, $nombrePokemon, $tipo, $descripcion, $informacion);
*/
?>