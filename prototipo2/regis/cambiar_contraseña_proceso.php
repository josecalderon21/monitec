<?php
session_start();
include 'conexion_be.php';

if (!isset($_SESSION['usuario'])) {
    header("location: indice.php");
    exit;
}

$usuario = $_SESSION['usuario'];
$contraseña_actual = hash('sha512', $_POST['contraseña_actual']);
$nueva_contraseña = hash('sha512', $_POST['nueva_contraseña']);
$confirmar_contraseña = hash('sha512', $_POST['confirmar_contraseña']);

// Validaciones adicionales 
if ($nueva_contraseña !== $confirmar_contraseña) {
    echo '
    <script>
        alert("Las contraseñas no coinciden");
        window.location = "cambiar_contraseña.php";
    </script>';
    exit;
}

// Verificar la contraseña actual del usuario
$validar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña_actual'");

if (mysqli_num_rows($validar) > 0) {
    // Actualizar la contraseña en la base de datos
    $actualizar_contraseña = mysqli_query($conexion, "UPDATE usuarios SET contraseña='$nueva_contraseña' WHERE usuario='$usuario'");

    if ($actualizar_contraseña) {
        echo '
        <script>
            alert("Contraseña actualizada exitosamente");
            window.location = "indice.php";
        </script>';
    } else {
        echo '
        <script>
            alert("Error al actualizar la contraseña");
            window.location = "cambiar_contraseña.php";
        </script>';
    }
} else {
    echo '
    <script>
        alert("Contraseña actual incorrecta");
        window.location = "cambiar_contraseña.php";
    </script>';
}

mysqli_close($conexion);
?>
