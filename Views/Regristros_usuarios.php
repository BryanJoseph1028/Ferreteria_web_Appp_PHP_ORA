<!DOCTYPE html>
<html>
    <head>
        <title>Registros - Ferreteria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/registrarse.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <header>
            <h1>Ferretería La Esquina</h1>
        </header>

        <main>
            <section id="registration">
                <div class="registration-form">
                    <h2>Registrate</h2>
                    <form method="post" action="../Models/clientes.php">
                        
                        <div class="form-control">
                            <label for="name">Nombre</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-control">
                            <label for="name">Apellido</label>
                            <input type="text" id="apellido" name="apellido" required>
                        </div>
                        <div class="form-control">
                            <label for="name">Direccion</label>
                            <input type="text" id="direccion" name="direccion" required>
                        </div>
                        <div class="form-control">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="name">Telefono</label>
                            <input type="text" id="telefono" name="telefono" required>
                        </div>
                        <div class="form-control">
                            <label for="username">Usuario</label>
                            <input type="text" id="usuario" name="usuario" required>
                        </div>
                        <div class="form-control">
                            <label for="password">Contraseña</label>
                            <input type="password" id="contrasena" name="contrasena" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value = "Agregar">
                    </form>
                </div>
            </section>
            </section>
        </main>
        
        <footer>
            <p>&copy; 2023 Ferreteria la Esquina. Reservados todos los derechos.</p>
        </footer>
    </body>
</html>
