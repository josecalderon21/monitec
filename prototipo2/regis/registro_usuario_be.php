<?php
include 'conexion_be.php';

// Recibir los datos del formulario
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
//para la contraseña incriptada 
$contraseña = hash('sha512',$contraseña);

// Validar si los campos están vacíos
if (empty($nombre_completo) || empty($correo) || empty($usuario) || empty($contraseña)) {
    echo '
        <script>
            alert("Por favor, completa todos los campos antes de enviar el formulario");
            window.location = "../regis/indice.php";
        </script>';
    exit; // Detener la ejecución del script si hay campos vacíos
}

// Consulta SQL para verificar si el correo ya existe
$consulta_correo = "SELECT correo FROM usuarios WHERE correo = '$correo'";
$resultado_correo = mysqli_query($conexion, $consulta_correo);

// Verificar si ya existe el correo
if (mysqli_num_rows($resultado_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya existe. Por favor, intenta con otro correo.");
            window.location = "../regis/indice.php";
        </script>';
    exit; // Detener la ejecución del script si el correo ya existe
}

// Consulta SQL para insertar los datos en la base de datos
$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contraseña) 
          VALUES ('$nombre_completo', '$correo', '$usuario', '$contraseña')";

// Ejecutar la consulta
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../regis/indice.php";
        </script>';
} else {
    echo '
        <script>
            alert("Error al almacenar el usuario");
            window.location = "../regis/indice.php";
        </script>';
}

mysqli_close($conexion);
?>
