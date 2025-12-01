<?php
    include_once "../shSpport/config/config.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeportesPro | Testimonios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS Base (Copiado del index.html para mantener la consistencia) */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #ff6b35;
            --secondary-color: #004e89;
            --accent-color: #1a659e;
            --dark-bg: #1c1c1e;
            --light-bg: #f5f5f7;
            --text-dark: #1d1d1f;
            --text-light: #fff;
            --gradient-primary: linear-gradient(135deg, #ff6b35 0%, #ff8c42 100%);
            --gradient-secondary: linear-gradient(135deg, #004e89 0%, #1a659e 100%);
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background: white; /* Aseguramos un fondo claro para el contenido principal */
        }

        /* Header y Navegación */
        header {
            background: var(--dark-bg);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after { /* Clase 'active' para la página actual */
            width: 100%;
        }

        .user-actions {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .btn {
            padding: 0.6rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: var(--text-light);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
        }

        .btn-outline {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
        }

        .btn-outline:hover {
            background: var(--primary-color);
            color: var(--text-light);
        }
        
        /* Estilos generales de sección copiados del index */
        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .section-header p {
            font-size: 1.1rem;
            color: #666;
        }
        
        /* Footer (Copiado del index) */
        footer {
            background: var(--dark-bg);
            color: var(--text-light);
            padding: 60px 5% 20px;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-section h3 {
            margin-bottom: 1.5rem;
            color: var(--primary-color);
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.8rem;
        }

        .footer-section a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: var(--primary-color);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s;
        }

        .social-links a:hover {
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #888;
        }

        /* ESTILOS ESPECÍFICOS PARA TESTIMONIOS */

        .testimonials-hero {
            background: var(--gradient-secondary);
            padding: 150px 5% 50px; 
            text-align: center;
            color: var(--text-light);
        }

        .testimonials-hero h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        .testimonials-hero p {
            color: #ccc;
        }

        .testimonials-section {
            padding: 80px 5%;
            background: var(--light-bg);
        }

        .testimonials-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            position: relative;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .quote-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
            opacity: 0.7;
        }

        .testimonial-text {
            font-size: 1.1rem;
            color: var(--text-dark);
            font-style: italic;
            margin-bottom: 1.5rem;
        }

        .testimonial-rating {
            color: gold;
            margin-bottom: 1rem;
        }
        
        .testimonial-rating i {
            color: var(--primary-color);
        }

        .reviewer-info {
            display: flex;
            align-items: center;
            margin-top: 1.5rem;
            border-top: 1px solid #eee;
            padding-top: 1rem;
        }

        .reviewer-avatar {
            width: 50px;
            height: 50px;
            background: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            font-size: 1.5rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .reviewer-details h4 {
            font-size: 1.1rem;
            margin: 0;
            color: var(--secondary-color);
        }

        .reviewer-details p {
            font-size: 0.9rem;
            color: #666;
            margin: 0;
            line-height: 1.2;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .testimonials-hero {
                padding-top: 120px;
            }

            .testimonials-hero h1 {
                font-size: 2.5rem;
            }

            .testimonials-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include_once "header.php"; ?>

    <section class="testimonials-hero">
        <div class="section-header" style="margin-bottom: 0;">
            <h1>Opiniones de Nuestros Clientes</h1>
            <p>Lee lo que dicen los aficionados sobre sus experiencias al comprar entradas con DeportesPro.</p>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="testimonials-container">
            
            <?php
                include_once "funciones/funciones.php";
                $testimonios = getTestimonios($mysqli);

                foreach ($testimonios as $testimonio) {
                    $iniciales = mb_strtoupper(mb_substr($testimonio['nombre'], 0, 1) . mb_substr($testimonio['apellido'], 0, 1));
                    
                    // Generar las estrellas
                    $estrellas = '';
                    for ($i = 0; $i < $testimonio['puntuacion']; $i++) {
                        $estrellas .= '<i class="fas fa-star"></i>';
                    }
                    
                    echo '<div class="testimonial-card">
                            <div class="quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="testimonial-rating">' . $estrellas . '</div>
                            <div class="testimonial-text">"' . htmlspecialchars($testimonio['testimonio']) . '"</div>
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">' . htmlspecialchars($iniciales) . '</div>
                                <div class="reviewer-details">
                                    <h4>' . htmlspecialchars($testimonio['nombre'] . ' ' . $testimonio['apellido']) . '</h4>
                                    <p>' . htmlspecialchars($testimonio['cargo']) . '</p>
                                </div>
                            </div>
                        </div>';
                }
            ?>

        </div>
    </section>

    <?php include_once "footer.php"; ?>
</body>
</html>