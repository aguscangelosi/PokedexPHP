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
        echo "Datos ingresados correctamente! <br>";
        $seInicioCorrectamente = true;

    }else{
        die("ERROR, falta de datos");
    }

    function transformarTipoDePokemonEnImagen(){
        $imagenElegida = "";
        $tipo = $_POST["tipo-pokemon"];
        switch ($tipo) {
            case "agua":
                $imagenElegida = "../img_tipo/Agua.png";
                break;
            case "dragon":
                $imagenElegida = "../img_tipo/Dragon.png";
                break;
            case "electrico":
                $imagenElegida = "../img_tipo/Electrico.png";
                break;
            case "fantasma":
                $imagenElegida = "../img_tipo/Fantasma.png";
                break;
            case "fuego":
                $imagenElegida = "../img_tipo/Fuego.png";
                break;
            case "normal":
                $imagenElegida = "../img_tipo/Normal.png";
                break;
            case "hierba":
                $imagenElegida = "../img_tipo/Planta.png";
                break;
            case "psiquico":
                $imagenElegida = "../img_tipo/Psiquico.png";
                break;
        }
        return $imagenElegida;
    }
    //Imprimo por pantalla la imagen del tipo de pokemon
    $imagenElegida = transformarTipoDePokemonEnImagen();
    echo "<img src='$imagenElegida' alt='$tipo'>";
/*
    USE test;

    INSERT INTO pokemon(numero_identificador, imagen, nombre, tipo, descripcion, informacion)
    VALUES($numeroIdentficador, $tipo, $nombrePokemon, "e", $descripcion, $informacion);
*/
