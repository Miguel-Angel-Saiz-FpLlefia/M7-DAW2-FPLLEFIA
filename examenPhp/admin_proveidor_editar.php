<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Editar Proveïdor</title>
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
            <span>👋 Admin Logístic</span>
            <a href="login.php" class="logout">Tancar Sessió</a>
        </div>
    </aside>

    <main class="content">
        <header class="header">
            <h2>Editar Proveïdor: Ferreteria Ràpida S.L.</h2>
            <a href="admin_proveidors.php" class="btn btn-secondary">← Tornar a la Llista</a>
        </header>

        <div class="card form-card large-form-card">
            <form>
                 <div class="form-group">
                    <label for="proveidor_id_readonly">ID Proveïdor</label>
                    <input type="text" id="proveidor_id_readonly" value="PRV-001" readonly class="readonly-input">
                </div>

                <h3>Dades Fiscals i Contacte</h3>
                <div class="form-group">
                    <label for="nom_fiscal">Nom Fiscal de l'Empresa</label>
                    <input type="text" id="nom_fiscal" name="nom_fiscal" value="Ferreteria Ràpida S.L." required>
                </div>

                <div class="form-group-inline">
                    <div class="form-group half-width">
                        <label for="nif">NIF/CIF</label>
                        <input type="text" id="nif" name="nif" value="B67890123" required>
                    </div>
                    <div class="form-group half-width">
                        <label for="adreca">Adreça Postal Completa</label>
                        <input type="text" id="adreca" name="adreca" value="Carrer dels Torns, 15, Barcelona" required>
                    </div>
                </div>

                <h3 class="mt-4">Contacte Logístic</h3>
                <div class="form-group">
                    <label for="contacte">Persona de Contacte Principal</label>
                    <input type="text" id="contacte" name="contacte" value="Laura Giménez" required>
                </div>
                <div class="form-group-inline">
                     <div class="form-group half-width">
                        <label for="telefon">Telèfon</label>
                        <input type="tel" id="telefon" name="telefon" value="931112233" required>
                    </div>
                    <div class="form-group half-width">
                        <label for="email">Correu Electrònic (Email)</label>
                        <input type="email" id="email" name="email" value="laura@ferrapida.com" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="observacions">Observacions (Opcional)</label>
                    <textarea id="observacions" name="observacions" rows="3">Excel·lent servei, només proveeixen eines manuals i petits materials.</textarea>
                </div>

                <div class="actions-group mt-4">
                    <button type="submit" class="btn btn-primary">✅ Actualitzar Proveïdor</button>
                    <button type="button" class="btn btn-delete">🗑️ Eliminar Proveïdor</button>
                </div>
            </form>
        </div>

    </main>
</body>
</html>