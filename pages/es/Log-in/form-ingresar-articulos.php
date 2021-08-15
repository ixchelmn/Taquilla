<!DOCTYPE html>
<html lang="en">

<?php
include("../../../top-bar.php");
?>

<?php
include("./ingresar-articulos-db.php");
?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Crea, Vende y Compra Diseños 100% originales">
    <meta name="author" content="Ixchel Valentina Martinez Noreña">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../../src/img/iconoSitio-03.png" type="image/x-icon">
    <title>Hatch Atelier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../src/style/user-dashboard.css">
    <link rel="stylesheet" href="../../../src/style/fontawesome-free-5.15.3-web/css/all.css">

</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container cart-text">
            <div class="row flex-center profile-container">
                <div class="flex-center flex-column card cart-card col-lg-8 col-md-10 col-sm-12">
                    <h3 class="cart-title showcase-title-text px-0">Ingreso de Articulos</h3>
                    <div class="container">
                        <div class="row flex-center ">
                            <div class="col-6 flex-column flex-space-evenly">
                                <!-- <input class="profile-file-input" accept="image/*" type='file' id="imgInp" onchange="preview_image(event)" /> -->

                                <div>
                                    <span>Nombre</span>
                                    <input type="text" name="nombre" class="fill-width cart-form-input" class="form-control <?php echo (!empty($nombre_err)); ?>" value="<?php echo $nombre; ?>">
                                    <span class="invalid-feedback"><?php echo $nombre_err; ?></span>
                                </div>

                                <div>
                                    <span>ID Categoria</span>
                                    <input type="number" name="idcategoria" class="fill-width cart-form-input" class="form-control <?php echo (!empty($idcategoria_err)); ?>" value="<?php echo $idcategoria; ?>">

                                </div>

                                <div>
                                    <span>ID Diseño</span>
                                    <input type="number" name="iddiseño" class="fill-width cart-form-input" class="form-control <?php echo (!empty($iddiseño_err)); ?>" value="<?php echo $iddiseño; ?>">

                                    <div>
                                        <span>Cantidad Por Articulo</span>
                                        <input type="number" name="QTY_EA" class="fill-width cart-form-input" class="form-control <?php echo (!empty($QTY_EA_err)); ?>" value="<?php echo $QTY_EA; ?>">
                                    </div>

                                    <div>
                                        <span>Precio Unitario</span>
                                        <input type="number" name="Precio_Unitario" class="fill-width cart-form-input" class="form-control <?php echo (!empty($Precio_Unitario_err)); ?>" value="<?php echo $Precio_Unitario; ?>">
                                    </div>

                                    <div>
                                        <span>Imagen</span>
                                        <input type="string" name="Imagen" class="fill-width cart-form-input" class="form-control <?php echo (!empty($Imagen_err)); ?>" value="<?php echo $Imagen; ?>">
                                    </div>

                                    <button type="submit" name="submit" value="Update" class="btn pink-button profile-submit">Insertar Articulo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>

    <footer>
        <nav class="navbar navbar-expand-lg navbar-light navbar-color">
            <!-- Inicia codigo para la barra de navegacion -->
            <div class="container-fluid nav-bar-brand-container">
                <!-- contenedor del logo y su respectivo enlace asi como de todo el navbar-->
                <a class="navbar-brand" href="index.html">
                    <img src="../../../src/img/Asset 1.svg" alt="" width="80" height="110" class="d-inline-block align-text-center">
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
                                    <li><a class="dropdown-item" href="/pages/es/Compra/ropa.html">Ropa</a></li>
                                    <li><a class="dropdown-item" href="/pages/es/Compra/stickers-posters.html">Stickers
                                            y Posters</a></li>
                                    <li><a class="dropdown-item" href="/pages/es/Compra/papeleria.html">Papeleria</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/pages/es/Compra/accesorios.html">Accesorios</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/pages/es/Compra/suscribite.html">Suscribite</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Vende tus Diseños
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/pages/es/Vende-tus-diseños/comienza-a-vender.html">¡Comienza
                                            a
                                            Vender!</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/pages/es/Vende-tus-diseños/como-subir-disenos.html">¿Cómo
                                            subir tus
                                            Diseños?</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Acerca de Nosotros
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/pages/es/Acerca-de-Nosotros/que-es-hatch.html">¿Qué es Hatch
                                            Atelier?</a></li>
                                    <li><a class="dropdown-item" href="/pages/es/Vende-tus-diseños/comienza-a-vender.html">Vende tus
                                            Diseños</a></li>
                                    <li><a class="dropdown-item" href="/pages/es/Acerca-de-Nosotros/contactanos.html">Contáctanos</a>
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
                                    <li><a class="dropdown-item" href="/pages/es/Ayuda/tutoriales-de-compra.html">Tutoriales de
                                            Compra</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/pages/es/Ayuda/entregas.html">Entregas</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/pages/es/Vende-tus-diseños/como-subir-disenos.html">¿Cómo
                                            subir tus
                                            Diseños?</a></li>
                                    <li><a class="dropdown-item" href="/pages/es/Acerca-de-Nosotros/contactanos.html">Contáctanos</a>
                                    </li>
                                </ul>
                            </li>
                        </ul> <!-- Termina dropdown -->
                    </div>
                </div>

                <div class="collapse navbar-collapse normal-link" id="navbarSupportedContent">
                    <!-- contenedor de log in / Registrate -->
                    <ul class="navbar-nav mb-2 mb-lg-0"></ul>
                    <a class="normal-link" href="/pages/es/Log-in/log-in.html">Log In</a>
                    <a href="/pages/es/Log-in/registrate.html" button class="btn btn-outline-success no-border pink-button" type="submit">Registrate</button></a>
                    <a href="/pages/es/Carrito/carrito.html" title="cart-icon"><i class="fas fa-shopping-cart icon-spacing-cart px-2"></i></i></a>

                </div>
            </div>
        </nav>
        <div style="background-color: #F3F0E8; width: 100%; display: flex; justify-content: space-evenly;">
            <nav>
                <a href="https://www.linkedin.com/in/ixchel-martinez-788b071bb/@gmail.com" style="text-decoration: none;"><img src="../../../src/style/fontawesome-free-5.15.3-web/svgs/brands/linkedin-in.svg" alt="Redes Sociales" style="width:20px; height: 20px;"> </a>
                <a href="https://www.facebook.com/Hatch-Atelier-319841905408913" style="text-decoration: none;"><img src="../../../src/style/fontawesome-free-5.15.3-web/svgs/brands/facebook-f.svg" alt="Redes Sociales" style="width:20px; height: 20px;"> </a>
                <a href="https://www.instagram.com/ixchelmn/?hl=en" style="text-decoration: none;"><img src="../../../src/style/fontawesome-free-5.15.3-web/svgs/brands/instagram-square.svg" alt="Redes Sociales" style="width:20px; height: 20px;">
                </a>
            </nav>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>