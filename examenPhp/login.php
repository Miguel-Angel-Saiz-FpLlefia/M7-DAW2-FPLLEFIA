<!DOCTYPE html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StockMaster - Iniciar Sessió</title>
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
        <h2>Accés al Sistema</h2>
        <form>
          <div class="form-group">
            <label for="email">Correu Electrònic</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="password">Contrasenya</label>
            <input type="password" id="password" name="password" required />
          </div>
          <button type="submit" class="btn btn-primary">Iniciar Sessió</button>
        </form>
        <p class="mt-3">
          No tens compte? <a href="register.php">Ir a registro</a>
        </p>
      </div>
    </div>
  </body>
</html>
