<!DOCTYPE html>
<html>
    <head>
        <title>Pagar ahora</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/pagar_ahora.css">
    </head>
    <body>
        <header>
            <h1>Ferretería La Esquina</h1>
        </header>

        <main>
            <section id="registration">
                <div class="registration-form">
                    <h2>Dirección de envío</h2>
                    <form action="#" method="post">
                        <div class="form-control">
                            <label for="departamento">Departamento</label>
                            <input type="text" id="txt_departamento" name="txt_departamento" placeholder="Departamento" required>
                        </div>
                        <div class="form-control">
                            <label for="municipio">Municipio</label>
                            <input type="text" id="txt_municipio" name="txt_municipio" placeholder="Municipio" required>
                        </div>
                        <div class="form-control">
                            <label for="pais">Ciudad</label>
                            <input type="text" id="txt_ciudad" name="txt_ciudad" placeholder="ciudad" required>
                        </div>
                        <div class="form-control">
                            <label for="pais">Codigo Postal</label>
                            <input type="text" id="txt_postal" name="txt_postal" placeholder="0000" required>
                        </div>
                        <div class="form-control">
                            <label for="municipio">Zona/Barrio/Local</label>
                            <input type="text" id="txt_zona" name="txt_zona" placeholder="0" required>
                        </div>
                        
                            <a href="./FacturaElectronica.php" class="btn">Proceder al pago</a>
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