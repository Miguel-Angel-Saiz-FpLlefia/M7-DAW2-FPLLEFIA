<?php
    session_start();
    require_once('../../config.php');

    if (!isset($_SESSION['user_rol']) || $_SESSION['user_rol'] !== "admin") {
        header('Location: ../../no_permission.php');
        exit();
    }
    // Recoger el ID de la noticia a eliminar
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $news_id = $_GET['id'];
    } else {
        die('ID de noticia no proporcionado.');
    }

    // Preparar y ejecutar la consulta para eliminar la noticia
    $stmt = $mysqli->prepare("DELETE FROM NOTICIES WHERE id = ?");
    if (!$stmt) {
        die('Error en la preparación: ' . $mysqli->error);
    }
    $stmt->bind_param("i", $news_id);
    if (!$stmt->execute()) {
        die('Error en la ejecución: ' . $stmt->error);
    }
    $stmt->close();
    header('Location: adminNews.php');
    exit();
?>