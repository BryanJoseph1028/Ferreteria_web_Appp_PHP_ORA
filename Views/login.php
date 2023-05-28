<!DOCTYPE html>
<html>
    <head>
        <title>Login - Ferreteria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/Login.css">
        <script src="../Views/Js/login.js"></script>
    </head>
    <body>
        <header>
            <h1>Ferretería La Esquina</h1>
        </header>

        <main>
            <section>
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="../Models/login.php" method="POST" id="loginForm">
                        <div class="form-control">
                            <label for="username">Usuario</label>
                            <input type="text" id="user" name="user" required>
                        </div>
                        <div class="form-control">
                            <label for="password">Contraseña</label>
                            <input type="password" id="pass" name="pass" required>
                            <a href="./Recuperar.php" class="forgot-password">¿Olvidaste tu contraseña?</a>
                        </div>
                        <button type="submit" class="btn btn-warning">Ingresar</button>
                        <a href="./Regristros_usuarios.php" class="btn">Registrarse</a>
                    </form>
                </div>
                <p id="errorMessage" style="color: red; display: none;">Contraseña incorrecta. Por favor, inténtalo de nuevo.</p>
            </section>
        </main>
        
        <footer>
            <p>&copy; 2023 Ferreteria la Esquina. Reservados todos los derechos.</p>
        </footer>
    </body>
</html>
