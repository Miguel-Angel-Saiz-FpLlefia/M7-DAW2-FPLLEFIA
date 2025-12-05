<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="dashboard-body">
    <aside class="sidebar operari-sidebar">
        <div class="logo">Operari StockMaster</div>
        <nav class="main-nav">
            <a href="#" class="nav-item active">📝 Registrar Entrada</a>
            <a href="operari_moviments.php" class="nav-item">🔍 Les Meves Entrades</a>
            <a href="operari_perfil.php" class="nav-item">👤 Editar Perfil</a>
        </nav>
        <div class="user-info">
            <span>👋 Operari User</span>
            <a href="#" class="logout">Tancar Sessió</a>
        </div>
    </aside>
    <main class="content">
        <header class="header">
            <h2>Registrar Nova Entrada de Producte</h2>
        </header>
        
        <div class="card form-card">
            <form>
                <div class="form-group">
                    <label for="producte">Producte</label>
                    <select id="producte" required>
                        <option value="">Selecciona un producte...</option>
                        <option value="12034">Tornavís Phillips (P3)</option>
                        <option value="99230">Cargol M8</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantitat">Quantitat d'Entrada</label>
                    <input type="number" id="quantitat" name="quantitat" min="1" required>
                </div>
                <div class="form-group">
                    <label for="notes">Notes Addicionals (Opcional)</label>
                    <textarea id="notes" name="notes"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-full-width">Registrar Entrada</button>
            </form>
        </div>

        <div class="error-page" style="display: none;">
             <h2>🚫 Accés denegat</h2>
             <p>No tens permisos per accedir a aquesta secció.</p>
             <a href="#" class="btn btn-secondary">Tornar al Panell</a>
        </div>
    </main>
</body>
</html>
