<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Pokedex</title>
    <link rel="stylesheet" href="../Styles/inicio.css"> <!-- Enlace al archivo CSS -->
</head>
<body>
<nav class="nav">
    <img class="logo" src="../Imagenes/LogoPokedex.png" alt="Logo Pokedex">
</nav>

<main>
    <div class="containerMain">


        <!-- Formulario de búsqueda -->
        <form action="buscar.php" method="GET">
            <div class="camposFormulario">
                <label for="search">Buscar Pokémon:</label>
                <input type="text" class="inputTexto" id="search" name="search" placeholder="Escribe el nombre de un pokémon">
            </div>
            <input type="submit" class="inputSubmit" value="Buscar">
        </form>



    </div>
</main>
</body>
</html>