<?php
    $user = "miguel";
    $password = "1234";
    if ($_POST['name'] === $user && $_POST['password'] === $password){
        session_start();
        $_SESSION['user'] = $_POST['name'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['foto'] = $_POST['foto'];
    
        include('header.php');
    }else{
        header('Location: login.php');
    }
?>
<header>
    <link rel="stylesheet" href="login.css">
</header>
<div class="main-container">
    <div class="form-container">
        <h2>Registro de un personaje</h2>
        <form action="personajes.php" method="post" enctype="multipart/form-data">
            <label for="usuario">Nombre personaje:</label>
            <input type="text" id="name" name="name" required>

            <label for="contrasena">Habilidad del personaje:</label>
            <input type="password" id="password" name="password" required>

            <label for="foto">Foto del personaje:</label>
            <input type="file" id="foto" name="foto" accept="image/*">

            <button type="submit">Enviar</button>
        </form>
    </div>
</div>