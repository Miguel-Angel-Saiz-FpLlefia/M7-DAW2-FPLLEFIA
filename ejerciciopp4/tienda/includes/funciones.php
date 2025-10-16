<?php
    function generarProductos() {
        include('data/productos.php');
        foreach ($productos as $id => $producto) {
            echo "<div class=\"producto-card\">";
                echo "<div class=\"producto-nombre\">" . htmlspecialchars($producto['nombre'], ENT_QUOTES, 'UTF-8') . "</div>";
                echo "<div class=\"producto-categoria\">" . htmlspecialchars($producto['categoria'], ENT_QUOTES, 'UTF-8') . "</div>";
                echo "<div class=\"producto-descripcion\">" . htmlspecialchars($producto['descripcion'], ENT_QUOTES, 'UTF-8') . "</div>";
                echo "<div class=\"producto-precio\">" . htmlspecialchars($producto['precio'], ENT_QUOTES, 'UTF-8') . "€</div>";
                echo "<div class=\"producto-stock\">" . htmlspecialchars($producto['stock'], ENT_QUOTES, 'UTF-8') . " disponibles</div>";
            echo "</div>";
    }
    }

    function muestraInfoContacto($nombre, $foto) {
        echo "<h2 class=\"me-3 mb-0 px-4\">Bienvenido $nombre</h2>";
        echo "<img src=\"$foto\" alt=\"Avatar\" class=\"rounded-circle\" style=\"width: 50px; height: 50px;\">";
        echo "<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">";
        echo "<span class=\"navbar-toggler-icon\"> </span> </button>";
    }
?>