<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("location: indice.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
    <link rel="stylesheet" href="estilo_con.css">
    
</head>

<body>
    <main>
        <div class="contenedor__todo">
            <div class="contenedor__login-register">
                <!-- Formulario de cambio de contraseña -->
                <form action="cambiar_contraseña_proceso.php" method="post" class="formulario__cambiar-contraseña">
                    <h2>Cambiar Contraseña</h2>
                    <input type="password" name="contraseña_actual" placeholder="Contraseña Actual" required>
                    <input type="password" name="nueva_contraseña" placeholder="Nueva Contraseña" required>
                    <input type="password" name="confirmar_contraseña" placeholder="Confirmar Nueva Contraseña" required>
                    <button type="submit">Cambiar Contraseña</button>
                </form>
            </div>
        </div>
    </main>

    <script src="script.js"></script>
</body>

</html>
