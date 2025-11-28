<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeportesPro | Noticias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS del Index (Asegúrate de copiar el mismo bloque de <style> de tu index.html aquí) */
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

        /* ESTILOS ESPECÍFICOS PARA NOTICIAS */

        .news-hero {
            background: var(--light-bg);
            padding: 150px 5% 50px; /* Padding ajustado para después del header fijo */
            text-align: center;
        }

        .news-hero h1 {
            font-size: 3rem;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .news-section {
            padding: 50px 5% 80px;
            background: white;
        }

        .news-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .news-card {
            background: var(--light-bg);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .news-card-image {
            height: 220px;
            width: 100%;
            background: var(--gradient-secondary); /* Placeholder si no hay imagen real */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }
        
        .news-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .news-card-image i {
            font-size: 4rem;
            color: rgba(255,255,255,0.7);
        }

        .news-tag {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--primary-color);
            color: var(--text-light);
            padding: 0.3rem 1rem;
            border-radius: 5px;
            font-size: 0.85rem;
            font-weight: 600;
            z-index: 10;
        }

        .news-card-content {
            padding: 1.5rem;
        }

        .news-card-content h3 {
            font-size: 1.3rem;
            margin-bottom: 0.8rem;
            color: var(--text-dark);
            line-height: 1.4;
        }

        .news-meta {
            font-size: 0.9rem;
            color: #888;
            margin-bottom: 1rem;
        }

        .news-meta i {
            margin-right: 0.5rem;
            color: var(--primary-color);
        }

        .news-card-content p {
            color: #666;
            margin-bottom: 1.5rem;
            font-size: 1rem;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            /* Mantenemos el responsive del index */
            .nav-links {
                display: none;
            }

            .news-hero {
                padding-top: 120px;
            }

            .news-hero h1 {
                font-size: 2rem;
            }

            .news-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo"><i class="fas fa-trophy"></i> DeportesPro</div>
            <ul class="nav-links">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="noticias.html" class="active">Noticias</a></li> <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="testimonios.html">Testimonios</a></li>
                <li><a href="faqs.html">FAQs</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
            <div class="user-actions">
                <a href="login.php" class="btn btn-outline">Iniciar Sesión</a>
                <a href="register.php" class="btn btn-primary">Registrarse</a>
            </div>
        </nav>
    </header>

    <section class="news-hero">
        <div class="section-header" style="margin-bottom: 0;">
            <h1>Últimas Noticias Deportivas</h1>
            <p>Mantente al día con los resultados, fichajes y análisis más recientes.</p>
        </div>
    </section>

    <section class="news-section">
        <div class="news-container">
            
            <article class="news-card">
                <div class="news-card-image">
                    <span class="news-tag">Fútbol</span>
                    <i class="fas fa-futbol"></i> 
                </div>
                <div class="news-card-content">
                    <h3>El Clásico Femenino Bate Récord de Asistencia Mundial</h3>
                    <div class="news-meta">
                        <i class="far fa-calendar-alt"></i> 15 Nov 2024
                        <i class="fas fa-user"></i> Juan Pérez
                    </div>
                    <p>El encuentro entre el FC Barcelona y el Real Madrid superó los 95.000 espectadores, marcando un hito histórico en el deporte.</p>
                    <a href="#" class="btn btn-outline">Leer Más</a>
                </div>
            </article>

            <article class="news-card">
                <div class="news-card-image" style="background: var(--gradient-primary);">
                    <span class="news-tag" style="background: var(--secondary-color);">Básquet</span>
                    <i class="fas fa-basketball-ball"></i> 
                </div>
                <div class="news-card-content">
                    <h3>Lesión de la Estrella de la NBA en la Jornada Inaugural</h3>
                    <div class="news-meta">
                        <i class="far fa-calendar-alt"></i> 14 Nov 2024
                        <i class="fas fa-user"></i> Ana Gómez
                    </div>
                    <p>El base de los Lakers se retira del partido con un esguince de tobillo, lo que podría alejarlo de las canchas por varias semanas.</p>
                    <a href="#" class="btn btn-outline">Leer Más</a>
                </div>
            </article>

            <article class="news-card">
                <div class="news-card-image">
                    <span class="news-tag">Balonmano</span>
                    <i class="fas fa-volleyball-ball"></i> 
                </div>
                <div class="news-card-content">
                    <h3>Victoria Épica: España se Clasifica para el Mundial</h3>
                    <div class="news-meta">
                        <i class="far fa-calendar-alt"></i> 12 Nov 2024
                        <i class="fas fa-user"></i> Carlos Ruiz
                    </div>
                    <p>La selección masculina de balonmano selló su pase tras un emocionante partido de clasificación en el último minuto.</p>
                    <a href="#" class="btn btn-outline">Leer Más</a>
                </div>
            </article>

            <article class="news-card">
                <div class="news-card-image" style="background: var(--gradient-primary);">
                    <span class="news-tag" style="background: var(--secondary-color);">Fútbol Sala</span>
                    <i class="fas fa-running"></i> 
                </div>
                <div class="news-card-content">
                    <h3>Mercado de Invierno: Grandes Fichajes a la Vista</h3>
                    <div class="news-meta">
                        <i class="far fa-calendar-alt"></i> 11 Nov 2024
                        <i class="fas fa-user"></i> Marta Llorca
                    </div>
                    <p>Los principales equipos de la LNFS buscan reforzar sus plantillas para el tramo final de la temporada.</p>
                    <a href="#" class="btn btn-outline">Leer Más</a>
                </div>
            </article>

            <article class="news-card">
                <div class="news-card-image">
                    <span class="news-tag">Fútbol</span>
                    <i class="fas fa-trophy"></i> 
                </div>
                <div class="news-card-content">
                    <h3>Análisis: ¿Quién Ganará la Champions League este Año?</h3>
                    <div class="news-meta">
                        <i class="far fa-calendar-alt"></i> 10 Nov 2024
                        <i class="fas fa-user"></i> Juan Pérez
                    </div>
                    <p>Un repaso a los favoritos y las sorpresas de la fase de grupos del torneo más prestigioso de Europa.</p>
                    <a href="#" class="btn btn-outline">Leer Más</a>
                </div>
            </article>

            <article class="news-card">
                <div class="news-card-image" style="background: var(--gradient-secondary);">
                    <span class="news-tag">Básquet</span>
                    <i class="fas fa-star"></i> 
                </div>
                <div class="news-card-content">
                    <h3>MVP de la Semana en la ACB: El Joven Español Domina</h3>
                    <div class="news-meta">
                        <i class="far fa-calendar-alt"></i> 09 Nov 2024
                        <i class="fas fa-user"></i> Ana Gómez
                    </div>
                    <p>Su actuación estelar le valió el reconocimiento de Jugador Más Valioso por segunda semana consecutiva.</p>
                    <a href="#" class="btn btn-outline">Leer Más</a>
                </div>
            </article>

        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>DeportesPro</h3>
                <p>Tu plataforma de confianza para adquirir entradas a los mejores eventos deportivos.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="noticias.html">Noticias</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="testimonios.html">Testimonios</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Deportes</h3>
                <ul>
                    <li><a href="#">Fútbol</a></li>
                    <li><a href="#">Básquet</a></li>
                    <li><a href="#">Balonmano</a></li>
                    <li><a href="#">Fútbol Sala</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Soporte</h3>
                <ul>
                    <li><a href="faqs.html">Preguntas Frecuentes</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                    <li><a href="#">Términos y Condiciones</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 DeportesPro. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>