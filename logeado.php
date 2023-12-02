<?php
include('config.php');
include('conexion.php');

// $para      = $_SESSION['user_email_address'];
// $titulo    = 'Credenciales de inicio de sesión StreetMovies';
// $mensaje   = 'Tu usuario es: ' . $usuario . ' y tu contraseña es: ' . $password;
// $cabeceras = 'From: webmaster@example.com' . "\r\n" .
//       'Reply-To: webmaster@example.com' . "\r\n" .
//       'X-Mailer: PHP/' . phpversion();
// mail($para, $titulo, $mensaje, $cabeceras) or die ('Error al enviar el correo');

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        StreetMovies
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" type="image/png" href="./images/icono.png">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://apis.google.com/js/api.js"></script>
        <style>
        /* Estilos básicos para el botón de búsqueda */
        .search-button {
            padding: 10px 20px;
            background-color: red;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
        }

        .search-input {
            padding: 10px;
            width: 200px; /* Ajusta el ancho según tus preferencias */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 12px;
            margin-bottom: 5px;
        }

        /* Estilo adicional al enfocar el input */
        .search-input:focus {
            outline: none;
            border-color: #4CAF50; /* Cambia el color al enfocar el input */
        }

        /* Puedes agregar más estilos según tus preferencias */
        .top-movies-slide {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: rgba(0, 0, 0, 0.8); /* Fondo negro transparente */
            color: white; /* Texto en color blanco */
        }

        .movie-info-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .movie-info {
            flex: 0 0 60%; /* 60% del ancho del contenedor */
        }

        .movie-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .movie-poster {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .trailer-container {
            flex: 0 0 35%; /* 35% del ancho del contenedor */
            text-align: right; /* Alinear el trailer a la derecha */
        }

        .trailer-link {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .trailer-link:hover {
            text-decoration: underline;
        }

        #player {
            background: rgba(0, 0, 0, 0.5); /* Fondo negro transparente para el reproductor de video */
            border-radius: 8px;
            padding: 10px;
        }
    
    </style>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="#" class="logo">
                    <i class='bx bx-movie-play bx-tada main-color'></i>Stre<span class="main-color">et</span>Movies
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="./Peliculas.php">Peliculas</a></li>
                    <li><a href="./series.php">Series</a></li>
                    <li><a href="./acercaDe.php">Acerca de</a></li>
                    <li>
                    <input class="search-input"
                        onkeyup="getanswer(document.getElementById('qurybox').value)"
                        id="qurybox"
                        />
                        <input type="hidden" id="qurybox"/>
                        <button class="search-button" onclick="searchAndPlay()"> Buscar</button>
                        <script>
                            // Cargar la API de YouTube
                            gapi.load('client', init);

                            // Inicializar la API de YouTube
                            function init() {
                                gapi.client.init({
                                    apiKey: 'AIzaSyCcFks5LcPMrEwa0QCHzA2qHxcBUr92Em0', 
                                    discoveryDocs: ["https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest"],
                                }).then(function () {
                                    console.log('API de YouTube cargada.');
                                }, function (error) {
                                    console.error('Error al cargar la API de YouTube.', error);
                                });
                            }

                        </script>
                    </li>
                    <li>
                        <?php
                        if ($login_button == '') {
                            echo '<div style="text-align: center;">';
                            echo '<img src="'.$_SESSION["user_image"].'" class="user-image" />';
                            echo '<br>';
                            echo '<h3>'.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
                            echo '</div>';
                        } else {
                            echo '<div align="center">'.$login_button.'</div>';
                        }
                        ?>
                    </li>
                    <li>
                    <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
                    </li>
                    </li>
                </ul>
                <!-- MENU PARA CELULAR -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
                <!-- fin MENU PARA CELULAR -->
            </div>
        </div>
    </div>

    <!-- FIN NAV -->

    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- PELICULA DEL SLIDE -->
                <div class="hero-slide-item">
                    <img src="./images/black-banner.png" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Black Panther
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                            Hace millones de años, un meteorito de poderoso vibranium impactó en África. Cuando llegó la era del hombre, 
                            la mayoría de los habitantes de aquel territorio se unieron bajo el mando de un guerrero chamán que, 
                            gracias al vibranium, adquirió fuerza, velocidad e instinto sobrehumano, 
                            convirtiéndose en el primer Black Panther.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="./verVideo.php" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Ver ahora</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN PELICULA DEL SLIDE -->
                <!-- PELICULA DEL SLIDE -->
                <div class="hero-slide-item">
                    <img src="./images/supergirl-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Supergirl
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                            Supergirl es un drama de acción y aventuras basado en el personaje de DC Comics Kara Zor-El (Melissa Benoist), 
                            la prima de Superman, quien después de 12 años escondiendo sus poderes 
                            al mundo decide aceptar sus habilidades para convertirse en una superheroína.

                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="./verVideo.php" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Ver ahora</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN PELICULA DEL SLIDE -->
                <!-- PELICULA DEL SLIDE -->
                <div class="hero-slide-item">
                    <img src="./images/wanda-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Wanda Vision
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                            WandaVision, Bruja Escarlata y Visión en España, sigue la historia de Bruja Escarlata. En un principio, 
                            la vimos como una supervillana miembro de la Hermandad de Mutantes. Esta superheroína, 
                            que se convirtió en miembro de Los Vengadores, 
                            posee poderes para cambiar la realidad de varias formas no específicas además de ser una gran hechicera.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="./verVideo.php" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Ver ahora</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN PELICULA DEL SLIDE -->
            </div>
        </div>
        <!-- FIN HERO SLIDE -->
        <!-- TOP PELICULAS SLIDE -->
        <div class="top-movies-slide">
        <div class="movie-info-container">
                    <div class="movie-info" id="answer"></div>
                    <div class="trailer-container" id="player"></div>
                </div><div class="movie-info">
                        <div class="movie-title" id="title"></div>
                        <div class="movie-details" id="answer"></div>
                    </div>
                    <div class="trailer-container" id="player"></div>
        <script>
            var data;
            gapi.load('client', init);

            function getanswer(q) {
                $.get(
                    "https://www.omdbapi.com/?s=" + q + "&apikey=ba1f4581",
                    function (rawdata) {
                        var rawstring = JSON.stringify(rawdata);
                        data = JSON.parse(rawstring);
                        var title = data.Search[0].Title;
                        var year = data.Search[0].Year;
                        var imdburl = "https://www.imdb.com/title/" + data.Search[0].imdbID + "/";
                        var posterurl = data.Search[0].Poster;

                        // Agregar el enlace al tráiler
                        var traiLink = "https://www.imdb.com/video/" + data.Search[0].imdbID + "/";
                        document.getElementById("answer").innerHTML =
                            "<h1>" + title + "</h1><br> <img src= '" + posterurl + "'><br><p> Year Released:" +
                            year + "</p> <br> <p> IMDB page: <a href='" + imdburl + "' target='_blank'>" + imdburl +
                            "</a></p> <br> <p> Trailers: <a href='" + traiLink + "' target='_blank'>Watch Trailer</a></p>";
                        
                            function searchAndPlay() {
                            var searchTerm = document.getElementById('searchTerm').value;

                        }

                    }
                );
            }
            // Buscar y reproducir un video en YouTube
            function searchAndPlay() {
                var searchTerm = document.getElementById('qurybox').value;

                // Realizar una búsqueda de video en YouTube
                gapi.client.youtube.search.list({
                    q: searchTerm,
                    part: 'snippet',
                    type: 'video',
                    maxResults: 1,
                }).then(function (response) {
                    var videoId = response.result.items[0].id.videoId;

                    // Insertar el reproductor de YouTube
                    var playerDiv = document.getElementById('player');
                    playerDiv.innerHTML = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' + videoId + '" frameborder="0" allowfullscreen></iframe>';
                }, function (error) {
                    console.error('Error al realizar la búsqueda en YouTube.', error);
                });
            }
        </script>
        <div id="player"></div>
        </div>
        <!-- FIN TOP PELICULAS SLIDE -->
    </div>
    <!-- FIN HERO SECTION -->

    <!-- ULTIMAS PELICULAS -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                Ultimas Peliculas
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/movies/theatre-dead.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Theatre of the dead
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/movies/transformer.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Transformer
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/movies/resident-evil.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Resident Evil
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/movies/captain-marvel.png" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Captain Marvel
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/movies/hunter-killer.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Hunter Killer
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/cartoons/demon-slayer.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Infinity Train
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/movies/call.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Call
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
            </div>
        </div>
    </div>
    <!-- FIN ULTIMAS PELICULAS -->

    <!-- SERIES POPULARES -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                Series populares
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/series/mandalorian.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Mandalorian
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/series/stranger-thing.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Stranger Things
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/series/wanda.png" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            WandaVision
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/series/penthouses.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Penthouses
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/series/star-trek.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Star Trek
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/cartoons/demon-slayer.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Infinity Train
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
                <!-- PELICULA -->
                <a href="./verVideo.php" class="movie-item">
                    <img src="./images/cartoons/dragon.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Dragon Ball Super
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- FIN PELICULA -->
            </div>
        </div>
    </div>
    <!-- FIN ULLTIMAS SERIES -->

    <!-- FOOTER SECTION -->
    <footer class="section">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="content">
                        <a href="#" class="logo">
                            <i class='bx bx-movie-play bx-tada main-color'></i>Stre<span class="main-color">et</span>Movies
                        </a>
                        <p>
                        En StreetMovies, creemos en el poder del cine para inspirar, entretener y conectar a las personas. Nuestra misión es brindarte una experiencia cinematográfica excepcional, donde cada película te transporte a un universo único de narrativas cautivadoras y experiencias inolvidables.
                        </p>
                    </div>
                </div>
                <div class="col-8 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Help</b></p>
                                <ul class="footer-menu">
                                    <li><a href="/acercaDe.php">ACERCA DE NOSOTROS</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="social-list">
                            <a href="#" class="social-item">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FIN FOOTER SECTION -->
    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="./js/app.js"></script>

</body>

</html>