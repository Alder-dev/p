<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Peliculas
    </title>
    <link rel="icon" type="image/png" href="./images/icono.png">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/abus.css">
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="./index.php" class="logo">
                    <i class='bx bx-movie-play bx-tada main-color'></i>Se<span class="main-color">ri</span>es
                </a>
                <ul class="nav-menu" id="nav-menu">
                <li><a href="./logeado.php">Inicio</a></li>
                    <li><a href="./Peliculas.php">Peliculas</a></li>
                    <li><a href="series.php">Series</a></li>
                    <li><a href="./acercaDe.php">Acerca de</a></li>
                    <form action="/buscar" method="get" class="search-form">
                        <input type="text" placeholder="Buscar..." name="buscar">
                        <button type="submit"><i class="bx bx-search"></i></button>
                    </form>
                   
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAV -->

    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="./images/dahmer.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                            Jeffrey Dahmer
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
                            Es una miniserie sobre el asesino en serie Jeffrey Dahmer 
                            acusado de acabar con la vida de más de una decena de individuos, 
                            uidos varios niños, en Milwaukee y Ohio, entre 1978 y 1991..
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
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="./images/robot.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Mr. Robot
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
                            Un misterioso anarquista que se hace llamar Mr. Robot le pide que se una a su grupo de 'hackers' con el objetivo de destruir la empresa para la que trabaja. 
                            La ganadora del Globo de Oro a la mejor serie de televisión de 2015 en la categoría de drama fue esta producción con la informática como telón de fondo.
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
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="./images/edge.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Cyberpunk: EdgeRunners
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
                            Narra la historia de un chico que malvive en las calles de una ciudad futurista obsesionada con la tecnología y la modificación corporal. 
                            Con todo en su contra, opta por buscarse la vida convirtiéndose en un ‘edgerunner’, 
                            un mercenario proscrito’. Serie de animación basada en el videojuego 
                            "Cyberpunk 2077".
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
                <!-- END SLIDE ITEM -->
            </div>
        </div>
        <!-- END HERO SLIDE -->
    </div>
    <!-- END HERO SECTION -->

    <!-- SERIES POPULARES -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                Ultimas series
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
<!-- LATEST MOVIES SECTION -->
<div class="section">
    <div class="container">
        <div class="section-header">
            Anime
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel">
            <!-- MOVIE ITEM -->
            <a href="./verVideo.php" class="movie-item">
                <img src="./images/cartoons/dragon.jpg" alt="">
                <div class="movie-item-content">
                    <div class="movie-item-title">
                        Dragon Ball
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
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <a href="./verVideo.php" class="movie-item">
                <img src="./images/cartoons/onePiece.jpg" alt="">
                <div class="movie-item-content">
                    <div class="movie-item-title">
                        One piece
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
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <a href="./verVideo.php" class="movie-item">
                <img src="./images/cartoons/sao.jpg" alt="">
                <div class="movie-item-content">
                    <div class="movie-item-title">
                        Sword Art Online
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
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <a href="./verVideo.php" class="movie-item">
                <img src="./images/cartoons/toradora.jpg" alt="">
                <div class="movie-item-content">
                    <div class="movie-item-title">
                        Toradora!
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
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <a href="./verVideo.php" class="movie-item">
                <img src="./images/cartoons/abyss.jpg" alt="">
                <div class="movie-item-content">
                    <div class="movie-item-title">
                        Made in abyss
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
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
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
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <a href="./verVideo.php" class="movie-item">
                <img src="./images/cartoons/Relife.jpg" alt="">
                <div class="movie-item-content">
                    <div class="movie-item-title">
                        ReLife
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
            <!-- END MOVIE ITEM -->
        </div>
    </div>
</div>
<!-- END LATEST MOVIES SECTION -->

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