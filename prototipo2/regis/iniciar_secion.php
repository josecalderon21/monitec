<?php
session_start();
include 'conexion_be.php';
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512',$contraseña);


$validar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE
 usuario='$usuario' and contraseña = '$contraseña'" );

if(mysqli_num_rows( $validar ) > 0){
    $usuario_info = mysqli_fetch_assoc($validar);
    $_SESSION['usuario']= $usuario;
    


     // Redirigir según el tipo de usuario
     switch ($usuario_info['usuario']) {
        case 'administrador':
            header("location: admin.php");
            break;

        case 'monitor':
            header("location: monitor.php");
            break;

        case 'cultivador':
            header("location: dueño_cultivo.php");
            break;

        default:
            // Redirección predeterminada en caso de que el tipo de usuario no coincida
            header("location: default_page.php");
            break;
    }



    //header("location: dueño_cultivo.php");

    exit;
}else{
    echo '
    <script>
        alert("Usuario no existe, por favor verifique los datos introducidos");
        window.location = "../regis/indice.php";
    </script>
    
    
    ';
    exit;
}


?>