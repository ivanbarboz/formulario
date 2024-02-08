<?php

session_start();

// VALIDACIÓN DE SESIÓN
if (!isset($_SESSION['user_id'])) {
    // REDIRECCIÓN AL LOGIN
    header('Location: ../index.php');
    exit;
}

require '../connection/DaoConexion.php';
$conn = DaoConexion::getConexion();

// VALIDACIÓN DE CATEGORÍA
if ($_GET['id']) {
    $sql = 'SELECT name FROM Category WHERE category_id=:id';
    $statement = $conn->prepare($sql);
    $statement->bindValue('id', $_GET['id']);
    $statement->execute();
    $category = $statement->fetch();

    if (!$category) {
        // REDIRECCIÓN AL MAIN
        header('Location: NotFound.php');
        exit;
    }
} else {
    // REDIRECCIÓN AL MAIN
    header('Location: ../main.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $category['name']; ?></title>
    <link rel="stylesheet" href="../styles/category-styles.css">
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
</head>
<!-- HEADER RESONSIVE -->
<?php require '../partials/category-header.php'; ?>

<!-- CATEGORY CONTAINER -->
<div class="contenedor-categoria">
    <h1><?php echo $category['name']; ?></h1>
</div>

<!-- CAROUSEL CONTAINER -->
<div class="carousel" style="height: 60vh;">
    <div class="carousel-container">
        <?php
        $sql = "
            SELECT b.*
            FROM category c
            INNER JOIN Background_Category bc ON c.category_id = bc.category_id
            INNER JOIN background b ON bc.background_id = b.background_id
            WHERE c.category_id = :id;
            ";
        $statement = $conn->prepare($sql);
        $statement->bindValue('id', $_GET['id']);
        $statement->execute();
        foreach ($statement->fetchAll() as $background) {
            echo "<div class='carousel-slide'>";
            echo "<img src=" . $background['image_url'] . " alt='" . $background['title'] . "'>";
            echo "</div>";
        }
        ?>
    </div>
    <button class="carousel-prev"><</button>
    <button class="carousel-next">></button>
</div>

<!-- FOOTER -->
<?php require '../partials/footer.php' ?>
</body>

</html>

<!-- CAROUSEL -->
<script>
    let bt_menu = document.getElementById('cb-menu');
    bt_menu.addEventListener('click', activarMenu);

    function activarMenu() {
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
    document.addEventListener("DOMContentLoaded", function() {
        const carousel = document.querySelector(".carousel");
        const container = carousel.querySelector(".carousel-container");
        const slides = container.querySelectorAll(".carousel-slide");
        const prevButton = carousel.querySelector(".carousel-prev");
        const nextButton = carousel.querySelector(".carousel-next");
        let currentIndex = 0;

        // Función para mostrar la diapositiva actual
        function showSlide(index) {
            if (index < 0) {
                currentIndex = slides.length - 1;
            } else if (index >= slides.length) {
                currentIndex = 0;
            }

            const offset = -currentIndex * 100;
            container.style.transform = `translateX(${offset}%)`;
        }

        // Evento para el botón "Anterior"
        prevButton.addEventListener("click", () => {
            currentIndex--;
            showSlide(currentIndex);
        });

        // Evento para el botón "Siguiente"
        nextButton.addEventListener("click", () => {
            currentIndex++;
            showSlide(currentIndex);
        });

        // Mostrar la primera diapositiva al cargar la página
        showSlide(currentIndex);
    });
</script>