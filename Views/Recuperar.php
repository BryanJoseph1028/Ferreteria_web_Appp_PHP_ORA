<!DOCTYPE html>
<html>
    <head>
        <title>Recuperacion de contraseña</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/recuperacion_contraseña.css">
    </head>
    <body>
        <header>
            <h1>Ferretería La Esquina</h1>
        </header>

        <main>
            <div class="form-container" ">
                <h2>Recuperación de contraseña</h2>
                <form action="../Models/recuperar_contraseña.php" method="post">
                    <div class="form-group">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" id="txt_email" name="txt_email" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Enviar" class="btn-submit">
                    </div>
                </form>
        </main>
        
        <footer>
            <p>&copy; 2023 Ferreteria la Esquina. Reservados todos los derechos.</p>
        </footer>
    </body>
</html>