<?php
use Google\Service\Oauth2;
include('config.php');
include('conexion.php');

$comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$passw = array(); 
$combLen = strlen($comb) - 1; 
for ($i = 0; $i < 8; $i++) {
    $n = rand(0, $combLen);
    $passw[] = $comb[$n];
}

$usuario = $_SESSION['user_first_name'];
$password = implode($passw);
$rol = 0;

$check_query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$result = $conexion->query($check_query);

if ($result->num_rows > 0) {
   
} else {
   // El correo no existe, proceder con la inserción
   $insert_query = "INSERT INTO usuarios (usuario, passw, rol) VALUES ('$usuario', '$password', '$rol')";
   if ($conexion->query($insert_query) === TRUE) {
   } else {
       echo "Error en la inserción: " . $conexion->error;
   }
}

$conexion->close();

$login_button = '';

if(isset($_GET["code"])) {
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    if(!isset($token['error'])) {
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];
       
        $google_service = new Google\Service\Oauth2($google_client);

        $data = $google_service->userinfo->get();

        if(!empty($data['given_name'])) {
            $_SESSION['user_first_name'] = $data['given_name'];
        }

        if(!empty($data['family_name'])) {
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if(!empty($data['email'])) {
            $_SESSION['user_email_address'] = $data['email'];
        }

        if(!empty($data['gender'])) {
            $_SESSION['user_gender'] = $data['gender'];
        }

        if(!empty($data['picture'])) {
            $_SESSION['user_image'] = $data['picture'];
        }
    }
}

if(!isset($_SESSION['access_token'])) {
    $login_button = '<a href="'.$google_client->createAuthUrl().'"><i class="fa-brands fa-google"></i></a>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreetMovies</title>
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <script src="main.js" defer></script>
</head>
<body>
    <div class="box">
        <div class="left">
            <img src="images/imglog.png" alt="Logo">
        </div>
        <form method="POST" action="registro.php">
            <h2>Registro | <span class="logo">StreetMovies</span></h2>
            <label>¿Ya tienes una cuenta? <a href="./main.php">Inicia sesión</a></label>
       
            <div class="input-box">
                <input type="text" name="usuario" required>
                <label>Usuario</label>
                <i class="fa-solid fa-user"></i>
            </div>
       
            <div class="input-box">
                <input type="email" name="email" required>
                <label>Email</label>
                <i class="fa-solid fa-envelope"></i>
            </div>
           
            <div class="input-box">
                <input type="password" name="contrasena" required>
                <label>Contraseña</label>
                <i class="fa-solid fa-lock"></i>
            </div>

            <div class="input-box">
                <input type="password" name="confirmar_contrasena" required>
                <label>Confirmar Contraseña</label>
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="items">
                <div class="left">
                    <input type="checkbox" id="check" required>
                    <span>Acepto los términos y condiciones</span>
                </div>
            </div>
            <div class="btn">
                <button type="submit">Registrarse</button>
            </div>
            <div class="other-links">
                <p>O puedes ingresar con:</p>
                <div class="social">
                  
                    <a href="#">
                        <?php
                            if($login_button == '') {
                                header('Location: main.php');
                            } else {
                                echo $login_button;
                            }
                        ?>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>    
</body>
</html>