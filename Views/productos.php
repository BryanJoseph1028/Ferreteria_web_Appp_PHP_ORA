<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ferreteria - Catalogo de producto</title>
	<link rel="stylesheet" href="./css/Productos.css">
</head>
<body>
	<header>
		<h1>Ferretería La Esquina</h1>
	</header>

	<main>
		<section id="product-catalog">
			<h2>Catalogo de Productos:</h2>

			<!-- Producto No. 1 -->
			<div class="product">
				<img src="./Img/p5.jpg" alt="Producto 1" width="500" height="500">
				<h3>Pentamerol</h3>
				<p>Perfecto para limpiar la madera.</p>
				<p><strong>Precio:Q48.00</strong> </p>
				<button onclick="agregarProducto('Pentamerol', 48.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 2 -->
			<div class="product">
				<img src="./Img/p6.jpeg" alt="Producto 2" width="500" height="500">
				<h3>Creolina</h3>
				<p>Perfecto para matar cucarachas.</p>
				<p><strong>Precio:</strong> Q28.00</p>
				<button onclick="agregarProducto('Creolina', 28.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 3 -->
			<div class="product">
				<img src="./Img/p7.jpeg" alt="Product 3" width="500" height="500">
				<h3>Acido Muriatico</h3>
				<p>Perfecto para limpiar el zarro del piso.</p>
				<p><strong>Precio:</strong> Q40.00</p>
				<button onclick="agregarProducto('Acido Muriatico ', 40.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 4 -->
			<div class="product">
				<img src="./Img/p8.jpeg" alt="Producto 4" width="500" height="500">
				<h3>Solvente Mineral</h3>
				<p>Perfecto para disolver la pintura de aceite.</p>
				<p><strong>Precio:</strong> Q38.00</p>
				<button onclick="agregarProducto('Solvente Mineral', 38.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 5 -->
			<div class="product">
				<img src="./Img/p9.jpeg" alt="Product 5" width="500" height="500">
				<h3>Kirosene</h3>
				<p>Perfecto para imflamar cualquier producto.</p>
				<p><strong>Precio:</strong> Q38.00</p>
				<button onclick="agregarProducto('Kirosene', 38.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 6 -->
			<div class="product">
				<img src="./Img/p10.jpeg" alt="Product 6" width="500" height="500">
				<h3>Pintura a Base de agua</h3>
				<p>Perfecto para pintar la casa.</p>
				<p><strong>Precio:</strong> Q60.00</p>
				<button onclick="agregarProducto('Pintura a Bsase de Agua', 60.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 7 -->
			<div class="product">
				<img src="./Img/p11.jpeg" alt="Product 7" width="500" height="500">
				<h3>Barniz Marino</h3>
				<p>Perfecto para darle brillo a la madera.</p>
				<p><strong>Precio:</strong> Q35.00</p>
				<button onclick="agregarProducto('Barniz Marino', 35.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 8 -->
			<div class="product">
				<img src="./Img/p12.jpeg" alt="Product 8" width="500" height="500">
				<h3>Tachuelas</h3>
				<p>Clavos de diferentes tamaños.</p>
				<p><strong>Precio:</strong> Q18.00</p>
				<button onclick="agregarProducto('Caja de Tachuelas', 18.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 9 -->
			<div class="product">
				<img src="./Img/p13.jpeg" alt="Product 9" width="500" height="500">
				<h3>Silicona</h3>
				<p>Perfecta para pegar los productos.</p>
				<p><strong>Precio:</strong> Q18.00</p>
				<button onclick="agregarProducto('Silicona', 18.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 10 -->
			<div class="product">
				<img src="./Img/p14.jpeg" alt="Product 10" width="500" height="500">
				<h3>Tomacorriente</h3>
				<p>De todos tipos de tamaños.</p>
				<p><strong>Precio:</strong> Q15.00</p>
				<button onclick="agregarProducto('Tomacorriente', 18.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 11 -->
			<div class="product">
				<img src="./Img/p15.jpeg" alt="Product 11" width="500" height="500">
				<h3>Pintura a Base de Aceite</h3>
				<p>Perfecta para pintar la casa.</p>
				<p><strong>Precio:</strong> Galon Q120.00</p>
				<button onclick="agregarProducto('Pintura a base de aceite', 120.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 12 -->
			<div class="product">
				<img src="./Img/p16.jpeg" alt="Product 12" width="500" height="500">
				<h3>Pinturas en Spray</h3>
				<p>Pintura en sprite para pintar lugares complicados.</p>
				<p><strong>Precio:</strong> Q20.00</p>
				<button onclick="agregarProducto('Pintura en Spray ', 20.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 13 -->
			<div class="product">
				<img src="./Img/p17.jpeg" alt="Product 13" width="500" height="500">
				<h3>Guantes de Latex</h3>
				<p>Perfecto para limpiar sin ensuciarse las manos.</p>
				<p><strong>Precio:</strong> Q20.00</p>
				<button onclick="agregarProducto('Guantes de Latex', 20.00)" class="btn">Agregar</button>
			</div>

			<!-- Producto No. 14 -->
			<div class="product">
				<img src="./Img/p18.jpeg" alt="Product 14" width="500" height="500">
				<h3>Metro</h3>
				<p>Disponible en varios colores.</p>
				<p><strong>Precio:</strong> Q48.00</p>
				<button onclick="agregarProducto('Metro', 48.00)" class="btn">Agregar</button>
			</div>

			<div id="carrito" class="product">
			<h2>Productos</h2>
			<ul id="lista-productos"></ul>
			<p>Total: Q<span id="total">0</span></p>
			<button onclick="vaciarCarrito()" class="btn">Vaciar carrito</button>
			<a href="./Comprar.php" class="btn">Comprar ahora</a>
			<a href="../index.php" class="btn">Regresar</a>
			
			</div>
  		</div>
		</section>
	</main>


	<footer>
		<p>&copy; 2023 Ferreteria la Esquina. Reservados todos los derechos.</p>
	</footer>

			<script>
			var carrito = []; // Array para almacenar los productos agregados al carrito
			var total = 0; // Variable para almacenar el total del carrito

			function agregarProducto(nombre, precio) {
			carrito.push({ nombre: nombre, precio: precio }); // Agregar el producto al carrito
			total += precio; // Actualizar el total
			actualizarCarrito(); // Actualizar la visualización del carrito
			}

			function vaciarCarrito() {
			carrito = []; // Vaciar el carrito
			total = 0; // Reiniciar el total
			actualizarCarrito(); // Actualizar la visualización del carrito
			}

			function actualizarCarrito() {
			var listaProductos = document.getElementById("lista-productos");
			var html = "";
			for (var i = 0; i < carrito.length; i++) {
				html += "<li>" + carrito[i].nombre + " - Q" + carrito[i].precio + "</li>";
			}
			listaProductos.innerHTML = html;

			var totalElement = document.getElementById("total");
			totalElement.textContent = total;
			}
		</script>
	<script src="script.js"></script>

</body>
</html>
