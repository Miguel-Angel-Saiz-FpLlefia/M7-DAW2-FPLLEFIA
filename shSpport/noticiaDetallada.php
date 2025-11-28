<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia Detalle | DeportesPro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Variables y Estilos Base (Copiados del index.html para consistencia) */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #ff6b35;
            --secondary-color: #004e89;
            --dark-bg: #1c1c1e;
            --light-bg: #f5f5f7;
            --text-dark: #1d1d1f;
            --text-light: #fff;
            --gradient-primary: linear-gradient(135deg, #ff6b35 0%, #ff8c42 100%);
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.7;
            color: var(--text-dark);
            background: var(--light-bg);
        }

        /* Header y Navegación (Copiados del index.html) */
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
        
        /* Footer (Copiado del index.html) */
        footer {
            background: var(--dark-bg);
            color: var(--text-light);
            padding: 40px 5% 20px;
        }
        /* ... (Otros estilos de navegación y footer omitidos por brevedad) ... */


        /* ESTILOS ESPECÍFICOS DE LA NOTICIA */

        .article-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 100px 20px 50px 20px; /* Padding superior para el fixed header */
            background: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            min-height: 80vh;
        }
        
        .article-header h1 {
            font-size: 2.8rem;
            line-height: 1.2;
            margin-bottom: 1rem;
            color: var(--secondary-color);
        }

        .article-meta {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }

        .article-meta span {
            margin-right: 15px;
        }

        .article-meta i {
            color: var(--primary-color);
            margin-right: 5px;
        }
        
        .article-image {
            width: 100%;
            height: 450px;
            background: var(--dark-bg); /* Placeholder de imagen */
            margin-bottom: 2rem;
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .article-image i {
            font-size: 5rem;
            color: rgba(255, 255, 255, 0.5);
        }

        .article-content p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            text-align: justify;
        }
        
        .article-content h2 {
            font-size: 1.8rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        blockquote {
            background: var(--light-bg);
            border-left: 5px solid var(--primary-color);
            padding: 1rem 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            font-size: 1.2rem;
            color: #555;
        }
        
        /* --- Sección de Comentarios --- */

.comments-section {
    margin-top: 4rem;
    padding-top: 2rem;
    border-top: 1px solid #eee;
}

.comments-section h2 {
    font-size: 2rem;
    margin-bottom: 2rem;
    color: var(--secondary-color);
}

/* Formulario de Comentarios (Mantener si no ha cambiado) */
.comment-form textarea {
    width: 100%;
    padding: 1rem;
    border: 1px solid #ddd;
    border-radius: 6px;
    resize: vertical;
    min-height: 100px;
    margin-bottom: 1rem;
}

.comment-form input[type="text"],
.comment-form input[type="email"] {
    padding: 0.8rem;
    border: 1px solid #ddd;
    border-radius: 6px;
    margin-right: 1rem;
    width: 40%;
}

.comment-form button {
    padding: 0.8rem 1.5rem;
    border: none;
    border-radius: 25px;
    font-weight: 600;
    cursor: pointer;
    background: var(--gradient-primary);
    color: var(--text-light);
    transition: opacity 0.3s;
}

.comment-form button:hover {
    opacity: 0.9;
}

.comment-form-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

/* Lista de Comentarios */
.comment-list {
    list-style: none;
    padding: 0;
}

.comment-item {
    display: flex;
    margin-bottom: 2rem;
    padding: 1.5rem;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.03);
    border-left: 3px solid var(--secondary-color);
}

.comment-avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: var(--primary-color);
    color: var(--text-light);
    font-size: 1.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    flex-shrink: 0;
}

.comment-body h4 {
    margin-top: 0;
    margin-bottom: 0.5rem;
    font-size: 1rem;
    color: var(--secondary-color);
}

.comment-body .comment-date {
    font-size: 0.8rem;
    color: #888;
    margin-bottom: 0.5rem;
    display: block;
}

.comment-body p {
    font-size: 1rem;
    margin: 0;
    line-height: 1.6;
}

