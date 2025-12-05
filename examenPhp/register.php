<!DOCTYPE html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StockMaster - Nou Registre d'Usuari</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="login-body">
    <div class="login-container">
      <div class="login-card">
        <h1>StockMaster</h1>
        <h2>Registre de Nou Operari</h2>
        <form>
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required />
          </div>

          <div class="form-group">
            <label for="cognoms">Cognoms</label>
            <input type="text" id="cognoms" name="cognoms" required />
          </div>

          <div class="form-group">
            <label for="email">Correu Electrònic (Email)</label>
            <input type="email" id="email" name="email" required />
          </div>

          <hr style="margin: 20px 0; border-color: #eee" />

          <div class="form-group">
            <label for="password">Contrasenya</label>
            <input type="password" id="password" name="password" required />
          </div>

          <div class="form-group">
            <label for="password_confirm">Confirmar Contrasenya</label>
            <input
              type="password"
              id="password_confirm"
              name="password_confirm"
              required
            />
          </div>

          <input type="hidden" name="rol" value="operari" />

          <button type="submit" class="btn btn-success mt-3">
            Registrar i Accedir
          </button>
        </form>

        <p class="mt-3">
          Ja tens un compte? <a href="login.php">Iniciar Sessió</a>
        </p>
      </div>
    </div>
  </body>
</html>
