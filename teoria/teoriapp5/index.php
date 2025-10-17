<?php
    //Primera clase con sesiones

    session_start();

    $_SESSION['user'] = "Miguel";
    $_SESSION['role'] = "admin";

    echo "sesión iniciada con exito";
    echo "<br>";

    echo "Usuario: " .$_SESSION['user'];
    echo "<br>";
    echo "Rol: " .$_SESSION['role'];
    echo "<br>";
?>