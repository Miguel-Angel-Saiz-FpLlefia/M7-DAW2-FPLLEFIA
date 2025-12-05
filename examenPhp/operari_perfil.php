<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Editar Perfil</title>
    <link rel="stylesheet" href="style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="dashboard-body">
    
    <aside class="sidebar operari-sidebar">
        <div class="logo">Operari StockMaster</div>
        <nav class="main-nav">
            <a href="operari_dashboard.php" class="nav-item">📝 Registrar Entrada</a>
            <a href="operari_moviments.php" class="nav-item">🔍 Les Meves Entrades</a>
            <a href="operari_perfil.php" class="nav-item active">👤 Editar Perfil</a>
        </nav>
        <div class="user-info">
            <span>👋 Operari: Joan Pérez</span>
            <a href="login.php" class="logout">Tancar Sessió</a>
        </div>
    </aside>

    <main class="content">
        <header class="header">
            <h2>Editar Perfil d'Usuari</h2>
        </header>

        <div class="card form-card">
            <h3>Dades Personals</h3>
            <form>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" value="Joan" required>
                </div>
                <div class="form-group">
                    <label for="cognoms">Cognoms</label>
                    <input type="text" id="cognoms" name="cognoms" value="Pérez Vila" required>
                </div>
                <div class="form-group">
                    <label for="email">Correu Electrònic (Email)</label>
                    <input type="email" id="email" name="email" value="j.perez@stockmaster.com" required>
                </div>
                <button type="submit" class="btn btn-primary btn-full-width">Actualitzar Dades</button>
            </form>

            <h3 class="mt-4">Canviar Contrasenya</h3>
            <form class="mt-2">
                <div class="form-group">
                    <label for="current-password">Contrasenya Actual</label>
                    <input type="password" id="current-password" name="current-password" required>
                </div>
                <div class="form-group">
                    <label for="new-password">Nova Contrasenya</label>
                    <input type="password" id="new-password" name="new-password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirmar Nova Contrasenya</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <button type="submit" class="btn btn-danger btn-full-width">Canviar Contrasenya</button>
            </form>
        </div>

    </main>
</body>
</html>