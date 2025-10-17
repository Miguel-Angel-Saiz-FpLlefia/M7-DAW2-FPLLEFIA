<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <?php include("header.php") ?>

    <div class="main-container">
        <div class="form-container">
            <h2>Registro de Usuario</h2>
        <form action="home.php" method="post" enctype="multipart/form-data">
            <label for="usuario">Usuario:</label>
            <input type="text" id="name" name="name" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <label for="foto">Foto de perfil:</label>
            <input type="file" id="foto" name="foto" accept="image/*">

            <button type="submit">Enviar</button>
        </form>
        </div>
    </div>
</body>

</html>