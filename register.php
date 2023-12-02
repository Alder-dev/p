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
    </form>
</div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>    
    </body>
</html>