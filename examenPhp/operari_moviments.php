<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Les Meves Entrades</title>
    <link rel="stylesheet" href="style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="dashboard-body">
    
    <aside class="sidebar operari-sidebar">
        <div class="logo">Operari StockMaster</div>
        <nav class="main-nav">
            <a href="operari_dashboard.php" class="nav-item">📝 Registrar Entrada</a>
            <a href="operari_moviments.php" class="nav-item active">🔍 Les Meves Entrades</a>
            <a href="operari_perfil.php" class="nav-item">👤 Editar Perfil</a>
        </nav>
        <div class="user-info">
            <span>👋 Operari: Joan Pérez</span>
            <a href="login.php" class="logout">Tancar Sessió</a>
        </div>
    </aside>

    <main class="content">
        <header class="header">
            <h2>Les Meves Entrades Registrades</h2>
            <a href="operari_dashboard.php" class="btn btn-primary">Registrar Nova Entrada</a>
        </header>

        <div class="data-table-container">
            <h3>Operacions d'Entrada de **Joan Pérez**</h3>
            <p>Consulta l'historial de tots els productes que has ingressat al magatzem.</p>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID Moviment</th>
                        <th>Data i Hora</th>
                        <th>Producte</th>
                        <th>Quantitat (Entrada)</th>
                        <th>Notes</th>
                        <th>Accions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>M9002</td>
                        <td>2025-12-04 10:30</td>
                        <td>Cargol M8x50</td>
                        <td class="status-success">+500 u.</td>
                        <td>Lot 2025-A, pallet 3</td>
                        <td><button class="btn btn-edit btn-small">Detalls</button></td>
                    </tr>
                    <tr>
                        <td>M9000</td>
                        <td>2025-12-03 17:45</td>
                        <td>Cable Ethernet CAT6</td>
                        <td class="status-success">+1000 m.</td>
                        <td>Recepció Proveïdor #45</td>
                        <td><button class="btn btn-edit btn-small">Detalls</button></td>
                    </tr>
                    <tr>
                        <td>M8995</td>
                        <td>2025-12-02 11:00</td>
                        <td>Guants de Protecció T.L</td>
                        <td class="status-success">+200 parells</td>
                        <td>Comanda urgent</td>
                        <td><button class="btn btn-edit btn-small">Detalls</button></td>
                    </tr>
                    </tbody>
            </table>
        </div>

    </main>
</body>
</html>