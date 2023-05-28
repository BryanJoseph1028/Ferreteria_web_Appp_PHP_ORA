<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carro de la compra</title>
	<link rel="stylesheet" href="./css/comprar_ahora.css">
</head>
<body>
	<header>
		<h1>Ferreteria La Esquina</h1>
	</header>

	<main>
		<h2>tu carrito de la compra</h2>
		<table>
			<thead>
				<tr>
					<th>Producto</th>
					<th>Cantidad</th>
					<th>Precio</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Producto 1</td>
					<td>2</td>
					<td>$10.00</td>
				</tr>
				<tr>
					<td>Producto 2</td>
					<td>1</td>
					<td>$15.00</td>
				</tr>
				<tr>
					<td>Producto 3</td>
					<td>3</td>
					<td>$5.00</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">Total:</td>
					<td>$40.00</td>
				</tr>
			</tfoot>
		</table>

		<div class="buttons">
			<a href="./metodo_pago.php" class="pay-now-btn">Pagar ahora</a>
			<a href="./productos.php" class="continue-shopping-btn">Seguir comprando</a>
		</div>
	</main>

	<footer>
		<p>&copy; 2023 Carrito de Compras. Reservados todos los derechos.</p>
	</footer>

	<script src="../script.js"></script>
</body>
</html>