/* Acciones y Botón de Respuesta (MEJORADO) */
.comment-actions {
    margin-top: 0.8rem;
    padding-top: 0.5rem;
    border-top: 1px solid #f9f9f9;
}

.comment-actions .reply-btn {
    /* Estilo de Botón Tipo Enlace Limpio */
    background: none;
    border: none;
    color: #888; /* Color neutro para que no distraiga */
    font-size: 0.9rem;
    cursor: pointer;
    font-weight: 500;
    transition: color 0.2s, background-color 0.2s, transform 0.2s;
    padding: 0.3rem 0.6rem;
    border-radius: 4px;
}

.comment-actions .reply-btn i {
    color: var(--primary-color); /* Icono con color de marca */
    margin-right: 5px;
}

.comment-actions .reply-btn:hover {
    color: var(--secondary-color); /* Texto cambia a azul corporativo */
    background-color: #f0f0f0;
    transform: translateY(-1px); /* Efecto 3D sutil */
}


/* Respuestas Anidadas */
.comment-replies {
    list-style: none;
    padding-left: 0;
    margin-top: 1.5rem;
    border-left: 2px solid #ddd;
    padding-left: 1rem;
}

.comment-replies .comment-item {
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: #fcfcfc;
    border-left: none;
    box-shadow: 0 1px 5px rgba(0,0,0,0.03);
}

        /* Responsive */
        @media (max-width: 768px) {
            .article-container {
                padding-top: 80px;
            }
            .article-header h1 {
                font-size: 2rem;
            }
            .article-image {
                height: 250px;
            }
            .comment-form-footer {
                flex-direction: column;
                align-items: flex-start;
            }
            .comment-form input[type="text"],
            .comment-form input[type="email"] {
                width: 100%;
                margin-bottom: 1rem;
            }
            /* --- Nuevos estilos para anidación de comentarios --- */
            .comment-replies {
                list-style: none;
                padding-left: 0;
                margin-top: 1.5rem;
                /* Indentación para las respuestas */
                border-left: 2px solid #ddd; 
                padding-left: 1rem;
            }

            .comment-replies .comment-item {
                margin-bottom: 1.5rem;
                padding: 1rem;
                background: #fcfcfc; /* Fondo ligeramente diferente para diferenciar */
                border-left: none;
                box-shadow: 0 1px 5px rgba(0,0,0,0.03);
            }

            /* Botón de Respuesta */
            .comment-actions {
                margin-top: 0.5rem;
            }

            .comment-actions .reply-btn {
                background: none;
                border: none;
                color: var(--primary-color);
                font-size: 0.9rem;
                cursor: pointer;
                font-weight: 600;
                transition: color 0.3s;
            }

            .comment-actions .reply-btn:hover {
                color: var(--secondary-color);
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
                <li><a href="noticias.html" class="active">Noticias</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="testimonios.html">Testimonios</a></li>
                <li><a href="faqs.html">FAQs</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <div class="article-container">
        
        <div class="article-header">
            <h1>El Estrella del Fútbol Ficha por el Club Campeón en un Traspaso Histórico</h1>
            <div class="article-meta">
                <span><i class="fas fa-user-circle"></i> Por Javier Roldán</span>
                <span><i class="fas fa-calendar-alt"></i> 28 Noviembre, 2025</span>
                <span><i class="fas fa-tag"></i> Fútbol, Traspasos</span>
            </div>
        </div>
        
        <div class="article-image">
            <i class="fas fa-camera-retro"></i>
        </div>
        
        <div class="article-content">
            <p>La noticia ha sacudido el mundo del deporte: **Leo Martel**, el joven mediocampista sensación, ha firmado un contrato de cinco años con el **Athletic Capital**, sellando lo que ya se conoce como el traspaso más caro de la temporada. El acuerdo pone fin a meses de especulaciones y batallas de ofertas entre los clubes más grandes de Europa.</p>

            <h2>Impacto en la Liga Nacional</h2>
            <p>La llegada de Martel, de 22 años, promete redefinir el equilibrio de poder en la liga. El Athletic Capital, conocido por su histórica defensa, ahora suma una potencia ofensiva creativa que le hacía falta. Los analistas deportivos predicen que esto no solo aumentará la venta de entradas, sino que revitalizará la asistencia a los estadios en general.</p>
            
            <blockquote>
                "Este fichaje no es solo una inversión deportiva, es una declaración de intenciones. El club está comprometido con la excelencia y con ofrecer el mejor espectáculo a nuestros aficionados. La venta de entradas se ha disparado desde el anuncio."
                <cite>— Declaraciones del Presidente del Athletic Capital</cite>
            </blockquote>

            <p>Martel se une al equipo con la promesa de levantar el trofeo continental en su primera temporada. Su debut está programado para el próximo fin de semana en un derbi local de alta tensión, un evento para el cual **DeportesPro** ya gestiona la venta de las últimas entradas disponibles.</p>

            <h2>¿Qué significa para los aficionados?</h2>
            <p>Para los seguidores, el entusiasmo es palpable. La adquisición garantiza fútbol de alto nivel. Para quienes aún no tienen su abono, la competencia por las entradas será feroz. Recomendamos a nuestros usuarios de DeportesPro estar atentos a las alertas y la preventa para no perderse la oportunidad de ver a Martel en acción.</p>
        </div>
        
        <div class="comments-section">
    <h2>Comentarios (3)</h2>
    
    <form class="comment-form">
        <textarea placeholder="Deja tu opinión sobre este traspaso..." required></textarea>
        <div class="comment-form-footer">
            <div>
                <input type="text" placeholder="Tu Nombre" required>
                <input type="email" placeholder="Tu Email (no se publicará)" required>
            </div>
            <button type="submit"><i class="fas fa-comment-dots"></i> Publicar Comentario</button>
        </div>
    </form>
    
    <ul class="comment-list">
        
        <li class="comment-item">
            <div class="comment-avatar">JL</div>
            <div class="comment-body">
                <h4>José Luis Gómez</h4>
                <span class="comment-date">Hace 2 horas</span>
                <p>¡Traspaso espectacular! Ya aseguré mis entradas para el debut. Espero que este movimiento traiga mucha emoción a la liga. Gran gestión del Athletic Capital.</p>
                
                <div class="comment-actions">
                    <button class="reply-btn"><i class="fas fa-reply"></i> Responder</button>
                </div>
                
                <ul class="comment-replies">
                    <li class="comment-item">
                        <div class="comment-avatar" style="background: var(--secondary-color);">AP</div>
                        <div class="comment-body">
                            <h4>Administrador Pro</h4>
                            <span class="comment-date">Hace 1 hora (Autor)</span>
                            <p>¡Gracias por tu comentario, José Luis! Nos alegra que ya tengas tus entradas. ¡Será un gran partido!</p>
                            <div class="comment-actions">
                                <button class="reply-btn"><i class="fas fa-reply"></i> Responder</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        
        <li class="comment-item">
            <div class="comment-avatar" style="background: var(--secondary-color);">MR</div>
            <div class="comment-body">
                <h4>María Rivas</h4>
                <span class="comment-date">Ayer, 19:30</span>
                <p>Concuerdo con la cita del presidente. Más allá del costo, es una señal de que quieren competir en lo más alto. ¡A ver si ahora suben los precios de los abonos!</p>
                
                <div class="comment-actions">
                    <button class="reply-btn"><i class="fas fa-reply"></i> Responder</button>
                </div>
            </div>
        </li>
        
        <li class="comment-item">
            <div class="comment-avatar">AT</div>
            <div class="comment-body">
                <h4>Antonio Torres</h4>
                <span class="comment-date">27 Noviembre, 2025</span>
                <p>Como aficionado del equipo rival, estoy asustado, pero esto hará que los partidos sean mucho más interesantes. ¡El espectáculo está garantizado!</p>
                
                <div class="comment-actions">
                    <button class="reply-btn"><i class="fas fa-reply"></i> Responder</button>
                </div>
            </div>
        </li>
        
    </ul>
</div>
        
    </div>

    <footer>
        <div style="text-align: center; max-width: 1400px; margin: 0 auto;">
            <p>&copy; 2024 DeportesPro. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>