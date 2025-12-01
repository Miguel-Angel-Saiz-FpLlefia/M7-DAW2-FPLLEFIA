<?php
    session_start();
?>

<header>
    <nav>
      <div class="logo"><i class="fas fa-trophy"></i> DeportesPro</div>
      <ul class="nav-links">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="noticias.php">Noticias</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="testimonio.php">Testimonios</a></li>
        <li><a href="faqs.php">FAQs</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <?php
          if (isset($_SESSION['user_nom'])) {
              echo '<li><a href="adminDashboard.php">Panel admin</a></li>';
          }
        ?>
      </ul>
      <?php
        if (isset($_SESSION['user_nom'])) {
            echo '<div class="user-actions">
                    <a href="perfil.php" class="btn btn-outline">Perfil</a>
                    <a href="cerrarSesion.php" class="btn btn-primary">Cerrar Sesión</a>
                  </div>';
        } else {
            echo '<div class="user-actions">
                <a href="login.php" class="btn btn-outline">Iniciar Sesión</a>
                <a href="register.php" class="btn btn-primary">Registrarse</a>
            </div>';
        }
      ?>
    </nav>
  </header>