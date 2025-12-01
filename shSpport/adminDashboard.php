<?php
    include_once "../shSpport/config/config.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeportesPro | Gestión de Base de Datos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Variables y Estilos Base (Copiados del admin_dashboard.html) */
        :root {
            --primary-color: #ff6b35; /* Naranja/Destacado */
            --secondary-color: #004e89; /* Azul Corporativo */
            --sidebar-bg: #2c3e50; /* Azul Oscuro (Típico Admin) */
            --sidebar-hover: #34495e;
            --header-bg: #ffffff;
            --card-bg: #ffffff;
            --text-dark: #2c3e50;
            --text-light: #ecf0f1;
            --border-color: #e0e0e0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f4f7f6;
            color: var(--text-dark);
        }

        /* Diseño Principal (Grid) */
        .dashboard-layout {
            display: grid;
            grid-template-columns: 250px 1fr;
            height: 100vh;
        }

        /* --- Sidebar (Barra Lateral) --- */
        .sidebar {
            background: var(--sidebar-bg);
            color: var(--text-light);
            padding: 1rem 0;
            position: fixed;
            height: 100%;
            width: 250px;
            overflow-y: auto;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }

        .sidebar-header {
            text-align: center;
            padding: 1rem 1.5rem;
            margin-bottom: 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .sidebar-menu ul {
            list-style: none;
            padding: 0;
        }

        .sidebar-menu a {
            display: block;
            padding: 1rem 1.5rem;
            color: var(--text-light);
            text-decoration: none;
            font-size: 1rem;
            transition: background 0.3s, color 0.3s;
            display: flex;
            align-items: center;
        }

        .sidebar-menu a i {
            margin-right: 0.8rem;
            width: 20px;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: var(--sidebar-hover);
            color: var(--primary-color);
            border-left: 4px solid var(--primary-color);
        }

        /* --- Main Content (Contenido Principal) --- */
        .main-content {
            grid-column: 2 / 3;
        }

        .content-header {
            background: var(--header-bg);
            padding: 1.5rem 2rem;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 500;
            box-shadow: 0 1px 5px rgba(0,0,0,0.05);
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--primary-color);
        }

        .logout-btn {
            color: var(--secondary-color);
            text-decoration: none;
            margin-left: 1rem;
            transition: color 0.3s;
        }

        .logout-btn:hover {
            color: var(--primary-color);
        }

        /* Contenido Principal (Gestión de DB) */
        .content-body {
            padding: 2rem;
        }

        .db-management-card {
            background: var(--card-bg);
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        
        .db-management-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 0.8rem;
            border-bottom: 1px solid var(--border-color);
        }

        .db-management-header h3 {
            font-size: 1.5rem;
            color: var(--secondary-color);
        }

        /* Estilos de la Tabla */
        .data-table-container {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th, .data-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
            font-size: 0.95rem;
        }

        .data-table th {
            background-color: var(--light-bg);
            color: var(--text-dark);
            font-weight: 600;
            text-transform: uppercase;
        }

        .data-table tbody tr:hover {
            background-color: #fafafa;
        }

        .data-table .action-btns {
            display: flex;
            gap: 0.5rem;
        }

        .action-btns button {
            padding: 0.4rem 0.8rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 0.85rem;
        }

        .btn-edit {
            background: #f39c12;
            color: white;
        }
        .btn-edit:hover { background: #e67e22; }

        .btn-delete {
            background: #e74c3c;
            color: white;
        }
        .btn-delete:hover { background: #c0392b; }

        /* Estilos de Estado */
        .status-badge {
            padding: 0.3rem 0.7rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
        }

        .status-completed { background-color: #d4edda; color: #155724; }
        .status-pending { background-color: #fff3cd; color: #856404; }
        .status-refunded { background-color: #f8d7da; color: #721c24; }
        
        /* Botones Generales (similares a los del sitio) */
        .btn-add {
            background: var(--gradient-primary);
            padding: 0.8rem 1.5rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: opacity 0.3s;
        }
        .btn-add:hover { opacity: 0.9; }


        /* Responsive */
        @media (max-width: 768px) {
            .dashboard-layout {
                grid-template-columns: 1fr;
            }
            
            .sidebar { display: none; }
            
            .content-header { position: static; }
        }

    </style>
</head>
<body>
    
    <div class="dashboard-layout">
        
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Admin <span style="color: var(--primary-color);">Pro</span></h2>
            </div>
            <nav class="sidebar-menu">
                <ul>
                    <li><a href="#comentarios" class="active"><i class="fas fa-database"></i> Comentarios</a></li>
                    <li><a href="#detalleReserva"><i class="fas fa-ticket-alt"></i> Detalles de las reservas</a></li>
                    <li><a href="entradas.php"><i class="fas fa-futbol"></i> Entradas</a></li>
                    <li><a href="eventos.php"><i class="fas fa-users"></i> Eventos</a></li>
                    <li><a href="faqs.php"><i class="fas fa-file-invoice-dollar"></i> Faqs</a></li>
                    <li><a href="noticias.php"><i class="fas fa-chart-line"></i> Noticias</a></li>
                    <li><a href="portfolio.php"><i class="fas fa-cog"></i> Portfolio</a></li>
                    <li><a href="reservas.php"><i class="fas fa-cog"></i> Reservas</a></li>
                    <li><a href="roles.php"><i class="fas fa-cog"></i> Roles</a></li>
                    <li><a href="testimonios.php"><i class="fas fa-cog"></i> Testimonios</a></li>
                    <li><a href="tipo_deporte.php"><i class="fas fa-cog"></i> Tipo deporte</a></li>
                    <li><a href="usuarios.php"><i class="fa fa-users" aria-hidden="true"></i> Usuarios</a></li>
                    <li><a href="zonas.php"><i class="fas fa-cog"></i> Zonas</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            
            <header class="content-header">
                <h1>Gestión de Base de Datos</h1>
                <div class="user-profile">
                    <?php echo '<img src="'.$_SESSION["user_imagen"].'" alt="Admin Avatar">'; ?>
                    <span>Administrador <?php echo $_SESSION["user_nom"]; ?></span>
                    <a href="index.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Salir</a>
                </div>
            </header>

            <div class="content-body">

                <div class="db-management-card" id="comentarios">
                    <div class="db-management-header">
                        <h3>Tabla: Comentarios</h3>
                        <button class="btn-add"><i class="fas fa-plus"></i> Añadir Nueva Entrada</button>
                    </div>
                    <div class="data-table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>comentario_id</th>
                                    <th>noticia_id</th>
                                    <th>usuario_id</th>
                                    <th>contenido</th>
                                    <th>fecha_comentario</th>
                                    <th>parent_comentario_id</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once "funciones/funciones.php";
                                    $comentaris = llegitComentarisSencers($mysqli);
                                    //var_dump($comentaris);
                                    foreach($comentaris as $comentari) {
                                        echo "<tr>
                                            <td>".$comentari['comentario_id']."</td>
                                            <td>".$comentari['noticia_id']."</td>
                                            <td>".$comentari['usuario_id']."</td>
                                            <td>".$comentari['contenido']."</td>
                                            <td>".$comentari['fecha_comentario']."</td>
                                            ";
                                        if ($comentari['parent_comentario_id'] === NULL) {
                                            echo "<td>NULL</td>";
                                        }else {
                                            echo "<td>".$comentari['parent_comentario_id']."</td>";
                                        }
                                        echo '<td class="action-btns">
                                                <button class="btn-edit">Editar</button>
                                                <button class="btn-delete">Borrar</button>
                                            </td></tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="db-management-card" id="detalleReserva">
                    <div class="db-management-header">
                        <h3>Tabla: detalle_reserva</h3>
                        <button class="btn-add"><i class="fas fa-plus"></i> Añadir Nueva Entrada</button>
                    </div>
                    <div class="data-table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>detalle_id</th>
                                    <th>reserva_id</th>
                                    <th>entrada_id</th>
                                    <th>precio_unidad_auditoria</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once "funciones/funciones.php";
                                    $detallesReservas = llegirDatalleResercaSencer($mysqli);
                                    foreach($detallesReservas as $detalleReserva) {
                                        echo "<tr>
                                            <td>".$detalleReserva['detalle_id']."</td>
                                            <td>".$detalleReserva['reserva_id']."</td>
                                            <td>".$detalleReserva['entrada_id']."</td>
                                            <td>".$detalleReserva['precio_unidad_auditoria']."</td>
                                            <td class='action-btns'>
                                                <button class='btn-edit'>Editar</button>
                                                <button class='btn-delete'>Borrar</button>
                                            </td>
                                        </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        
    </div>
    
</body>
</html>