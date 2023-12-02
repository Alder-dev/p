<?php
include('conexion.php');
include('config.php');

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$passw = $_POST['pass'];
$rol = $_POST['rol'];

// Verificar si el usuario ya existe
$check_query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$result = $conexion->query($check_query);

if ($result->num_rows > 0) {
    // El usuario ya existe, manejar según sea necesario
    header('Location: main.php');
} else {
    // El usuario no existe, proceder con la inserción
    $insert_query = "INSERT INTO usuarios (usuario, passw, rol) VALUES ('$usuario', '$passw', '$rol')";

    if ($conexion->query($insert_query) === TRUE) {
        // Redirigir después de la inserción exitosa
        header('Location: logeado.php');
    } else {
        echo "Error en la inserción: " . $conexion->error;
    }
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
