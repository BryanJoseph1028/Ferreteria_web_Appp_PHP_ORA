<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
         <link rel="stylesheet" href="style.css">
        <title>Ferreteria La Esquina</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
			<div class="container-fluid">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="./Views/login.php">Ingreso al Portal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./Views/productos.php">Productos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./Views/AboutUs.php">Sobre Nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./Views/ContactUs.php">Contactenos</a>
					</li>
					
				</ul>
				<form class="d-flex">
        		<input class="form-control me-2" type="text" placeholder="Search">
        		<button class="btn btn-primary" type="button">Search</button>
      </form>
			</div>
    </nav>

    <div class="container-fluid mt-3">
    </div>

     <h1>FERRETERIA LA ESQUINA</h1>
	<main>
		<section id="banner">
			<h2>Bienvenido a nuestra Ferretería</h2>
			<p>Compre nuestra selección de hardware, herramientas y suministros para su próximo proyecto.</p>
			<a href="./Views/productos.php" class="btn">Comprar Ahora</a>
		</section>

		<section id="featured-products">
			<h2>Productos Destacados</h2>
			<div class="product">
				<img src="./Views/Img/product1.jpg"500" height="500">
				<h3>Martillos</h3>
				<p>Escencial para tu caja de herramientas.</p>
				<a href="./Views/Comprar.php" class="btn">Comprar Ahora</a>
			</div>
			<div class="product">
				<img src="./Views/Img/product2.jpg" width="500" height="500">
				<h3>Calentadores de agua</h3>
				<p>Perfecto para tiempos de frios.</p>
				<a href="./Views/Comprar.php" class="btn">Comprar Ahora</a>
			</div>
			<div class="product">
				<img src="./Views/Img/product3.jpg" width="500" height="500">
				<h3>Bombillas</h3>
				<p>Ideal para que alumbres tu hogar.</p>
				<a href="./Views/Comprar.php" class="btn">Comprar Ahora</a>
			</div>
		</section>
		
	</main>

	<footer>
		<p>&copy; 2023 Ferreteria la Esquina. Reservados todos los derechos.</p>
	</footer>

	<script src="script.js"></script>

    </body>
</html>