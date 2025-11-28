<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeportesPro | Contacto</title>
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
            background: white;
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

        /* ESTILOS ESPECÍFICOS PARA CONTACTO */

        .contact-hero {
            background: var(--light-bg);
            padding: 150px 5% 50px; 
            text-align: center;
        }

        .contact-hero h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
            color: var(--secondary-color);
        }

        .contact-section {
            padding: 80px 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 2fr; /* Columna de info y columna de formulario */
            gap: 4rem;
            margin-top: 2rem;
        }

        .contact-info {
            background: var(--secondary-color);
            color: var(--text-light);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 78, 137, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .contact-info-item i {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-right: 1rem;
        }

        .contact-form h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        /* Estilos del Formulario */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.2);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .btn-submit {
            width: 100%;
            font-size: 1.1rem;
        }
        
        /* Sección del Mapa */
        .map-section {
            margin-top: 80px;
            padding: 0 5%;
            max-width: 1400px;
            margin: 80px auto;
        }
        
        .map-container {
            height: 450px; 
            background: #eee; /* Fondo temporal hasta que se cargue el mapa */
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }


        /* Responsive */
        @media (max-width: 992px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .contact-hero {
                padding-top: 120px;
            }

            .contact-hero h1 {
                font-size: 2.5rem;
            }
            
            .map-container {
                height: 350px;
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
                <li><a href="noticias.html">Noticias</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="testimonios.html">Testimonios</a></li>
                <li><a href="faqs.html">FAQs</a></li>
                <li><a href="contacto.html" class="active">Contacto</a></li> </ul>
            <div class="user-actions">
                <a href="login.php" class="btn btn-outline">Iniciar Sesión</a>
                <a href="register.php" class="btn btn-primary">Registrarse</a>
            </div>
        </nav>
    </header>

    <section class="contact-hero">
        <div class="section-header" style="margin-bottom: 0;">
            <h1>Ponte en Contacto con DeportesPro</h1>
            <p>Estamos aquí para resolver tus dudas y ayudarte con tus entradas.</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="contact-grid">
            
            <div class="contact-info">
                <div>
                    <h3>Información de la Sede Principal</h3>
                    <p style="margin-bottom: 2rem; color: #ccc;">Puedes visitarnos o llamarnos durante nuestro horario de oficina.</p>

                    <div class="contact-info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <p style="font-weight: 600;">Dirección de FPLlefià (Sede Educativa)</p>
                            <p style="font-size: 0.9rem;">Carrer de la Sèquia, 1, 08913 Badalona, Barcelona</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <p style="font-weight: 600;">Teléfono</p>
                            <p style="font-size: 0.9rem;">+34 933 88 32 98</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <p style="font-weight: 600;">Correo Electrónico</p>
                            <p style="font-size: 0.9rem;">soporte@deportespro.com</p>
                        </div>
                    </div>
                </div>
                
                <div style="margin-top: 2rem;">
                    <h3>Horario de Atención</h3>
                    <p style="font-size: 0.9rem; color: #ccc;">Lunes a Viernes: 9:00–13:00</p>
                    <p style="font-size: 0.9rem; color: #ccc;">Sábado y Domingo: Cerrado</p>
                </div>
            </div>

            <div class="contact-form">
                <h2>Envíanos un Mensaje</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Tu Mensaje</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Enviar Mensaje</button>
                </form>
            </div>
            
        </div>
    </section>
    
    <section class="map-section">
        <div class="section-header">
            <h2>Ubicación: FPLlefià</h2>
            <p>Aquí puedes encontrar la ubicación de la sede educativa FPLlefià en Badalona.</p>
        </div>
        <div class="map-container">
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