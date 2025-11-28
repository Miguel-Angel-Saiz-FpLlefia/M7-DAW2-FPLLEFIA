<?php
    session_start();
    require_once('config.php');

    //1. Verificar que el formulario ha sido enviado
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        //2. Recoger los datos del formulario
        $email = $_POST['email'];
        $password = $_POST['password'];

        //3. Preparar la consulta para obtener el usuario por email
        $smtp = $mysqli->prepare("SELECT id, nom, email, password, rol FROM USUARIS WHERE email = ?");

        //4. Comprobar que la preparacion tuvo exito
        if(!$smtp) {
            die('Error en la preparación: ' . $mysqli->error);
        }

        //5. Bindear los parametros
        $smtp->bind_param('s', $email);

        //6. Ejecutamos la consulta
        $smtp->execute();

        //7. Obtener el reusltado
        $result = $smtp->get_result();

        //8. Compruebo si se encontro un usuario
        if($result->num_rows === 1) {
            $user = $result->fetch_assoc();
        }

        //9. Verificar la contraseña
        if(password_verify($password, $user['password'])) {
            //10. Iniciar session y guardar datos en la sesion
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nom'] = $user['nom'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_rol'] = $user['rol'];
            header('Location: index.php');
            exit();
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "No se encontro ningun usuario con ese email.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="login.php">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>