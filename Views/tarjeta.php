<!DOCTYPE html>
<html>
    <head>
        <title>Pagar ahora</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/tarjeta.css">
    </head>
    <body>
        <header>
            <h1>Ferretería La Esquina</h1>
        </header>

        <main>
            <section id="registration">
                <div class="registration-form">
                    <h2>Datos del Pago</h2>
                    <form action="#" method="post">
                        <div class="form-control">
                            <label for="numeroTarjeta">Numero Tarjeta</label>
                            <input type="number" id="txt_numero_tarjeta" name="txt_numero_tarjeta" required>
                        </div>
                        <div class="form-control">
                            <label for="codigo">SSID</label>
                            <input type="number" id="txt_codigo" name="txt_codigo" required>
                        </div>
                        <div class="form-control">
                            <label for="fecha">Fecha Expiracion</label>
                            <input type="text" id="txt_fecha" name="txt_fecha" required>
                        </div>
                            <a href="./direeccion_envio.php" class="btn">Proceder al pago</a>
                            <br>
                            <a href="../index.php" class="btn">Cancelar</a>
                    </form>
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