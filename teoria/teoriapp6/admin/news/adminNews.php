<?php
    session_start();
    require '../../config.php';
    if(!isset($_SESSION['user_rol']) || $_SESSION['user_rol'] !== "admin") {
        header('Location ../../no`permission.php');
        exit();
    }
    // Recoger las noricias de la base de datos
    $result = $mysqli->query('SELECT * FROM NOTICIES ORDER BY data_publicacio DESC');
    $news = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News panel</title>
</head>
<body>
    <!-- Tabla con las noticias  las acciiones, editar, eliminar -->
     <h1>Gestion de Noticias</h1>
     <a href="createNews.php">Crear Nueva noticia</a>
     <!-- creo la tabla con html y los tr con foreach -->
      <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Subtitulo</th>
            <th>Cos</th>
            <th>Data</th>
            <th>Acciones</th>
        </tr>
        <?php foreach($news as $new): ?>
            <tr>
                <td><?php echo htmlspecialchars($new['id']); ?></td>
                <td><?php echo htmlspecialchars($new['titol']); ?></td>
                <td><?php echo htmlspecialchars($new['subtitol']); ?></td>
                <td><?php echo htmlspecialchars($new['cos']); ?></td>
                <td><?php echo htmlspecialchars($new['data_publicacio']); ?></td>
                <td>
                    <a href="editNews.php?id=<?php echo $new['id']; ?>">Editar</a>
                    <a href="deleteNews.php?id=<?php echo $new['id']; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar esta noticia?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
      </table>
</body>
</html>
