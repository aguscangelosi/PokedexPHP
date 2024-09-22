<?php
include ('../Layouts/headerAdmin.php');
?>
<head>
    <link rel="stylesheet" href="../Styles/agregarPokemon.css">
</head>
<main>
    <h1>Añadir Pokemón</h1>
    <div id="contenedor-principal">
        <form id="agregar-pokemon" action="logicaAgregarPokemon.php" method="post">
            <label>Ingrese nombre del pokemon</label>
                <input class="input-add" type="text" name="nombre-pokemon" required>
            <label>Ingrese numero de identificación</label>
                <input class="input-add" type="number" name="numero-identficador" required>
            <label>Ingrese tipo de pokemon</label>
                <select class="input-add" multiple name="tipo-pokemon" required>
                    <option value="agua">Agua</option>
                    <option value="dragon">Dragón</option>
                    <option value="electrico">Electrico</option>
                    <option value="fantasma">Fastasma</option>
                    <option value="fuego">Fuego</option>
                    <option value="normal">Normal</option>
                    <option value="hierba">Bob Marley</option>
                    <option value="psiquico">Psiquico</option>
                </select>
            <label>Descripción del pokemon:</label>
                <input class="input-add" type="text" name="descripcion-pokemon" required>
            <label>Información: </label>
                <input class="input-add" type="text" name="informacion-pokemon" required>
            <input class="button-add" type="submit">
        </form>
    </div>
</main>
