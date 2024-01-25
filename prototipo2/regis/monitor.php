<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  echo '
  <script>
      alert("por favor debes iniciar sesion");
      window.location = "indice.php";
  </script>
  ';
  //header("location: indice.php");
  session_destroy();
  die();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Tus encabezados aquí -->
  <meta charset="UTF-8" />
  <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Monitor de Apoyo</title>
  <link rel="stylesheet" href="estilo/monitor.css">

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
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <!-- Botón para desplegar menú lateral -->
      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
        aria-controls="offcanvasExample">
        Menú
      </button>

      <!-- Buscador dinámico -->
      <form class="d-flex ms-2">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>

      <!-- Botones de notificaciones y perfil -->
      <div class="d-flex ms-auto">
        <button class="btn btn-primary" type="button">
          Notificaciones
          <span class="badge bg-secondary">3</span>
        </button>
        <a href="cambiar_contraseña.php" class="btn btn-primary ms-2">
          Cambiar Contraseña
        </a>
        <button class="btn btn-primary ms-2" type="button" onclick="cerrarSesion()">
          Cerrar Sesión
        </button>

        <script>
          function cerrarSesion() {
            window.location.href = 'cerrar_sesion.php';
          }
        </script>
      </div>

      <!-- Contenido del menú lateral -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menú</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <!-- Lista desplegable -->
          <ul class="list-group">
            <li class="list-group-item">Resumen</li>
            <li class="list-group-item">Alertas</li>
            <li class="list-group-item">Estadísticas </li>
            <li class="list-group-item">Configuración</li>
            <li class="list-group-item">Ayuda y Soporte</li>
          </ul>
        </div>
      </div>
    </div>
    </div>
  </nav>

  <!-- Mensaje de bienvenida -->
  <section class="container mt-5">
    <h1 class="text-center">Bienvenido, Monitor de Apoyo</h1>
    <!-- Coloca aquí los elementos específicos para el monitor de apoyo -->
  </section>

  <!-- Contenido principal de la aplicación -->
  <nav class="navbar navbar-dark bg-green">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Nombre del Monitor de Apoyo</span>
    </div>
  </nav>
  </header>

  <main class="container mt-5">
    <section id="informacionDispositivos">
      <h2>Información del Cultivo o Dispositivos</h2>

      <!-- Detalles del Cultivo o Dispositivo 1 -->
      <div class="card mt-3">
        <div class="card-header">
          Cultivo o Dispositivo 1
        </div>
        <div class="card-body">
          <h5 class="card-title">Nombre del Cultivo o Dispositivo</h5>
          <p class="card-text">Información detallada sobre el estado y salud del cultivo o dispositivo.</p>
          <!-- Puedes agregar más detalles aquí según tus necesidades -->
          <ul>
            <li>Estado: Activo</li>
            <li>Nivel de Humedad: 60%</li>
            <!-- Agrega más detalles aquí -->
          </ul>
        </div>
      </div>

      <!-- Detalles del Cultivo o Dispositivo 2 -->
      <div class="card mt-3">
        <div class="card-header">
          Cultivo o Dispositivo 2
        </div>
        <div class="card-body">
          <h5 class="card-title">Nombre del Cultivo o Dispositivo</h5>
          <p class="card-text">Información detallada sobre el estado y salud del cultivo o dispositivo.</p>
          <!-- Puedes agregar más detalles aquí según tus necesidades -->
          <ul>
            <li>Estado: Inactivo</li>
            <li>Nivel de Humedad: 45%</li>
            <!-- Agrega más detalles aquí -->
          </ul>
        </div>
      </div>

      <!-- Puedes agregar más tarjetas según la cantidad de cultivos o dispositivos -->
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-rBsHpQpDHIBJO6b86jMG6VefP6SY08JeaZO4+VH9+6IuZ2q4Bk4tko+n12oBo2qL"
    crossorigin="anonymous"></script>
  </main>

  <!-- Script para Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Puedes personalizar la gráfica según las necesidades del monitor de apoyo
  </script>


  <!-- Columna izquierda para la gráfica de barras -->
  <section class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-center">Gráfica de Barras</h2>
        <canvas id="graficaBarras" width="300" height="200"></canvas>
      </div>

      <!-- Columna derecha para el cuadro (puedes modificar este cuadro según tus necesidades) -->
      <div class="col-md-6">
        <h2 class="text-center">Historial de Cultivadores y Monitores</h2>

        <!-- Tabla de historial -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Tipo</th>
              <th scope="col">Fecha</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <!-- Ejemplo de fila en la tabla (puedes agregar más filas según sea necesario) -->
            <tr>
              <th scope="row">1</th>
              <td>Nombre del Cultivador/Monitor</td>
              <td>Cultivador</td>
              <td>Fecha del Registro</td>
              <td>
                <!-- Agrega aquí los botones de acciones, por ejemplo, ver detalles, editar, eliminar, etc. -->
                <button type="button" class="btn btn-info">Ver Detalles</button>
                <button type="button" class="btn btn-warning">Editar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
              </td>
            </tr>

            <!-- Puedes agregar más filas aquí con la misma estructura -->
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Script para Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Datos de ejemplo para la gráfica de barras
    var datosGrafica = {
      labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo"],
      datasets: [{
        label: "monitoreos de nuevos cultivos",
        data: [12, 19, 3, 5, 2],
        backgroundColor: [
          "rgba(255, 99, 132, 0.5)",
          "rgba(54, 162, 235, 0.5)",
          "rgba(255, 206, 86, 0.5)",
          "rgba(75, 192, 192, 0.5)",
          "rgba(153, 102, 255, 0.5)",
        ],
        borderColor: [
          "rgba(255, 99, 132, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(153, 102, 255, 1)",
        ],
        borderWidth: 1,
      },],
    };

    // Configuración de la gráfica de barras
    var configGrafica = {
      type: "bar",
      data: datosGrafica,
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    };

    // Crear la instancia de la gráfica
    var grafica = new Chart(
      document.getElementById("graficaBarras"),
      configGrafica
    );
  </script>









  <header>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Ayuda y Soporte</span>
      </div>
    </nav>
  </header>

  <main class="container mt-5">
    <section id="recursosAyuda">
      <h2>Recursos de Ayuda</h2>

      <!-- Enlaces a recursos de ayuda -->
      <ul>
        <li><a href="#">Guía del Usuario</a></li>
        <li><a href="#">Preguntas Frecuentes</a></li>
        <li><a href="#">Foro de la Comunidad</a></li>
        <!-- Agrega más enlaces según tus necesidades -->
      </ul>
    </section>

    <section id="soporteTecnico">
      <h2>Soporte Técnico</h2>

      <!-- Formulario de contacto o información de soporte técnico -->
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



  <!-- Tus encabezados aquí -->

  <body>



    <!-- Tus encabezados aquí -->
    <title>Mapa de Cultivo</title>
    <style>
      #map-container {
        display: flex;
        justify-content: space-between;
      }

      #map {
        width: 60%;
        /* Ajusta según sea necesario */
        height: 450px;
        /* Ajusta según sea necesario */
      }

      #info-container {
        width: 50%;
        /* Ajusta según sea necesario */
      }

      /* Otros estilos según sea necesario */
    </style>

    <!-- Contenedor para el mapa y la información adicional -->
    <div id="map-container">
      <title>Mapa de Cultivo</title>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63092.32282391103!2d-75.92317006375274!3d8.76063110228439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5a2fe5a57031ad%3A0x92e1cbad2ed7c0a0!2zTW9udGVyw61hLCBDw7NyZG9iYQ!5e0!3m2!1ses-419!2sco!4v1699902294016!5m2!1ses-419!2sco"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
      </head>

      <!-- Información adicional sobre la ubicación del terreno del cultivo -->
      <div id="info-container">
        <h2>Ubicación del Terreno del Cultivo</h2>
        <p>Inserta aquí información relevante sobre la ubicación del terreno del cultivo. Puede incluir detalles como la
          dirección, el tamaño del terreno, condiciones específicas, etc.</p>
      </div>
    </div>





  </body>

  <footer>
    <!-- Pie de página -->
    <div class="info">
      <h1>CONTACTO</h1>
      <h2>PONTE EN CONTACTO AHORA MISMO!</h2>
      <div class="redes">

        <a href="https://www.facebook.com/josedavidcalderonbohorquez"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
        <a href="#"><i class="fa-marcas fa-whatsApp"></i></a>
        <a href=" # "><i class="fa-brands fa-linkedin-in "></i></a>
        <a href=" # "><i class="fa-brands fa-pinterest-p "> </i></a>

      </div>


  </footer>

</html>