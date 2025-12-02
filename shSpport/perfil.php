<?php
    include_once "../shSpport/config/config.php";
    include_once "funciones/funciones.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Perfil - DeportesPro</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --primary-color: #ff6b35;
      --secondary-color: #004e89;
      --accent-color: #1a659e;
      --dark-bg: #1c1c1e;
      --light-bg: #f5f5f7;
      --text-dark: #1d1d1f;
      --text-light: #fff;
      --success: #28a745;
      --warning: #ffc107;
      --danger: #dc3545;
      --gradient-primary: linear-gradient(135deg, #ff6b35 0%, #ff8c42 100%);
      --gradient-secondary: linear-gradient(135deg, #004e89 0%, #1a659e 100%);
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
      background: var(--light-bg);
      color: var(--text-dark);
    }

    header {
      background: var(--dark-bg);
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 5%;
      max-width: 1400px;
      margin: 0 auto;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: bold;
      background: var(--gradient-primary);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-decoration: none;
    }

    .nav-links {
      display: flex;
      list-style: none;
      gap: 2rem;
      align-items: center;
    }

    .nav-links a {
      color: var(--text-light);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: var(--primary-color);
    }

    .user-menu {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .user-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: var(--gradient-primary);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }

    .btn-logout {
      padding: 0.6rem 1.5rem;
      background: rgba(255,255,255,0.1);
      color: white;
      border: 1px solid rgba(255,255,255,0.2);
      border-radius: 25px;
      text-decoration: none;
      transition: all 0.3s;
    }

    .btn-logout:hover {
      background: var(--danger);
      border-color: var(--danger);
    }

    .profile-container {
      max-width: 1400px;
      margin: 100px auto 3rem;
      padding: 0 5%;
    }

    .profile-header {
      background: white;
      border-radius: 20px;
      padding: 2rem;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      margin-bottom: 2rem;
      display: flex;
      align-items: center;
      gap: 2rem;
    }

    .profile-avatar-large {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background: var(--gradient-primary);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 3rem;
      font-weight: bold;
      overflow: hidden;
    }

    .profile-avatar-large img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-info h1 {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    .profile-stats {
      display: flex;
      gap: 2rem;
      margin-top: 1rem;
    }

    .stat-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: #666;
    }

    .stat-item i {
      color: var(--primary-color);
    }

    .profile-content {
      display: grid;
      grid-template-columns: 250px 1fr;
      gap: 2rem;
    }

    .sidebar {
      background: white;
      border-radius: 20px;
      padding: 1.5rem;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      height: fit-content;
    }

    .sidebar-menu {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .sidebar-menu li a {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 1rem;
      border-radius: 12px;
      text-decoration: none;
      color: var(--text-dark);
      transition: all 0.3s;
    }

    .sidebar-menu li a:hover,
    .sidebar-menu li a.active {
      background: var(--gradient-primary);
      color: white;
    }

    .sidebar-menu li a i {
      width: 20px;
    }

    .main-content {
      background: white;
      border-radius: 20px;
      padding: 2rem;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .section-title {
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .section-title i {
      color: var(--primary-color);
    }

    .tabs {
      display: flex;
      gap: 1rem;
      border-bottom: 2px solid #e0e0e0;
      margin-bottom: 2rem;
    }

    .tab {
      padding: 1rem 1.5rem;
      border: none;
      background: none;
      cursor: pointer;
      font-size: 1rem;
      font-weight: 600;
      color: #666;
      position: relative;
      transition: color 0.3s;
    }

    .tab.active {
      color: var(--primary-color);
    }

    .tab.active::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      right: 0;
      height: 2px;
      background: var(--primary-color);
    }

    .tickets-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 1.5rem;
      margin-top: 2rem;
    }

    .ticket-card {
      border: 2px solid #e0e0e0;
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.3s;
      position: relative;
    }

    .ticket-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .ticket-header {
      padding: 1.5rem;
      background: var(--gradient-secondary);
      color: white;
      position: relative;
    }

    .ticket-status {
      position: absolute;
      top: 1rem;
      right: 1rem;
      padding: 0.4rem 1rem;
      border-radius: 20px;
      font-size: 0.85rem;
      font-weight: 600;
    }

    .status-active {
      background: var(--success);
    }

    .status-pending {
      background: var(--warning);
      color: #333;
    }

    .status-used {
      background: #999;
    }

    .ticket-sport {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 0.5rem;
      opacity: 0.9;
    }

    .ticket-title {
      font-size: 1.3rem;
      font-weight: bold;
      margin-bottom: 0.5rem;
    }

    .ticket-body {
      padding: 1.5rem;
    }

    .ticket-info {
      display: flex;
      flex-direction: column;
      gap: 0.8rem;
      margin-bottom: 1.5rem;
    }

    .ticket-info-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: #666;
    }

    .ticket-info-item i {
      width: 20px;
      color: var(--primary-color);
    }

    .ticket-actions {
      display: flex;
      gap: 0.5rem;
    }

    .btn {
      padding: 0.7rem 1.2rem;
      border: none;
      border-radius: 10px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s;
      text-decoration: none;
      display: inline-block;
      text-align: center;
    }

    .btn-primary {
      background: var(--gradient-primary);
      color: white;
    }

    .btn-outline {
      border: 2px solid var(--primary-color);
      background: transparent;
      color: var(--primary-color);
    }

    .btn-danger {
      background: var(--danger);
      color: white;
    }

    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .empty-state {
      text-align: center;
      padding: 4rem 2rem;
    }

    .empty-state i {
      font-size: 5rem;
      color: #ddd;
      margin-bottom: 1rem;
    }

    .empty-state h3 {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      color: #666;
    }

    .empty-state p {
      color: #999;
      margin-bottom: 2rem;
    }

    .stats-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .stat-card {
      background: var(--light-bg);
      padding: 1.5rem;
      border-radius: 15px;
      text-align: center;
    }

    .stat-card i {
      font-size: 2.5rem;
      color: var(--primary-color);
      margin-bottom: 0.5rem;
    }

    .stat-card h3 {
      font-size: 2rem;
      margin-bottom: 0.3rem;
    }

    .stat-card p {
      color: #666;
      font-size: 0.9rem;
    }

    @media (max-width: 968px) {
      .profile-content {
        grid-template-columns: 1fr;
      }

      .sidebar {
        order: 2;
      }

      .main-content {
        order: 1;
      }

      .tickets-grid {
        grid-template-columns: 1fr;
      }

      .nav-links {
        display: none;
      }
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <a href="index.php" class="logo"><i class="fas fa-trophy"></i> DeportesPro</a>
      <ul class="nav-links">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="noticias.php">Noticias</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="testimonio.php">Testimonios</a></li>
        <li><a href="faqs.php">FAQs</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
      <div class="user-menu">
        <div class="user-avatar">JG</div>
        <a href="cerrarSesion.php" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
      </div>
    </nav>
  </header>

  <div class="profile-container">
    <div class="profile-header">
      <?php 
        echo "<div class='profile-avatar-large'><img src='" . htmlspecialchars($_SESSION['user_imagen']) . "' alt='Avatar'></div>";  
      ?>
      <div class="profile-info">
        <?php echo "<h1>$_SESSION[user_nom] $_SESSION[user_apellido]</h1>"  ?>
        <?php echo "<p style='color: #666;'>$_SESSION[user_email]</p>" ?>
        <div class="profile-stats">
          <div class="stat-item">
            <i class="fas fa-ticket-alt"></i>
            <span><strong><?php echo contarTicketsPerPersona($mysqli, $_SESSION['user_id']); ?></strong> Tickets</span>
          </div>
          <div class="stat-item">
            <i class="fas fa-calendar-check"></i>
            <span><strong><?php echo contarTicketsTerminados($mysqli, $_SESSION['user_id']); ?></strong> Eventos Asistidos</span>
          </div>
          <div class="stat-item">
            <i class="fas fa-star"></i>
            <span><strong>Usuario Premium</strong></span>
          </div>
        </div>
      </div>
    </div>

    <div class="profile-content">
      <aside class="sidebar">
        <ul class="sidebar-menu">
          <li><a href="#" class="active"><i class="fas fa-ticket-alt"></i> Mis Tickets</a></li>
        </ul>
      </aside>

      <main class="main-content">
        <h2 class="section-title">
          <i class="fas fa-ticket-alt"></i>
          Gestión de Tickets
        </h2>

        <div class="stats-cards">
          <div class="stat-card">
            <i class="fas fa-ticket-alt"></i>
            <h3><?php echo contarTicketsPerPersona($mysqli, $_SESSION['user_id']); ?></h3>
            <p>Total Tickets</p>
          </div>
          <div class="stat-card">
            <i class="fas fa-clock"></i>
            <h3><?php echo contarTicketsProximos($mysqli, $_SESSION['user_id']); ?></h3>
            <p>Próximos Eventos</p>
          </div>
          <div class="stat-card">
            <i class="fas fa-check-circle"></i>
            <h3><?php echo contarTicketsTerminados($mysqli, $_SESSION['user_id']); ?></h3>
            <p>Tickets Usados</p>
          </div>
        </div>

        <div class="tabs">
          <button class="tab <?php echo (!isset($_GET['tab']) || $_GET['tab'] == 'proximos') ? 'active' : ''; ?>" onclick="window.location.href='perfil.php?tab=proximos'">Próximos Eventos</button>
          <button class="tab <?php echo (isset($_GET['tab']) && $_GET['tab'] == 'historico') ? 'active' : ''; ?>" onclick="window.location.href='perfil.php?tab=historico'">Histórico</button>
          <button class="tab <?php echo (isset($_GET['tab']) && $_GET['tab'] == 'finalizados') ? 'active' : ''; ?>" onclick="window.location.href='perfil.php?tab=finalizados'">Finalizados</button>
        </div>

        <div class="tickets-grid">
          <?php
            // Determinar qué pestaña está activa
            $tab = isset($_GET['tab']) ? $_GET['tab'] : 'proximos';
            
            // Obtener los tickets según la pestaña
            switch ($tab) {
                case 'historico':
                    $tickets = getTicketsHistorico($mysqli, $_SESSION['user_id']);
                    break;
                case 'finalizados':
                    $tickets = getTicketsFinalizados($mysqli, $_SESSION['user_id']);
                    break;
                default:
                    $tickets = getTicketsProximos($mysqli, $_SESSION['user_id']);
                    break;
            }
            
            // Iconos de deportes
            $iconosDeporte = [
                'Fútbol' => 'fa-futbol',
                'Baloncesto' => 'fa-basketball-ball',
                'Tenis' => 'fa-table-tennis',
                'Balonmano' => 'fa-volleyball-ball',
                'Natación' => 'fa-swimmer',
                'Atletismo' => 'fa-running',
                'Ciclismo' => 'fa-biking',
                'default' => 'fa-trophy'
            ];
            
            if (empty($tickets)) {
                echo "<div class='empty-state'>
                        <i class='fas fa-ticket-alt'></i>
                        <h3>No hay tickets</h3>
                        <p>No tienes tickets en esta categoría.</p>
                        <a href='portfolio.php' class='btn btn-primary'>Explorar eventos</a>
                      </div>";
            } else {
                foreach ($tickets as $ticket) {
                    $icono = $iconosDeporte[$ticket['deporte_tipo']] ?? $iconosDeporte['default'];
                    $esActivo = $ticket['es_activo'] == 1;
                    $statusClass = $esActivo ? 'status-active' : 'status-used';
                    $statusText = $esActivo ? 'Activo' : 'Finalizado';
                    $fecha = date('d M Y', strtotime($ticket['evento_fecha']));
                    $hora = date('H:i', strtotime($ticket['evento_hora']));
                    $codigoQR = $ticket['codigo_qr'] ?? 'TKT-' . $ticket['reserva_id'];
                    
                    echo "
                    <div class='ticket-card'>
                      <div class='ticket-header'>
                        <div class='ticket-sport'>
                          <i class='fas {$icono}'></i>
                          <span>" . htmlspecialchars($ticket['deporte_tipo'] ?? 'Deporte') . "</span>
                        </div>
                        <h3 class='ticket-title'>" . htmlspecialchars($ticket['evento_nombre']) . "</h3>
                        <div class='ticket-status {$statusClass}'>{$statusText}</div>
                      </div>
                      <div class='ticket-body'>
                        <div class='ticket-info'>
                          <div class='ticket-info-item'>
                            <i class='fas fa-calendar-alt'></i>
                            <span>Fecha: {$fecha}</span>
                          </div>
                          <div class='ticket-info-item'>
                            <i class='fas fa-clock'></i>
                            <span>Hora: {$hora}h</span>
                          </div>
                          <div class='ticket-info-item'>
                            <i class='fas fa-map-marker-alt'></i>
                            <span>" . htmlspecialchars($ticket['ubicacion'] ?? 'Por determinar') . "</span>
                          </div>
                          <div class='ticket-info-item'>
                            <i class='fas fa-barcode'></i>
                            <span>Código: " . htmlspecialchars($codigoQR) . "</span>
                          </div>
                        </div>
                        <div class='ticket-actions'>
                          <a href='generarQR.php?ticket=" . urlencode($codigoQR) . "' class='btn btn-primary'><i class='fas fa-qrcode'></i> Ver QR</a>
                          <a href='generarQR.php?ticket=" . urlencode($codigoQR) . "' class='btn btn-outline'><i class='fas fa-download'></i> Descargar</a>
                        </div>
                      </div>
                    </div>";
                }
            }
          ?>
        </div>
      </main>
    </div>
  </div>
</body>
</html>