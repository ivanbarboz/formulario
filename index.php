<?php

require 'connection/DaoConexion.php';
session_start();

$connection = DaoConexion::getConexion();

// ESCUCHA AL METODO POST
if ($_POST) {
	// VALIDA LA CORRECTA CONEXIÓN A LA BDs
	if ($connection) {
		try {
			$email = $_POST['email'];
			$password = md5($_POST['password']);

			$stmt = $connection->prepare("SELECT * FROM User WHERE gmail='$email' and password='$password'");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$row = $stmt->fetch();

			if ($row) {
				$_SESSION['user_id'] = $row['user_id'];
				header('Location: main.php');
			} else {
				echo "<script>document.addEventListener('DOMContentLoaded', function () {showError()})</script>";
			}
		} catch (Exception $e) {
			echo "<script>alert('Ups, algo salió mal')</script>";
		}
	} else {
		echo "<script>alert('Ups, algo salió mal')</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="styles/form-styles.css">
	<link rel="icon" href="img/logo.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
	<!-- LOGIN -->
	<div class="formulario login">
		<h1>Login</h1>
		<form action="" , method="POST">
			<input type="email" placeholder="Email" class="input" name="email" required>
			<input type="password" placeholder="Contraseña" class="input" name="password" required>
			<div class="opciones">
				<p>
					<input type="checkbox" id="recordar">
					<label for="recordar">Recuerdame</label>
				</p>
				<a href="#">¿No sabes tu contraseña?</a>
			</div>
			<input type="submit" value="Login" class="boton" id="error">
			<p>
				¿No tienes una cuenta? <a href="signUp.php">Registrate</a>
			</p>
		</form>
	</div>
	<section class="contenedor">
		<div id="error-message">
		</div>
	</section>
</body>

</html>

<script>
	function showError() {
		$.ajax({
			type: "POST",
			url: "error.php",
			success: function(response) {
				$("#error-message").html(response)
			}
		})

		setTimeout(() => {
			$(".error-container").hide();
		}, "2000");
		return false
	}
</script>