<!DOCTYPE html>
<html>
    <head>
        <title>Factura - Ferreteria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/factura.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>
    </head>
    <body>
        <header>
            <h1>Ferretería La Esquina</h1>
        </header>

        <main>
         

            <div class="invoice">
                <form id="invoiceForm">
                    <div class="form-control">
                    <label for="numero">Número de Factura:</label>
                    <input type="text" id="invoiceNumber" name="invoiceNumber"><br><br>
                    </div>
                    <div class="form-control">
                    <label for="nombre">Nombre del Cliente::</label>
                    <input type="text" id="customerName" name="customerName"><br><br>
                    </div>
                    <div class="form-control">
                    <label for="monto">monto</label>
                    <input type="number" id="amount" name="amount"><br><br>
                    </div>
                
                    <input type="submit" value="Generar Factura" onclick="generatePDF()">
                </form>
                </div>
        
                    <div class="invoice-details-right">
                        <p>Fecha: 21 de mayo de 2023</p>
                        <p>No. Factura: 00123</p>
                    </div>
                </div>
        
                <table>
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Producto 1</td>
                            <td>2</td>
                            <td>$10.00</td>
                            <td>$20.00</td>
                        </tr>
                        <!-- Agrega aquí las filas correspondientes a los productos -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">Subtotal:</td>
                            <td>$40.00</td>
                        </tr>
                        <tr>
                            <td colspan="3">IVA (12%):</td>
                            <td>$4.80</td>
                        </tr>
                        <tr>
                            <td colspan="3">Total:</td>
                            <td>$44.80</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>

        
        <footer>
            <p>&copy; 2023 Ferreteria la Esquina. Reservados todos los derechos.</p>
        </footer>

        <script>
                function generatePDF() {
                const invoiceNumber = document.getElementById('invoiceNumber').value;
                const customerName = document.getElementById('customerName').value;
                const amount = document.getElementById('amount').value;

                const doc = new jsPDF();
                doc.text(`Número de Factura: ${invoiceNumber}`, 10, 10);
                doc.text(`Nombre del Cliente: ${customerName}`, 10, 20);
                doc.text(`Monto: $${amount}`, 10, 30);
                doc.save('factura.pdf');
                }
  </script>
    </body>
</html>