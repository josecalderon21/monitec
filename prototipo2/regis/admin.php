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
  <title>ADMIN</title>
  <link rel="stylesheet" href="admin.css">
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
            <li class="list-group-item">Monitor</li>
            <li class="list-group-item">Cultivos</li>
            <li class="list-group-item">Dispositivos y Sensores</li>
            <li class="list-group-item">Historial</li>
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
    <h1 class="text-center">Bienvenido a la Aplicación de Admin</h1>
    <!-- Coloca aquí los elementos de inicio de sesión, registro, etc. -->
  </section>

  <!-- Contenido principal de la aplicación -->
  <main class="container mt-5">
    <section id="Contenido">
      <h2 class="text-center">CONTENIDO</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="img_admim\siembrea_cosecha.png" class="card-img-top" alt="siembra">
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

            <img src="img_admim\control_planta.png" class="card-img-top" alt="control">
            <div class="card-body">
              <h5 class="card-title">Control De Plantas</h5>
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
        label: "gafica de nuevos cultivos",
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