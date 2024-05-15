<?php 

//Enviar datos del form a nuestro mail
if (isset($_POST['enviar'])) {
  if (!empty($_POST['nombre']) && !empty($_POST['mail']) && !empty($_POST['telefono']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])) {
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $email_usuario = $_POST['mail'];
    $email = "comcodedesarrolloweb@gmail.com";
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $mesanje = "Hola! tienes una consulta pendiente" . "\n";
    $mensaje.= " - Nombre del cliente: " . $nombre . "\n";
    $mensaje.= " - Email del cliente: " . $email_usuario . "\n";
    $mensaje.= " - Telefono del cliente: " . $telefono . "\n";
    $mensaje.= " - Consulta o mensaje: " . $mensaje;

    $header = "From: " . $email_usuario . "\r\n";
    $header.= "Reply-to: " . $email_usuario . "\r\n";
    $header.= "X-Mailer: PHP/" . phpversion();

    mail($email, $asunto, $mensaje, $header);

  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ComCode</title>

    <link rel="icon" href="img/logo comcode.png" />

    <!--  css customizar   -->
    <link rel="stylesheet" href="css/style.css" />

    <!--   swiper css   -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!--   iconos   -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <!--   movimientos   -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
  </head>

  <body>
    <!--   HEADER   -->

    <header class="header">
      <a href="#" class="logo"><img src="img/logo comcode.png" alt="" /></a>
      <nav class="navbar">
        <a href="#inicio" class="active">Inicio</a>
        <a href="#sobre mi">Sobre nosotros</a>
        <a href="#servicios">Servicios</a>
        <a href="#portafolio">Proyectos</a>
        <a href="#contacto">Contactanos</a>
      </nav>

      <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <!--   INICIO  -->

    <section class="home" id="inicio">
      <div class="home-content">
        <h3>Hola, Somos</h3>
        <h1>ComCode</h1>
        <p>
          Somos una empresa de desarrollo web y de software, nos entusiasma
          saber sobre tus ideas y hacerlas realidad!
        </p>

        <div class="social-media">
          <a href="#"><i class="bx bxl-github"></i></a>
          <a href="#"><i class="bx bxs-envelope"></i></a>
          <a href="#"><i class="bx bxl-linkedin"></i></a>
        </div>

        <a href="#" class="btn"> Leer más</a>
      </div>

      <div class="profession-container">
        <div class="profession-box">
          <div class="profession" style="--i: 0">
            <i class="bx bx-code-alt"></i>
            <h3>Desarrollo Frontend</h3>
          </div>
          <div class="profession" style="--i: 1">
            <i class="bx bx-data"></i>
            <h3>Desarrollo Backend</h3>
          </div>
          <div class="circle"></div>
        </div>

        <div class="overlay"></div>
      </div>
      <div class="home-img">
        <img src="" alt="" />
      </div>
    </section>

    <!-- SECCION SOBRE NOSOTROS -->

    <section class="about" id="sobre mi">
      <div class="about-img">
        <img src="img/Triangulo-joaco-enzo.png" alt="" />
      </div>
      <about class="about-content">
        <h2 class="heading">Sobre <span>Nosotros</span></h2>
        <h3>Estamos aquí para ayudarte con tu proyecto!</h3>
        <p>Impulsamos y construimos tu negocio en el mundo digital.</p>
        <a href="#" class="btn">Leer mas</a>
      </about>
    </section>

    <!-- SECCION SERVICIOS -->

    <section class="services" id="servicios">
      <h2 class="heading">Nuestros<span> Servicios</span></h2>

      <div class="services-container">
        <div class="services-box">
          <i class="bx bx-code"></i>
          <h3>Desarrollo Frontend</h3>
          <p>
            El desarrollo web frontend se refiere a la práctica de construir y
            Diseñar la interfaz de usuario de un sitio web o aplicación.
          </p>
          <a href="" class="btn">Leer mas</a>
        </div>
        <div class="services-box">
          <i class="bx bxl-php"></i>
          <h3>Desarrollo Backend</h3>
          <p>
            El backend es la parte invisible pero esencial de un sitio,
            responsable del manejo de la lógica y el procesamiento de datos.
          </p>
          <a href="" class="btn">Leer mas</a>
        </div>
        <div class="services-box">
          <i class="bx bxl-postgresql"></i>
          <h3>Base de Datos</h3>
          <p>
            Es responsable no solo de almacenar datos, sino también de conectar
            juntos en una unidad lógica.
          </p>
          <a href="" class="btn">Leer mas</a>
        </div>
      </div>
    </section>

    <!-- SECCION PORTAFOLIO -->

    <section class="portafolio" id="portafolio">
      <h2 class="heading">Ultimos<span> Proyectos</span></h2>
      <div class="portafolio-container">
        <div class="portafolio-box">
          <img src="img/pag panaderia (foto).PNG" alt="" />

          <portafolio class="portafolio-layer">
            <a
              class="boton"
              target="_blank"
              href="https://breadbakery.netlify.app/"
              ><i class="bx bx-link-external"></i
            ></a>
          </portafolio>
        </div>
        <div class="portafolio-box">
          <img src="img/pag auto (foto).PNG" alt="" />
          <a href="#"><i class="bx bx-link-external"></i></a>
          <portafolio class="portafolio-layer">
            <a
              class="boton"
              target="_blank"
              href="https://carsluxwebsite.netlify.app/"
              ><i class="bx bx-link-external"></i
            ></a>
          </portafolio>
        </div>
        <div class="portafolio-box">
          <img src="img/pag gym (foto).PNG" alt="" />
          <portafolio class="portafolio-layer">
            <a
              class="boton"
              target="_blank"
              href="https://gymluxsite.netlify.app/"
              ><i class="bx bx-link-external"></i
            ></a>
          </portafolio>
        </div>
        <div class="portafolio-box">
          <img src="img/pag auris (foto).PNG" alt="" />
          <portafolio class="portafolio-layer">
            <a
              class="boton"
              target="_blank"
              href="https://jblauris.netlify.app/"
              ><i class="bx bx-link-external"></i
            ></a>
          </portafolio>
        </div>
        <div class="portafolio-box">
          <img src="img/pag real state (foto).PNG" alt="" />
          <portafolio class="portafolio-layer">
            <a
              class="boton"
              target="_blank"
              href="https://realstateslawebsite.netlify.app/"
              ><i class="bx bx-link-external"></i
            ></a>
          </portafolio>
        </div>
        <div class="portafolio-box">
          <img src="img/pag sushi (foto).PNG" alt="" />
          <portafolio class="portafolio-layer">
            <a
              class="boton"
              target="_blank"
              href="https://sushiresto.netlify.app/"
              ><i class="bx bx-link-external"></i
            ></a>
          </portafolio>
        </div>
      </div>
    </section>

    <!-- SECCION LENGUAJES -->

    <div class="testimonial-container">
      <h2 class="heading">Tecnologia<span> Utilizada</span></h2>

      <div class="testimonial-wrapper">
        <div class="testimonial-box mySwiper">
          <div class="testimonial-content swiper-wrapper">
            <div class="testimonial-slide swiper-slide">
              <img src="img/html.png" alt="" />
              <h3>HTML</h3>
              <p></p>
            </div>
            <div class="testimonial-slide swiper-slide">
              <img src="img/css.png" alt="" />
              <h3>CSS</h3>
              <p></p>
            </div>
            <div class="testimonial-slide swiper-slide">
              <img src="img/js.png" alt="" />
              <h3>JavaScript</h3>
              <p></p>
            </div>
            <div class="testimonial-slide swiper-slide">
              <img src="img/sass.png" alt="" />
              <h3>SASS</h3>
              <p></p>
            </div>
            <div class="testimonial-slide swiper-slide">
              <img src="img/react.png" alt="" />
              <h3>REACT</h3>
              <p></p>
            </div>
            <div class="testimonial-slide swiper-slide">
              <img src="img/php.png" alt="" />
              <h3>PHP</h3>
              <p></p>
            </div>
            <div class="testimonial-slide swiper-slide">
              <img src="img/sql.png" alt="" />
              <h3>MySQL</h3>
              <p></p>
            </div>
          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

    <!-- SECCION CONTACTO -->
    <section class="contact" id="contacto">
      <h2 class="heading">Contac<span>tanos!</span></h2>
      <form action="index.php" method="POST">
        <div class="input-box">
          <input name="nombre" type="text" placeholder="Nombre Completo" />
          <input name="mail" type="email" placeholder="Mail" />
        </div>
        <div class="input-box">
          <input
            name="telefono"
            type="number"
            placeholder="Numero de Telefono"
          />
          <input name="asunto" type="text" placeholder="Asunto" />
        </div>
        <textarea
          name="mensaje"
          id="mensaje"
          cols="30"
          rows="10"
          placeholder="Mensaje"
        ></textarea>
        <input type="submit" value="Enviar Mensaje" name="enviar" class="btn" />
      </form>
    </section>

    <!-- SECCION FOOTER -->
    <footer class="footer">
      <div class="footer-text">
        <p>
          Todos los derechos reservados © ComCode 2023 by Bustos Joaquin &
          Alvarado Enzo |
        </p>
      </div>
    </footer>

    <!-- scroll-->

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="https://unpkg.com/scrollreveal@4/dist/scrollreveal.min.js"></script>

    <!-- swiper js-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--script-->
    <script src="js/script.js"></script>
  </body>
</html>