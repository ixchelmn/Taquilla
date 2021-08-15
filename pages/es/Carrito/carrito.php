<?php
include("../../../top-bar.php");
include("/xampp/htdocs/Taquilla/app/con_db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Crea, Vende y Compra Diseños 100% originales">
    <meta name="author" content="Ixchel Valentina Martinez Noreña">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/Taquilla/src/img/iconoSitio-03.png" type="image/x-icon">
    <title>Hatch Atelier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../src/style/carrito.css">
    <link rel="stylesheet" href="../../../src/style/fontawesome-free-5.15.3-web/css/all.css">
</head>

<body>
    <header>

        <form action="" method="">
            <div class="container cart-text">
                <div class="row flex-center">
                    <div class="flex-center flex-column card cart-card col-lg-8 col-md-10 col-sm-12">
                        <h4 class="cart-title">Tu Carrito:</h4>

                        <?php if (isset($_SESSION['cart'])) : ?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6 subtitle-row flex-center">Producto</div>
                                    <div class="col-3 subtitle-row flex-center">Cantidad</div>
                                    <div class="col-3 subtitle-row flex-center">Precio</div>

                                    <?php
                                    $totalprice = 0;
                                    $arrProductIds = array();
                                    foreach ($_SESSION['cart'] as $id => $value) {
                                        $arrProductIds[] = $id;
                                    }
                                    $strIds = implode(",", $arrProductIds);
                                    $sql = "SELECT idproducto, nombre, Precio_Unitario, imagen FROM producto WHERE idproducto IN (" . $strIds . ")";
                                    $result = mysqli_query($link, $sql);

                                    $productRows = [];
                                    $productRows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                    foreach ($productRows as $row) {
                                        $quantity =  $_SESSION['cart'][$row['idproducto']]['quantity'];
                                        $subtotal = $quantity * $row['Precio_Unitario'];
                                        $totalprice += $subtotal;
                                    ?>
                                        <div class="row standard-height product-row">
                                            <div class="col-6 standard-height">
                                                <div class="row standard-height">
                                                    <div class="col-4 standard-height flex-center">
                                                        <img class="cart-product-image" src="<?php echo $row['imagen'] ?>" />
                                                    </div>
                                                    <div class="col-8 flex-column flex-center-horizontal">
                                                        <span><?php echo $row['nombre'] ?></span>
                                                        <!-- <span>Tamaño: XL</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 flex-center standard-height">
                                                <div>
                                                    <button type="button" class="btn btn-outline-secondary">-</button>
                                                    <span><?php echo $quantity ?></span>
                                                    <button type="button" class="btn btn-outline-secondary">+</button>
                                                </div>

                                            </div>
                                            <div class="col-3 flex-center flex-space-evenly standard-height">
                                                <h4><?php echo $subtotal ?>$</h4>
                                                <button type="button" class="btn btn-outline-secondary rounded">x</button>
                                            </div>

                                        </div>

                                    <?php
                                    }
                                    ?>

                                    <div class="fill-width flex-end">
                                        <h4>Total: <?php echo $totalprice ?>$</h4>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <h4 class="cart-title">No tienes productos aun...</h4>
                        <?php endif; ?>

                    </div>

                    <div class="flex-center flex-column card cart-card col-lg-8 col-md-10 col-sm-12">
                        <h4 class="cart-title">Datos de Envio:</h4>

                        <div class="container">
                            <div class="row">

                                <div class="col-6">
                                    <span>Direccion</span>
                                    <textarea class="fill-width" required></textarea>

                                    <img class="truck-img" src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/007/508/original/truck.png" />
                                </div>

                                <div class="col-6 flex-column flex-space-evenly">
                                    <div>
                                        <span>Telefono</span>
                                        <input type="number" name="telefono" class="fill-width cart-form-input" required></input>
                                    </div>
                                    <div>
                                        <span>Ciudad</span>
                                        <input type="text" name="ciudad" class="fill-width cart-form-input" required></input>
                                    </div>
                                    <div>
                                        <span>Departamento</span>
                                        <select name="departamento" class="fill-width cart-form-input">
                                            <option value="Atlantida">Atlantida</option>
                                            <option value="Colon">Colon</option>
                                            <option value="Comayagua">Comayagua</option>
                                            <option value="Copan">Copan</option>
                                            <option value="Cortes">Cortes</option>
                                            <option value="Choluteca">Choluteca</option>
                                            <option value="El Paraiso">El Paraiso</option>
                                            <option value="Francisco Morazan">Francisco Morazan</option>
                                            <option value="Gracias a Dios">Gracias a Dios</option>
                                            <option value="Intibuca">Intibuca</option>
                                            <option value="Islas de la Bahia">Islas de la Bahia</option>
                                            <option value="La Paz">La Paz</option>
                                            <option value="Lempira">Lempira</option>
                                            <option value="Ocotepeque">Ocotepeque</option>
                                            <option value="Olancho">Olancho</option>
                                            <option value="Santa Barbara">Santa Barbara</option>
                                            <option value="Valle">Valle</option>
                                            <option value="Yoro">Yoro</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="flex-center flex-column card cart-card col-lg-8 col-md-10 col-sm-12">
                        <h4 class="cart-title">Datos de Pago:</h4>

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <span>Numero de tarjeta</span>
                                    <input class="fill-width" type="number" required></input>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 flex-column flex-space-evenly">
                                <i class="far fa-credit-card fa-7x"></i> 
                                </div>
                                <div class="col-6 flex-column flex-space-evenly">
                                    <div>
                                        <span>CVV</span>
                                        <input type="number" name="telefono" class="fill-width cart-form-input" required></input>
                                    </div>
                                    <div>
                                        <div class="fill-width">
                                            <span class="fill-width">Expiracion</span>
                                        </div>
                                        <input min="1" type="number" name="year" class="expiration-input" required></input>
                                        /
                                        <input min="21" type="number" name="year" class="expiration-input" required></input>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <button class="no-border pink-button buy-button">
                        Comprar
                    </button>
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