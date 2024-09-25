<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokédex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<header class="header" style="background-color: #10105a;">
    <nav class="navbar">
        <div class="container-fluid">
            <?php
            echo '<a href="/PokedexPHP/index.php" class="navbar-brand p-2">
                <img src="/PokedexPHP/Imagenes/pokebola.png" alt="Logo" height="30" class="d-inline-block align-text-top">
                <img src="/PokedexPHP/Imagenes/LogoPokedex.png" alt="Logo Pokedex" height="45">
            </a>
            <button class="btn btn-outline-light" type="submit">';
                session_start();
                if(isset($_SESSION['usuario'])){
                    echo '<form action="/PokedexPHP/services/logout.php" method="POST" style="display:inline;"> <input type="hidden" name="userr">
    <button type="submit" class="text-decoration-none text-light" style="background:none; border:none; cursor:pointer; padding:0; color:inherit;">Cerrar sesión</button>
</form>
';
                }else{
                echo '<a href="/PokedexPHP/Paginas/login.php" class="text-decoration-none text-light">Iniciar sesión</a>';
                }
                ?>

            </button>
        </div>
    </nav>
</header>

<body class="text-bg-light">
<main class="p-3">
</main>
</body>

</html>
