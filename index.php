<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Crea, Vende y Compra Diseños 100% originales">
    <meta name="author" content="Ixchel Valentina Martinez Noreña">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="src/img/favicon.ico" type="image/x-icon">
    <title>App Taquilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style/home.css">
    <link rel="stylesheet" href="src/style/fontawesome-free-5.15.3-web/css/all.css">

</head>

<body>
    <header>
        <?php
        include("top-bar.php");
        ?>


        <!--Termina codigo barra de navegacion -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="src/img/poster1.png" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="src/img/poster2.png" class="d-block w-100" alt="...">
                </div>
            </div>

            <div class="slider1-container">
                <p class="slider1-text">Compra Tus Boletos</p>
                <a href="/Taquilla/pages/es/Compra/suscribite.php" button class="btn btn-outline-success pink-button slider1-suscribe-button" type="submit">Boletos</button></a>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <header>

            <main>
                <div class="marketing-text">
                    <h1>Asegura tu lugar con nuestras preventas</h1>
                </div>

            </main>
            <footer>
                <nav class="navbar navbar-expand-lg navbar-light navbar-color">
                    <!-- Inicia codigo para la barra de navegacion -->
                    <div class="container-fluid nav-bar-brand-container">
                        <!-- contenedor del logo y su respectivo enlace asi como de todo el navbar-->
                        <a class="navbar-brand" href="/Taquilla/index.php">
                            <img src="/Taquilla/src/img/logo2.png" alt="" width="100" height="110" class="d-inline-block align-text-center">
                            Taquilla
                        </a>

                        <h4 class="text-justify px-4 navbar-brand">¡COMPRA BOLETOS PARA TUS PELICULAS FAVORITAS!</h4>

                        <div class="collapse navbar-collapse normal-link" id="navbarSupportedContent">
                            <!-- contenedor de log in / Registrate -->
                            <ul class="navbar-nav mb-2 mb-lg-0"></ul>


                            <a href="/Taquilla/pages/es/Log-in/registrate.php" button class="btn btn-outline-success no-border pink-button" type="submit">BOLETOS</button></a>


                        </div>
                    </div>
                </nav>
                <a href="https://www.linkedin.com/in/ixchel-martinez-788b071bb/@gmail.com" style="text-decoration: none;"><img src="src/style/fontawesome-free-5.15.3-web/svgs/brands/linkedin-in.svg" alt="Redes Sociales" style="width:20px; height: 20px;"> </a>
                <a href="https://www.facebook.com/Hatch-Atelier-319841905408913" style="text-decoration: none;"><img src="src/style/fontawesome-free-5.15.3-web/svgs/brands/facebook-f.svg" alt="Redes Sociales" style="width:20px; height: 20px;"> </a>
                <a href="https://www.instagram.com/ixchelmn/?hl=en" style="text-decoration: none;"><img src="src/style/fontawesome-free-5.15.3-web/svgs/brands/instagram-square.svg" alt="Redes Sociales" style="width:20px; height: 20px;">
                </a>
                </nav>
                </div>
            </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>