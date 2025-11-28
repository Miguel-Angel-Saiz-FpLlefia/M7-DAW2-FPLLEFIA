<?php
    require_once('config.php');
    session_start();

    //Verificar si el formulario ha sido enviado

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        //1. Recoger los datos del formulario
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rol = "user";

        //2. Hasheamos la contraseña antes de guardarla
        $password_hasheada = password_hash($password, PASSWORD_DEFAULT);

        //3. Preparamos la consulta para insertar al nuevo usuario
        $stmt = $mysqli->prepare("INSERT INTO USUARIS (nom, email, password, rol, data_registre) VALUES (?,?,?,'user', NOW())");

        //4. Comprobar que la preparación tuvo éxito
        if(!$stmt) {
            die('error en la preparación: ' . $mysqli->error);
        }

        //5. Bindeamos los parametros
        $stmt->bind_param('sss', $nom, $email, $password_hasheada);

        //6. Ejecutamos la consulta
        if($stmt->execute()) {
            echo 'usuario registrado correctamente. <a href="login.php">Iniciar sesión</a>';
        }else {
            echo 'Error al registrar el usuario: ' . $stmt->error;
        }

        //7. Cerramos la conexion
        $stmt->close();
        $mysqli->close();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form method="POST" action="register.php">
        <label for="nom">Nombre:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Registrar">
</body>
</html>