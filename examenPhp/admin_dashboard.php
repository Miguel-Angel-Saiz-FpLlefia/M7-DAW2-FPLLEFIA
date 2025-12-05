<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Gestió de Productes</title>
    <link rel="stylesheet" href="style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="dashboard-body">
    
    <aside class="sidebar">
        <div class="logo">StockMaster Industrial</div>
        <nav class="main-nav">
            <a href="admin_dashboard.php" class="nav-item active">📦 Gestió de Productes</a>
            <a href="admin_moviments.php" class="nav-item">📈 Gestió de Moviments</a>
            <a href="admin_proveidors.php" class="nav-item">🚚 Gestió de Proveïdors</a>
        </nav>
        <div class="user-info">
            <span>👋 Admin User</span>
            <a href="login.php" class="logout">Tancar Sessió</a>
        </div>
    </aside>

    <main class="content">
        <header class="header">
            <h2>Gestió i Stock de Productes</h2>
            <a href="admin_producte_nou.php"><button class="btn btn-success">+ Nou Producte</button></a>
        </header>

        <div class="data-table-container">
            <h3>Stock Actual i Referències</h3>
            <p>Taula amb el control de l'stock actual i accions de CRUD.</p>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom Producte</th>
                        <th>Codi SKU</th>
                        <th>Stock Actual</th>
                        <th>Stock Mínim</th>
                        <th>Proveïdor Principal</th>
                        <th>Accions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12034</td>
                        <td>Tornavís Phillips (P3)</td>
                        <td>PH-3450</td>
                        <td class="status-success">450 u.</td>
                        <td>50 u.</td>
                        <td>Ferreteria Ràpida S.L.</td>
                        <td>
                            <a href="admin_producte_editar.php?id=12034"><button class="btn btn-edit btn-small">Editar</button></a>
                            <button class="btn btn-delete btn-small">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>99230</td>
                        <td>Caixa Cargol M8</td>
                        <td>CR-M8-100</td>
                        <td class="status-danger">15 u.</td>
                        <td>20 u.</td>
                        <td>Fixacions BCN</td>
                        <td>
                            <a href="admin_producte_editar.php?id=99230"><button class="btn btn-edit btn-small">Editar</button></a>
                            <button class="btn btn-delete btn-small">Eliminar</button>
                        </td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </main>
</body>
</html>