<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Editar Producte</title>
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
            <span>👋 Admin Logístic</span>
            <a href="login.php" class="logout">Tancar Sessió</a>
        </div>
    </aside>

    <main class="content">
        <header class="header">
            <h2>Editar Producte: Tornavís Phillips (P3)</h2>
            <a href="admin_dashboard.php" class="btn btn-secondary">← Tornar a la Llista</a>
        </header>

        <div class="card form-card large-form-card">
            <form>
                <div class="form-group">
                    <label for="product_id_readonly">ID Producte</label>
                    <input type="text" id="product_id_readonly" value="12034" readonly class="readonly-input">
                </div>

                <h3>Informació Bàsica</h3>
                <div class="form-group">
                    <label for="nom">Nom del Producte</label>
                    <input type="text" id="nom" name="nom" value="Tornavís Phillips (P3)" required>
                </div>

                <div class="form-group-inline">
                    <div class="form-group half-width">
                        <label for="sku">Codi SKU (Identificador Únic)</label>
                         <input type="text" id="sku" name="sku" value="PH-3450" required>
                    </div>
                    <div class="form-group half-width">
                        <label for="unitat">Unitat de Mesura</label>
                        <select id="unitat" name="unitat" required>
                            <option value="unitats" selected>unitats</option>
                            <option value="metres">metres</option>
                            <option value="quilograms">quilograms (Kg)</option>
                            <option value="litres">litres (L)</option>
                        </select>
                    </div>
                </div>

                <h3 class="mt-4">Gestió d'Inventari</h3>
                
                <div class="form-group">
                    <label for="stock_actual_readonly">**Stock Actual (No Ed.)**</label>
                    <input type="text" id="stock_actual_readonly" value="450 unitats" readonly class="readonly-input">
                </div>

                <div class="form-group-inline">
                    <div class="form-group half-width">
                        <label for="stock_minim">Stock Mínim (Alerta)</label>
                        <input type="number" id="stock_minim" name="stock_minim" min="0" value="50" required>
                    </div>
                    <div class="form-group half-width">
                         <label for="proveidor">Proveïdor Principal</label>
                        <select id="proveidor" name="proveidor">
                            <option value="">Selecciona un Proveïdor...</option>
                            <option value="PRV-001" selected>Ferreteria Ràpida S.L.</option>
                            <option value="PRV-002">Fixacions BCN</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="descripcio">Descripció Detallada (Opcional)</label>
                    <textarea id="descripcio" name="descripcio" rows="4">Tornavís d'alta resistència amb punta Phillips de mida 3. Us per muntatges de maquinària pesada.</textarea>
                </div>

                <div class="actions-group mt-4">
                    <button type="submit" class="btn btn-primary">✅ Actualitzar Producte</button>
                    <button type="button" class="btn btn-delete">🗑️ Eliminar Producte</button>
                </div>
            </form>
        </div>

    </main>
</body>
</html>