<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./css/style.css">

    <title>Web Guapas</title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="./img/logo.png" alt="logo wapas">
        </div>

        <nav class="nav">
            
            <input type="checkbox" id="toggle" class="toggle">
            <label for="toggle" class="menu-btn">&#9776;</label>         
        
            <ul class="menu-list">
                <li class="menu-item"><a href="#" class="menu-link">Inicio</a></li>
                <li class="menu-item"><a href="#servicios" class="menu-link">Servicios</a></li>
                <li class="menu-item"><a href="#contacto" class="menu-link">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <section class="encabezado">
            <div class="cont-info-encabezado">
                <h1 class="titulo">Somos <br><span>wwwapas</span></h1>
                <h2 class="sub-titulo fondo-amarillo">Social media managers | creadoras de contenido</h2>
                <p class="p-encabezado">Nos encargamos de construir, gestionar y administrar la comunidad
                online de tu marca, empresa o negocio <strong> ¡Creamos relaciones estables y
                duraderas con tus clientes!</strong></p>
            </div>

            <div class="cont-img-encabezado">
                <img src="./img/foto.png" alt="foto trabajadoras">
            </div>

            <div class="cont-sub-encabezado">
                <div class="cont-hijo-sub">
                    <h3 class="fondo-amarillo">¡Hola! Somos SOFI & JULIA,</h3>
                    <p>las social media managers, las creadoras de contenido, las
                    copywriters, las generadoras de leads, las diseñadoras, las
                    estrategas en marketing digital, las potenciadoras de ventas,
                    el posicionamiento de tu marca <strong>¡Somos el complemento que
                    necesitás para hacer crecer tu marca! ¡Somos wwwapas!</strong></p>
                </div>

                <div class="cont-hijo-sub">
                    <h3 class="fondo-amarillo">GESTIONAMOS TUS REDES SOCIALES</h3>
                    <p>La transformación digital no es solo para grandes compañías,
                    todas las empresas deben emprenderla cuanto antes y aquí
                    es donde podemos asistirte. Armamos estrategias a medida
                    para tu empresa, marca o producto<strong>¡Aumentá tu presencia
                    digital y generá nuevas ventas y contactos!</strong></p>
                </div>
            </div>
        </section>

        <hr>

        <section class="servicios" id="servicios">
            <div class="cont-img-servicios">
                <img src="./img/img-servicios.png" alt="img servicios" width="100px">
            </div>

            <div class="cont-info-servicios">
                <h4>Servicios</h4>
                <ol>
                    <li>Análisis de perfil (Benchmarking)</li>
                    <li>Revisión y activación de canales</li>
                    <li>Gestión, creación y diseño de contenido</li>
                    <li>Respuestas a mensajes y consultas</li>
                    <li>Segmentación de promociones según el público objetivo de la pauta publicitaria</li>
                    <li>Diagramamos un calendario que se ajuste a los objetivos de la empresa</li>
                    <li><strong class="fondo-amarillo">¡Empezamos a comunicar!</strong></li>
                </ol>
            </div>
        </section>

        <hr>

        <section class="contacto" id="contacto">
            <div class="cont-info-contacto">
                <h4>¿Querés que nos <strong>contactemos con vos?</strong></h4>
                <p class="fondo-amarillo">Envianos tu consulta >></p>
            </div>

            <form action="#" method="post" class="form-contacto cont-info-contacto">
                <label>Nombre <span>*</span></label>
                <input type="text" name="nombre" required class="input-form">
                
                <label>Email <span>*</span></label>
                <input type="email" name="email" required class="input-form">
                
                <label>Mensaje <span>*</span></label>
                <textarea required name="mensaje"></textarea>

                <div class="cont-btn-form">
                    <!-- <button class="btn-enviar">Enviar consulta</button> -->
                    <input type="submit" value="Enviar consulta" name="enviar" class="btn-enviar">
                    <input type="reset" value="Borrar" class="btn-borrar">
                </div>
                
                <?php
                    include("./php/email.php");
                ?>
                
            </form>
        </section>
        
        <section class="redes">
            <div class="titulo-redes">
                <p>redes <br>wwwapas</p>
            </div>

            <div class="cont-img-redes">
                <a href="#" target="_blank" class="icon-redes"><img src="./img/instagram-icon.png" alt="instagram"></a>
                <a href="#" target="_blank" class="icon-redes"><img src="./img/dribbble-icon.png" alt="dribbble"></a>
                <a href="#" target="_blank" class="icon-redes"><img src="./img/linkedin-icon.png" alt="linkedin"></a>
                <a href="#" target="_blank" class="icon-redes"><img src="./img/facebook-icon.png" alt="facebook"></a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <h5 class="titulo-footer">wwwwpas</h5>
        <a href="mailto: wwwwapas_sm@gmail.com" class="email-footer">wwwwapas_sm@gmail.com</a>
    </footer>
</body>

</html>