<?php
session_start();

if(!isset($_SESSION['user_id'])){
	// REDIRECCIÓN AL LOGIN
    header('Location: index.php');
    exit;
} 

require 'connection/DaoConexion.php';
$connection = DaoConexion::getConexion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BeautifulBackgrounds</title>
	<link rel="stylesheet" href="styles/main-styles.css">
	<link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<body >
	<!-- HEADER RESPONSIVE -->
	<header>
		<nav>
			<div class="contenedor contenedor-links">
				<img src="img/logo.png" alt="BB" class="logo">
				<ul>
					<li><a href="#">Inicio</a></li>
					<li><a href="#categorias">Categorias</a></li>
					<li><a href="#nuevos">Nuevos</a></li>
					<li><a href="logOut.php">Salir</a></li>
				</ul>
				<input type="checkbox" id="cb-menu">
			</div>
			<div class="pl-menu">
				<ul>
					<li><a href="main.php">Inicio</a></li>
					<li><a href="#categorias">Categorias</a></li>
					<li><a href="#nuevos">Nuevos</a></li>
					<li><a href="logOut.php">Salir</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<!-- MAIN CONTAINER -->
	<div class="contenedor-principal">
		<div class="contenedor">
			<h1>Beautiful Backgrounds</h1>
			<p>Disfruta de una experiencia visual única y encuentra inspiración para tus proyectos</p>
	    </div>
	</div>

	<!-- CATEGORY CONTAINER -->
	<div class="contenedor contenedor-categorias">
		<h3 id="categorias">CATEGORIAS</h3>
		<div class="grid-container">
			<?php
			if ($connection) {
				// Obtención de categorias
				$sql = "SELECT * FROM Category";
				$stmt = $connection->prepare($sql);
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$stmt->execute();

				while ($fila = $stmt->fetch()) {
					echo "<div class='grid-item'>";
					//echo "<a href='categories/" . $fila['page'] . ".php'>";
					echo "<a href='categories/category.php?id=" . $fila['category_id'] . "'>";
					echo "<img src=" . $fila['image_url'] . "></a>";
					echo "<p>" . $fila['name'] . "</p>";
					echo "</div>";
				}
			} else {
				echo "<script>alert('Ups, algo salió mal')</script>";
			}

			?>
		</div>
	</div>

	<!-- BACKGROUND CONTAINER -->
	<div class="contenedor">
		<h3 id="nuevos">NUEVOS FONDOS</h3>
		<div class="contenedor-fondos" >
			<?php
			if ($connection) {
				// Obtención de categorias
				$sql = "SELECT (image_url) FROM Background WHERE background_id<=12";
				$stmt = $connection->prepare($sql);
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$stmt->execute();
				
				while ($fila = $stmt->fetch()) {
					echo "<div class='fondo'>";
					echo "<img src=" . $fila['image_url'] . ">";
					echo "</div>";
				}
			} 
			?>
		</div>
	</div>
	
	<!-- FOOTER -->
	<footer>
    	<div class="footer-content">
        	<p>© 2023 Beautiful Backgrounds</p>
        	<ul>
            	<li><a href="#"><img src="img/icons/instagram.png" alt="Instagram" title="Instagram"></a></li>
            	<li><a href="#"><img src="img/icons/facebook.png" alt="Facebook" title="Facebook"></a></li>
            	<li><a href="#"><img src="img/icons/pinterest.png" alt="Pinterest" title="Pinterest"></a></li>
				<li><a href="#"><img src="img/icons/gmail.png" alt="Gmail" title="Gmail"></a></li>
        	</ul>
    	</div>
	</footer> 

</body>
</html>

<!-- MENU RESPONSIVE -->
<script>
	let bt_menu = document.getElementById('cb-menu');
	bt_menu.addEventListener('click', activarMenu);
	function activarMenu () {
		let pl_menu = document.getElementsByClassName("pl-menu")[0];
		if (bt_menu.checked) {
			pl_menu.classList.remove('fade-salida');
			pl_menu.style = 'display : block;';
			pl_menu.classList.add('fade-entrada');
		} else {
			pl_menu.classList.remove('fade-entrada');
			pl_menu.classList.add('fade-salida')
		}
		
	} 
</script>