<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error de login</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .error-container {
        text-align: center;
        padding: 20px;
    }
    h1 {
        font-size: 30px;
        margin-bottom: 10px;
    }
    .error {
        color: white;
    }
    a {
        text-decoration: none;
        font-size: 15px;
    }
    #btnMostrar {
        background-color: transparent; 
        color: white; 
        border: none;
        margin: 0; 
        padding: 0; 
        cursor: pointer; 
        outline: none; 
    }
    
</style>
<body>
    <div class="error-container">
        <h1>Error de inicio de sesión</h1>
        <p id="parrafo01" class="error">Tus credenciales son incorrectas.</p>
        <p id="parrafo02" class="error" style="display: none;">Por favor, verifica tu email y contraseña.</p>
        <button id="btnMostrar" class="btn btn-warning" style="font-size: 10px;">Mostrar mas</button><br>
        
    </div>
    <script>
        $(document).ready(function() {
            $("#btnMostrar").click(function() {
                $("#parrafo02").show();
            });
        });
    </script>
</body>
</html>