<?php
include('conexion.php');
include('config.php');

$login_button = '';

if(isset($_GET["code"])) {
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    if(!isset($token['error'])) {
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];

        $google_service = new Google_Service_Oauth2($google_client);

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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreetMovies</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="icon" type="image/png" href="./images/icono.png">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <script src="main.js" defer></script>
</head>
    <body>
        <div class="box">
            <div class="left">
                <img src="images/imglog.png" alt="Logo">
            </div>
            <form method="POST" action="autenticacion.php" >
                <h2>Login | <span class="logo">StreetMovies</span></h2>
                <label>¿No tienes una cuenta? <a href="./register.php">Regístrate</a></label>
                <div class="input-box">
                    <input type="text" name="user" required>
                    <label>Usuario</label>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="pass" required>
                    <label>Contraseña</label>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="items">
                    <div class="left">
                        <input type="checkbox" id="check">
                        <span>Recuérdame</span>
                    </div>
                    <div class="right">
                        <a href="#">Olvidé mi contraseña</a>
                    </div>
                </div>
                <div class="btn">
                    <button type="submit">Iniciar sesión</button>
                </div>
                <div class="other-links">
                    <p>O puedes ingresar con:</p>
                    <div class="social">
                        <?php
                            if($login_button == '') {
                                $usuario = $_SESSION['user_first_name'];

                                $check_query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
                                $result = $conexion->query($check_query);

                                if ($result->num_rows > 0) {
                                    header('Location: sugerencia.php');
                                } else {
                                    header('Location: register.php');
                                }


                            } else {
                                echo $login_button;
                            }
                            ?>
                    </div>
                </div>
            </form>
        </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>    
    </body>
</html>