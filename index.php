<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Styles/styles.css">
    <title>Poedex | Iniciar Sesión</title>
</head>
<body>
    <nav class="nav">
        <img class="logo" src="Imagenes/LogoPokedex.png">
    </nav>

    <main>
        <div class="containerMain">
            <h1>Iniciar Sesión</h1>

            <form method="POST" action="">
                <div class="camposFormulario">
                    <label for="username">Usuario:</label>
                    <input class="inputTexto" type="text" id="username" name="username" placeholder="Ingrese su usuario" required>
                </div>
                <div class="camposFormulario">
                    <label for="password">Contraseña:</label>
                    <input class="inputTexto" type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
                </div>
                <button class="inputSubmit" type="submit">Iniciar Sesión</button>
            </form>
            <a href="Paginas/iniciarSesionAdministrador.php">Iniciar sesión como administrador</a>
        </div>
    </main>
</body>
</html>