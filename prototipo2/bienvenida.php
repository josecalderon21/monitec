<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Tus encabezados aquí -->
  <meta charset="UTF-8" />
  <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bienvenido a Tu Aplicación</title>
  <link rel="stylesheet" href="estilo/bienvenida.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


</head>

<body>
  <style>
    #scrollToTopBtn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      background-color: #00cc2c;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 15px;
      font-size: 16px;
      cursor: pointer;
      z-index: 1000;
      /* Asegura que el botón esté en la capa superior */
    }

    #scrollToTopBtn:hover {
      background-color: rgb(0, 179, 69);
    }
  </style>
  </head>

  <body>

    <!-- Tu contenido de página aquí -->

    <button id="scrollToTopBtn" onclick="scrollToTop()">^</button>

    <!-- Otros scripts y cierre del body y html -->

    <script>
      // Función para desplazarse suavemente hacia arriba
      function scrollToTop() {
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      }

      // Mostrar u ocultar el botón según la posición de desplazamiento
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        var scrollToTopBtn = document.getElementById("scrollToTopBtn");

        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          scrollToTopBtn.style.display = "block";
        } else {
          scrollToTopBtn.style.display = "none";
        }
      }
    </script>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img_bienvenida/logo.png" alt="Logo" height="30" class="d-inline-block align-text-top"></a>
        <nav class="nav nav-pills nav-fill">
          <a class="nav-link" href="#Home">Home</a>
          <a class="nav-link" href="#que-Es">¿Qué es?</a>
          <a class="nav-link" href="#Contenido">Cómo Funciona</a>
          <a class="nav-link" href="#ventajas">Ventajas y Beneficios</a>
          <a class="nav-link" href="#funciones">Funciones</a>
          <a class="nav-link" href="#soporteTecnico">Contacto</a>
        </nav>
        <div class="navbar-nav ms-auto">
          <a class="btn btn-primary btn-ingresar" href="regis/indice.php">Ingresar</a>
        </div>
      </div>
    </nav>

    <div class="jumbotron">
      <h1 class="display-4">Bienvenido a Tu Aplicación</h1>
      <p class="lead">Descubre todas las funcionalidades increíbles que ofrecemos para ti.
        Bienvenido a nuestra plataforma innovadora: el epicentro digital
        que revoluciona la forma en que interactúas con tus cultivos. En este espacio,
        no solo te invitamos a cultivar, sino a controlar cada aspecto de tu cosecha
        de manera inteligente y eficiente.Imagina tener el poder de supervisar tus cultivos
        desde la palma de tu mano,
        donde cada planta se convierte en un punto de datos, y cada dato se traduce en
        conocimiento que potencia tu toma de decisiones. Nuestra plataforma agrícola
        inteligente te emerge en un mundo donde la tecnología se fusiona con la agricultura,
        brindándote un control sin precedentes sobre tus campos.
      </p>
    </div>

    <!-- Sección "¿Qué es?" -->
    <div id="Home" class="section">
      <div class="content">
        <h2>Controla tus cultivos</h2>
        <p>Utiliza un sistema agrícola inteligente que te permite monitorear tus cultivos.
          Con nuestras herramientas avanzadas, podrás monitorear en tiempo real el estado
          de cada cultivo, desde el brote inicial hasta la cosecha final. Sensores de
          última generación recopilan información vital, proporcionándote insights
          detallados sobre la humedad del suelo, niveles de nutrientes, condiciones
          climáticas y mucho más.
        </p>
      </div>
      <img src="img_bienvenida\66.png" alt="Imagen" class="img">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1"
          d="M0,320L48,298.7C96,277,192,235,288,197.3C384,160,480,128,576,133.3C672,139,768,181,864,208C960,235,1056,245,1152,218.7C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
      </svg>
    </div>

    <section id="que-Es">
      <div class="container">
        <div class="row">
          <header class="section-header">
            <h2>Que es?<span>.</span></h2>
          </header>

          <div class="col-md-4 text-center p-5 wow bounceInUp">
            <img src="img_bienvenida\re.png" class="img-fluid">

            <h3>Recolecta y geolocaliza datos a campo</h3>

            <p>una herramienta innovadora diseñada para
              optimizar la gestión agrícola. Con nuestra plataforma, los agricultores pueden
              supervisar de manera eficiente el estado de sus cultivos.</p>
          </div>

          <div class="col-md-4 text-center p-5 wow bounceInUp" data-wow-delay=".5s">
            <img src="img_bienvenida\re2.png" class="img-fluid">

            <h3>Visualiza y analiza la información</h3>

            <p>recibir alertas en tiempo real y acceder a datos clave para tomar
              decisiones informadas. Descubre cómo estamos transformando
              la agricultura con tecnología de vanguardia.</p>
          </div>

          <div class="col-md-4 text-center p-5 wow bounceInUp" data-wow-delay="1s">
            <img src="img_bienvenida\re3.png" class="img-fluid">

            <h3>Genera y comparte reportes</h3>

            <p>Comunica automáticamente el estado de tus lotes y el resultado de tus decisiones mediante órdenes de
              trabajo.</p>
          </div>
        </div>
      </div>





      <!-- Sección "Cómo Funciona" con tarjetas -->
      <main class="container mt-5">
        <section id="Contenido">
          <h2 class="text-center">Como funciona</h2>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="img_admim/siembrea_cosecha.png" class="card-img-top" alt="siembra">
                <div class="card-body">
                  <h5 class="card-title"> Siembra y Cosechas</h5>
                  <p class="card-text">planificar y supervisar las actividades relacionadas con
                    el ciclo de vida de los cultivos. Esto implica coordinar la siembra, monitorear
                    el crecimiento de las plantas, gestionar la cosecha y garantizar la eficiencia
                    en cada etapa.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img_admim/control_planta.png" class="card-img-top" alt="Coltrol">
                <div class="card-body">
                  <h5 class="card-title">Coltrol De Plantas</h5>
                  <p class="card-text"> la aplicación de técnicas de control de plagas, el monitoreo
                    de nutrientes y el aseguramiento de condiciones ambientales adecuadas para el
                    crecimiento. El uso de tecnologías como sensores y sistemas automatizados puede
                    ser fundamental para mantener un control preciso.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img_admim/control_severidad.png" class="card-img-top" alt="severidad">
                <div class="card-body">
                  <h5 class="card-title">Control De Severidad</h5>
                  <p class="card-text">detección temprana de enfermedades, la evaluación de
                    factores climáticos que puedan causar daño y la implementación de medidas
                    preventivas para minimizar la severidad de posibles impactos negativos.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img_admim/ordenes.png" class="card-img-top" alt="ordenes">
                <div class="card-body">
                  <h5 class="card-title">Ordenes</h5>
                  <p class="card-text">asignación de recursos, seguimiento de progresos
                    y aseguramiento de que cada orden se complete de manera eficiente.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img_admim/registro_agua.png" class="card-img-top" alt="registro_agua">
                <div class="card-body">
                  <h5 class="card-title">Registro De Agua</h5>
                  <p class="card-text">llevar un registro preciso de la cantidad de agua utilizada,
                    programar riegos eficientes, y asegurar que los niveles de humedad sean los
                    adecuados para el crecimiento de los cultivos.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img_admim/satelite.png" class="card-img-top" alt="satelite">
                <div class="card-body">
                  <h5 class="card-title">Satelite</h5>
                  <p class="card-text">utiliza tecnologías de mapeo y observación satelital
                    para obtener una visión completa de las áreas de cultivo. </p>
                </div>
              </div>
            </div>
          </div>

        </section>

      </main>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#4caf50" fill-opacity="1"
          d="M0,96L40,112C80,128,160,160,240,192C320,224,400,256,480,229.3C560,203,640,117,720,117.3C800,117,880,203,960,208C1040,213,1120,139,1200,112C1280,85,1360,107,1400,117.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
      </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#4caf50" fill-opacity="1"
          d="M0,96L40,112C80,128,160,160,240,192C320,224,400,256,480,229.3C560,203,640,117,720,117.3C800,117,880,203,960,208C1040,213,1120,139,1200,112C1280,85,1360,107,1400,117.3L1440,128L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
        </path>
      </svg>
      <!-- Sección "Ventajas y Beneficios" con carrusel -->
      <div id="ventajas" class="section">
        <h2>Ventajas y Beneficios</h2>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img_bienvenida/1.png" class="d-block w-100" alt="Ventaja 1">
            </div>
            <div class="carousel-item">
              <img src="img_bienvenida/2.png" class="d-block w-100" alt="Ventaja 2">
            </div>
            <div class="carousel-item">
              <img src="img_bienvenida/3.png" class="d-block w-100" alt="Ventaja 3">
            </div>
            <div class="carousel-item">
              <img src="img_bienvenida/4.png" class="d-block w-100" alt="Ventaja 4">
            </div>
            <div class="carousel-item">
              <img src="img_bienvenida/6.png" class="d-block w-100" alt="Ventaja 6">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!-- Sección "Funciones" con listas desplegables -->
      <div id="funciones" class="section">
        <h2>Funciones</h2>
        <div class="row">
          <!-- Acordeones izquierdos -->
          <div class="col-md-6">
            <div class="accordion" id="funcionesAccordionLeft">
              <!-- Lista desplegable 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Función 1: Gestión Avanzada de Datos
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#funcionesAccordionLeft">
                  <div class="accordion-body">
                    La Función 1 proporciona una gestión avanzada de datos, permitiendo a los usuarios almacenar,
                    organizar y analizar grandes cantidades de información de manera eficiente. Esta funcionalidad
                    es esencial para aquellos que necesitan realizar un seguimiento detallado de sus operaciones y
                    tomar decisiones informadas basadas en datos precisos.</div>
                </div>
              </div>
              <!-- Lista desplegable 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Función 2: Integración de Dispositivos Móviles
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#funcionesAccordionLeft">
                  <div class="accordion-body">
                    La Función 2 se centra en la integración perfecta con dispositivos móviles. Los usuarios pueden
                    acceder y controlar la aplicación desde sus smartphones y tabletas, proporcionando flexibilidad
                    y movilidad. Esta función es crucial para aquellos que desean monitorear y gestionar sus cultivos
                    sobre la marcha.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Acordeones derechos -->
          <div class="col-md-6">
            <div class="accordion" id="funcionesAccordionRight">
              <!-- Lista desplegable 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Función 3: Informes Personalizados
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#funcionesAccordionRight">
                  <div class="accordion-body">
                    La Función 3 permite a los usuarios generar informes personalizados según sus necesidades
                    específicas.
                    Pueden seleccionar los parámetros relevantes y obtener informes detallados sobre el estado de sus
                    cultivos,
                    el uso de recursos y otros aspectos clave. Esta funcionalidad es valiosa para la toma de decisiones
                    estratégicas. </div>
                </div>
              </div>
              <!-- Lista desplegable 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Función 4: Colaboración en Tiempo Real
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                  data-bs-parent="#funcionesAccordionRight">
                  <div class="accordion-body">
                    La Función 4 se enfoca en la colaboración en tiempo real, permitiendo a varios usuarios trabajar
                    simultáneamente en la aplicación. Esta característica es esencial para equipos agrícolas y socios
                    que necesitan compartir información y coordinar actividades de manera eficiente.

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Formulario de contacto o información de soporte técnico -->
      <section id="soporteTecnico">
        <h2>Formulario de contacto.!</h2>
        <form>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" placeholder="Correo Electrónico">
          </div>
          <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje aquí"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
        </form>
      </section>
      </main>


      <section div class="footer">
        <div class="redes">
          <a href="https://www.facebook.com/tuusuario"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-marcas fa-whatsApp"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin-in "></i></a>
          <a href="#"><i class="fa-brands fa-pinterest-p "> </i></a>
        </div>
        <p>&copy; 2023 Tu Aplicación. Todos los derechos reservados.</p>
        </div>
      </section>
  </body>

</html>