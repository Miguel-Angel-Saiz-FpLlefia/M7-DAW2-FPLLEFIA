<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Gestió de Proveïdors</title>
    <link rel="stylesheet" href="style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="dashboard-body">
    
    <aside class="sidebar">
        <div class="logo">StockMaster Industrial</div>
        <nav class="main-nav">
            <a href="admin_dashboard.php" class="nav-item">📦 Gestió de Productes</a>
            <a href="admin_moviments.php" class="nav-item">📈 Gestió de Moviments</a>
            <a href="admin_proveidors.php" class="nav-item active">🚚 Gestió de Proveïdors</a>
        </nav>
        <div class="user-info">
            <span>👋 Admin User</span>
            <a href="login.php" class="logout">Tancar Sessió</a>
        </div>
    </aside>

    <main class="content">
        <header class="header">
            <h2>Gestió de Proveïdors</h2>
            <a href="admin_proveidor_nou.php"><button class="btn btn-success">+ Nou Proveïdor</button></a>
        </header>

        <div class="data-table-container">
            <h3>Llista de Proveïdors Actius</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom Fiscal</th>
                        <th>Contacte Principal</th>
                        <th>Email</th>
                        <th>Telèfon</th>
                        <th>Accions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PRV-001</td>
                        <td>Ferreteria Ràpida S.L.</td>
                        <td>Laura Giménez</td>
                        <td>laura@ferrapida.com</td>
                        <td>93 111 22 33</td>
                        <td>
                            <a href="admin_proveidor_editar.php?id=PRV-001"><button class="btn btn-edit btn-small">Editar</button></a>
                            <button class="btn btn-delete btn-small">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PRV-002</td>
                        <td>Fixacions BCN</td>
                        <td>Albert Soler</td>
                        <td>albert@fixacionsbcn.com</td>
                        <td>93 444 55 66</td>
                        <td>
                            <a href="admin_proveidor_editar.php?id=PRV-002"><button class="btn btn-edit btn-small">Editar</button></a>
                            <button class="btn btn-delete btn-small">Eliminar</button>
                        </td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </main>
</body>
</html>