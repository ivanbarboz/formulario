<?php
session_start();
require 'connection/DaoConexion.php';
$connection = DaoConexion::getConexion();
    
// ESCUCHA AL METODO POST
if ($_POST) {
    // VALIDA LA CORRECTA CONEXIÓN A LA BDs
	if ($connection) {
        try {
            $sql = "INSERT INTO `User` (dni, name, gmail, password) VALUES (?, ?, ?, ?)";
    
            // ENCRIPTACIÓN DE LA CONTRASEÑA
            $stmt = $connection->prepare($sql);
    
            $password = md5($_POST['password']);
            $stmt->bindParam(1, $_POST['dni']);
            $stmt->bindParam(2, $_POST['name']);
            $stmt->bindParam(3, $_POST['email']);
            $stmt->bindParam(4, $password);
            $stmt->execute();
            //header ('Location : index.php');
        } catch (Exception $e) {
            echo "<script>alert('Ups, algo salió mal')</script>";
        }
    } else {
        echo "<script>alert('Ups, algo salió mal')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles/form-styles.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
    <!-- SIGN UP -->
    <div class="formulario signup">
        <h1>Sign Up</h1>
        <form id="registroForm" method="POST">
            <input type="text" placeholder="DNI" class="input" name="dni" required>
            <input type="text" placeholder="Name" class="input" name="name" required>
            <input type="text" placeholder="Email" class="input" name="email" required>
            <input type="password" placeholder="Contraseña" class="input" name="password" required>
            <input type="submit" value="Sign Up" class="boton">
            <p>
                ¿Ya tienes una cuenta? <a href="index.php">Iniciar Sesión</a>
            </p>
        </form>
    </div>
</body>
</html>
