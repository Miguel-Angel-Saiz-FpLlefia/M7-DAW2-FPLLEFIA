<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>
<body>

<header>
  <div class="container">
    <div class="logo">
      <img src="img/descarga.jfif" alt="Logo Empresa" />
    </div>
    <?php
        if(isset($_SESSION['user'])){
            echo '
                <div class="welcome">
                <span>Bienvenido, '.$_SESSION['user'].'</span>
                </div>
                <form action="logout.php" method="post" enctype="multipart/form-data">
                    <button type="submit" class="logout-btn">Cerrar sesión</button>
                </form>
            ';
        }
    ?>
  </div>
</header>
</body>
</html>