<?php
    include 'config.php';
    include 'data.php';

    $result = returnUsersData();

    session_start();
    if(isset($_SESSION['user_nom'])) {
        echo "<h2>Bienvenido, " . htmlspecialchars($_SESSION['user_nom']);
    }

    echo "<table border='1' cellpadding='8' cellspacing='0'>";

    echo "<tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
        </tr>";

    foreach($result as $user) {
        echo "<tr>";
        echo "<td>" . $user['id'] . "</td>";
        echo "<td>" . htmlspecialchars($user['nom']) . "</td>";
        echo "<td>" . htmlspecialchars($user['email']) . "</td>";
        echo "<td>" . htmlspecialchars($user['rol']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";


?>