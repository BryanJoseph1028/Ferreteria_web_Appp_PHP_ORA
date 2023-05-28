<!DOCTYPE html>
<html>
    <head>
        <title>Pagar ahora</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/pago.css">
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
                            <label for="name">Nombre</label>
                            <input type="text" id="txt_nombre" name="txt_nombre" required placeholder="nombre">
                        </div>
                        <div class="form-control">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="txt_apellido" name="txt_apellido" required>
                        </div>
                        <div class="form-control">
                            <label for="calle">Calle</label>
                            <input type="text" id="txt_calle" name="txt_calle" required>
                        </div>
                        <div class="form-control">
                            <label for="colonia">Colonia/Barrio/Aldea/Zona</label>
                            <input type="text" id="txt_colonia" name="txt_colonia" required>
                        </div>
                        <div class="form-control">
                            <label for="departamento">Departamento</label>
                            <input type="text" id="txt_departamento" name="txt_departamento" required>
                        </div>
                        <div class="form-control">
                            <label for="municipio">Municipio</label>
                            <input type="text" id="txt_municipio" name="txt_municipio" required>
                        </div>
                        <div class="form-control">
                            <label for="pais">Pais</label>
                            <input type="pais" id="txt_pais" name="txt_pais" required>
                        </div>
                        <div class="form-control">
                            <label for="nombre_facturacion">Nombre Factuación</label>
                            <input type="text" id="nombre_facturacion" name="nombre_facturacion" required>
                        </div>
                        <div class="form-control">
                            <label for="nit">Nit</label>
                            <input type="text" id="txt_nit" name="txt_nit" required>
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