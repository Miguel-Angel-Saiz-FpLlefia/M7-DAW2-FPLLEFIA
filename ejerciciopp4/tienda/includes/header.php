<header class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid d-flex justify-content-between">
        <a class="navbar-brand" href="index.php">
        <img src="../data/assets/logoMercadona.jpg" alt="logo-mercadona" class="img-fluid" style="height: 50px;">
        <div class="d-flex align-items-center">
            <?php
                require_once __DIR__ . '/funciones.php';
+               muestraInfoContacto($nombre, $foto);
            ?>
        </div>
    </div>
</header>