<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Gestió de Moviments</title>
    <link rel="stylesheet" href="style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
<body class="dashboard-body">
    
    <aside class="sidebar">
        <div class="logo">StockMaster Industrial</div>
        <nav class="main-nav">
            <a href="admin_dashboard.php" class="nav-item">📦 Gestió de Productes</a>
            <a href="admin_moviments.php" class="nav-item active">📈 Gestió de Moviments</a>
            <a href="admin_proveidors.php" class="nav-item">🚚 Gestió de Proveïdors</a>
        </nav>
        <div class="user-info">
            <span>👋 Admin Logístic</span>
            <a href="login.php" class="logout">Tancar Sessió</a>
        </div>
    </aside>

    <main class="content">
        <header class="header">
            <h2>Gestió de Moviments (Entrades i Informes)</h2>
        </header>
        
        <div class="card form-card">
            <h3>📝 1. Registre Ràpid d'Entrada de Material</h3>
            <p>Utilitza aquest formulari per donar entrada a un lot de productes. S'enregistrarà al teu nom.</p>
            <form>
                <div class="form-group-inline">
                    <div class="form-group half-width">
                        <label for="producte_id">Producte (Codi SKU o ID)</label>
                        <input type="text" id="producte_id" name="producte_id" placeholder="Ex: CR-M8-100" required>
                    </div>
                    <div class="form-group half-width">
                        <label for="quantitat">Quantitat a Ingressar</label>
                        <input type="number" id="quantitat" name="quantitat" min="1" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notes">Notes/Lot (Opcional)</label>
                    <textarea id="notes" name="notes" rows="2"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-full-width mt-2">Confirmar Entrada (Guardar Moviment)</button>
            </form>
        </div>

        <div class="data-table-container mt-4">
            <h3>📈 2. Consulta Històrica de Moviments i Informes</h3>
            <p>Informe total d'operacions (entrada/sortida), incloent el producte i l'operari responsable de l'acció.</p>
            
            <div class="card filters-card">
                <form class="filters-form">
                    <label>Filtre per Producte:</label>
                    <input type="text" placeholder="Cerca Nom o SKU...">
                    <label>Filtre per Operari:</label>
                    <select><option>Tots</option><option>J. Pérez</option><option>A. García</option></select>
                    <button type="button" class="btn btn-secondary">Filtrar</button>
                </form>
            </div>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID Moviment</th>
                        <th>Data/Hora</th>
                        <th>Tipus</th>
                        <th>Quantitat</th>
                        <th>Producte (Nom/SKU)</th>
                        <th>Operari Responsable</th>
                        <th>Detalls</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>M9002</td>
                        <td>2025-12-04 10:30</td>
                        <td class="status-success">ENTRADA</td>
                        <td>+500 u.</td>
                        <td>Cargol M8x50 (CR-M8-100)</td>
                        <td>J. Pérez (ID: 101)</td>
                        <td><button class="btn btn-edit btn-small">Veure</button></td>
                    </tr>
                    <tr>
                        <td>M9001</td>
                        <td>2025-12-04 09:15</td>
                        <td class="status-danger">SORTIDA</td>
                        <td>-10 u.</td>
                        <td>Tornavís Phillips (PH-3450)</td>
                        <td>A. García (ID: 102)</td>
                        <td><button class="btn btn-edit btn-small">Veure</button></td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </main>
</body>
</html>