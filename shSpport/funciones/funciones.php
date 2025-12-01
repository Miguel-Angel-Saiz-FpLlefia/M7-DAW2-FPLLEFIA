<?php
    include_once "../shSpport/config/config.php";
    
    function llegirNoticies($mysqli) {
        $sql = "SELECT 
                    n.*, 
                    u.nombre AS usuario_nombre,
                    u.apellido AS usuario_apellido
                FROM noticias n
                INNER JOIN usuarios u ON n.usuario_id = u.usuario_id
                ORDER BY n.fecha_publicacion DESC";

        $stmt = $mysqli->prepare($sql);

        if (!$stmt) {
            die("ERROR EN PREPARE: " . $mysqli->error . "<br>SQL: " . $sql);
        }

        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    function llegirUltimesNoticies($mysqli) {
        $sql = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC LIMIT 3";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    function getNoticiaById($id, $mysqli) {
        $sql = "SELECT 
                    n.*, 
                    u.nombre AS usuario_nombre,
                    u.apellido AS usuario_apellido
                FROM noticias n
                INNER JOIN usuarios u ON n.usuario_id = u.usuario_id
                WHERE noticia_id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    function getTestimonios($mysqli) {
        $sql = "SELECT u.foto, u.nombre, u.apellido, t.contenido AS testimonio, t.puntuacion
            FROM testimonios t
            INNER JOIN usuarios u ON u.usuario_id = t.usuario_id
            WHERE t.es_aprobado = 1
            ORDER BY t.fecha_testimonio DESC";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    function getPortfolio($mysqli) {
        $sql = "SELECT p.*, td.tipo 
            FROM portfolio p
            INNER JOIN tipoDeporte td ON p.id_tipoDeporte = td.id_tipoDeporte
            ORDER BY p.fecha_proyecto DESC";
            
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    function getComentariosByNoticia($noticia_id, $mysqli) {
        $sql = "SELECT 
                    c.comentario_id,
                    c.contenido,
                    c.fecha_comentario,
                    c.parent_comentario_id,
                    u.usuario_id,
                    u.nombre,
                    u.apellido,
                    u.foto
                FROM comentarios c
                LEFT JOIN usuarios u ON c.usuario_id = u.usuario_id
                WHERE c.noticia_id = ?
                ORDER BY c.fecha_comentario ASC";

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $noticia_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    function getRespuestasComentario($parent_id, $mysqli) {
        $sql = "SELECT 
                    c.comentario_id,
                    c.contenido,
                    c.fecha_comentario,
                    c.parent_comentario_id,
                    u.usuario_id,
                    u.nombre,
                    u.apellido,
                    u.foto
                FROM comentarios c
                LEFT JOIN usuarios u ON c.usuario_id = u.usuario_id
                WHERE c.parent_comentario_id = ?
                ORDER BY c.fecha_comentario ASC";

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $parent_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    function getFaqs($mysqli) {
        $sql = "SELECT * FROM faqs";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    function llegitComentarisSencers($mysqli) {
        $sql = "SELECT * FROM comentarios";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    function llegirDatalleResercaSencer($mysqli) {
        $sql = "SELECT * FROM detalle_reserva";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }