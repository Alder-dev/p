<?php
session_start();
include('conexion.php');
include('config.php');

    $usuario = $_POST['user'];
    $passw = $_POST['pass'];
    $rol = 0;
    
    $check_query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = $conexion->query($check_query);
    
    if ($result->num_rows > 0) {
        header('Location: logeado.php');
    } else {

       header('Location: register.php');

       if ($conexion->query($insert_query) === TRUE) {
       } else {
           echo "Error: " . $conexion->error;
       }
    }

?>