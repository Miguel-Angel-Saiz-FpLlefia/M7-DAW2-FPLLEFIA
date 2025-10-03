<?php
    $usuarios = [
        [
            "user" => "Miguel",
            "password" => "1234"
        ],
        [
            "user" => "Joel",
            "password" => "1234"
        ]
    ];

    $mensaje = "";

    if (isset($_POST['nomUsuari']) && isset($_POST['contrasenya'])) {
        $nomUsuario = $_POST['nomUsuari'];
        $contrasenya = $_POST['contrasenya'];
        $encontrado = false;
        foreach ($usuarios as $usuario) {
            if ($usuario['user'] === $nomUsuario && $usuario['password'] === $contrasenya) {
                $encontrado = true;
                break;
            }
        }
        if ($encontrado) {
            $mensaje = "Inicio de sesión correcto";
        } else {
            $mensaje = "Usuario o contraseña incorrectos";
        }
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
    <form action="formulario.php" method="post">
        <input type="text" name="nomUsuari" placeholder="nombre:">
        <input type="password" name="contrasenya" placeholder="contraseña:">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php if ($mensaje): ?>
        <p><?php echo $mensaje; ?></p>
<?php endif; ?>