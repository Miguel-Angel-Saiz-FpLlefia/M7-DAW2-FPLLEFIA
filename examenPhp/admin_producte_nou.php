<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Crear Nou Producte</title>
    <link rel="stylesheet" href="style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="dashboard-body">
    
    <aside class="sidebar">
        <div class="logo">StockMaster Industrial</div>
        <nav class="main-nav">
            <a href="admin_productes.php" class="nav-item active">📦 Gestió de Productes</a>
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
            <h2>Crear un Nou Producte</h2>
            <a href="admin_dashboard.php" class="btn btn-secondary">← Tornar a la Llista</a>
        </header>

        <div class="card form-card large-form-card">
            <form>
                <h3>Informació Bàsica</h3>
                <div class="form-group">
                    <label for="nom">Nom del Producte</label>
                    <input type="text" id="nom" name="nom" required>
                </div>

                <div class="form-group-inline">
                    <div class="form-group half-width">
                        <label for="sku">Codi SKU (Identificador Únic)</label>
                        <input type="text" id="sku" name="sku" required>
                    </div>
                    <div class="form-group half-width">
                        <label for="unitat">Unitat de Mesura</label>
                        <select id="unitat" name="unitat" required>
                            <option value="unitats">unitats</option>
                            <option value="metres">metres</option>
                            <option value="quilograms">quilograms (Kg)</option>
                            <option value="litres">litres (L)</option>
                        </select>
                    </div>
                </div>

                <h3 class="mt-4">Gestió d'Inventari</h3>
                <div class="form-group-inline">
                    <div class="form-group half-width">
                        <label for="stock_inicial">Stock Inicial (Entrada)</label>
                        <input type="number" id="stock_inicial" name="stock_inicial" min="0" value="0" required>
                    </div>
                    <div class="form-group half-width">
                        <label for="stock_minim">Stock Mínim (Alerta)</label>
                        <input type="number" id="stock_minim" name="stock_minim" min="0" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="proveidor">Proveïdor Principal</label>
                    <select id="proveidor" name="proveidor">
                        <option value="">Selecciona un Proveïdor...</option>
                        <option value="PRV-001">Ferreteria Ràpida S.L.</option>
                        <option value="PRV-002">Fixacions BCN</option>
                        </select>
                </div>

                <div class="form-group">
                    <label for="descripcio">Descripció Detallada (Opcional)</label>
                    <textarea id="descripcio" name="descripcio" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-success btn-full-width mt-4">💾 Crear Producte i Guardar</button>
            </form>
        </div>

    </main>
</body>
</html>