    <?php
    include("iniciar-sesion.php");
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <?php
    include("../../../top-bar.php");
    ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Crea, Vende y Compra Diseños 100% originales">
        <meta name="author" content="Ixchel Valentina Martinez Noreña">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/Taquilla/src/img/iconoSitio-03.png" type="image/x-icon">
        <title>Hatch Atelier</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="/Taquilla/src/style/log-in.css">
        <link rel="stylesheet" href="/Taquilla/src/style/fontawesome-free-5.15.3-web/css/all.css">
    </head>


    <body>
        <header>

            <!---termina barra de navegacion-->
            <div class="container flex-center flex-center-horizontal">
                <div class="row">
                    <div class="">
                        <div class="login-form bg-light mt-4 p-2">
                            <?php
                            if (!empty($login_err)) {
                                echo '<div class="alert alert-danger">' . $login_err . '</div>';
                            }
                            ?>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <h4 class="title-signup ">¡Bienvenido de Vuelta!</h4>
                                <div class="form-group">
                                    <div class="col-12">
                                        <label>Usuario</label>
                                        <input type="text" name="username" placeholder="usuario" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>"><span class="invalid-feedback"><?php echo $username_err; ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-12">
                                        <label>Contraseña</label>
                                        <input type="password" name="password" placeholder="contraseña" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe"> Recúerdame</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-12 flex-center">
                                        <button type="submit" class="btn pink-button" value="Login">Log In</button>
                                    </div>
                                </div>
                            </form>
                            <hr class="mt-4">
                            <div class="container-register">
                                <p class="text">¿Todavía no tienes cuenta? <a class="text-register" href="/Taquilla/pages/es/Log-in/registrate.php">Registrate</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <nav class="navbar navbar-expand-lg navbar-light navbar-color">
                    <!-- Inicia codigo para la barra de navegacion -->
                    <div class="container-fluid nav-bar-brand-container">
                        <!-- contenedor del logo y su respectivo enlace asi como de todo el navbar-->
                        <a class="navbar-brand" href="index.php">
                            <img src="/Taquilla/src/img/Asset 1.svg" alt="" width="80" height="110" class="d-inline-block align-text-center">
                            Hatch Atelier
                        </a>

                        <div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse navbar-links" id="navbarSupportedContent">
                                <!-- contenedor enlaces centrales -->
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <!-- inicia drop down -->
                                    <li class="nav-item dropdown">
                                        <!-- primer item drop down -->
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Compra
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Compra/ropa.php">Ropa</a></li>
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Compra/stickers-posters.php">Stickers
                                                    y Posters</a></li>
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Compra/papeleria.php">Papeleria</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Compra/accesorios.php">Accesorios</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Compra/suscribite.php">Suscribite</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Vende tus Diseños
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Vende-tus-diseños/comienza-a-vender.php">¡Comienza a
                                                    Vender!</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Vende-tus-diseños/como-subir-disenos.php">¿Cómo subir
                                                    tus
                                                    Diseños?</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Acerca de Nosotros
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Acerca-de-Nosotros/que-es-hatch.php">¿Qué es Hatch
                                                    Atelier?</a></li>
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Vende-tus-diseños/comienza-a-vender.php">Vende tus
                                                    Diseños</a></li>
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Acerca-de-Nosotros/contactanos.php">Contáctanos</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="https://www.ixchelmartinez.com">Blog
                                                    Ixchel
                                                    martinez</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Ayuda
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Ayuda/tutoriales-de-compra.php">Tutoriales de
                                                    Compra</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Ayuda/entregas.php">Entregas</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Vende-tus-diseños/como-subir-disenos.php">¿Cómo subir
                                                    tus
                                                    Diseños?</a></li>
                                            <li><a class="dropdown-item" href="/Taquilla/pages/es/Acerca-de-Nosotros/contactanos.php">Contáctanos</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul> <!-- Termina dropdown -->
                            </div>
                        </div>

                        <div class="collapse navbar-collapse normal-link" id="navbarSupportedContent">
                            <!-- contenedor de log in / Registrate -->
                            <ul class="navbar-nav mb-2 mb-lg-0"></ul>
                            <a class="normal-link" href="/Taquilla/pages/es/Log-in/log-in.php">Log In</a>
                            <a href="/Taquilla/pages/es/Log-in/registrate.php" button class="btn btn-outline-success no-border pink-button" type="submit">Registrate</button></a>
                            <a href="/Taquilla/pages/es/Carrito/carrito.php" title="cart-icon"><i class="fas fa-shopping-cart icon-spacing-cart px-2"></i></i></a>

                        </div>
                    </div>
                </nav>
                <div style="background-color: #F3F0E8; width: 100%; display: flex; justify-content: space-evenly;">
                    <nav>
                        <a href="https://www.linkedin.com/in/ixchel-martinez-788b071bb/@gmail.com" style="text-decoration: none;"><img src="/Taquilla/src/style/fontawesome-free-5.15.3-web/svgs/brands/linkedin-in.svg" alt="Redes Sociales" style="width:20px; height: 20px;"> </a>
                        <a href="https://www.facebook.com/Hatch-Atelier-319841905408913" style="text-decoration: none;"><img src="/Taquilla/src/style/fontawesome-free-5.15.3-web/svgs/brands/facebook-f.svg" alt="Redes Sociales" style="width:20px; height: 20px;"> </a>
                        <a href="https://www.instagram.com/ixchelmn/?hl=en" style="text-decoration: none;"><img src="/Taquilla/src/style/fontawesome-free-5.15.3-web/svgs/brands/instagram-square.svg" alt="Redes Sociales" style="width:20px; height: 20px;">
                        </a>
                    </nav>
                </div>
            </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

    </html>