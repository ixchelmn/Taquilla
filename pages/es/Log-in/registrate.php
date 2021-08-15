<!DOCTYPE html>
<html lang="en">


<?php
include("registrar.php");
?>

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
    <link rel="stylesheet" href="/Taquilla/src/style/registrate.css">
    <link rel="stylesheet" href="/Taquilla/src/style/fontawesome-free-5.15.3-web/css/all.css">
</head>


<body>
    <header>

        <div class="container flex-center flex-center-horizontal">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="login-form bg-light mt-4 p-2">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="row g-3">
                            <div class="title-container">
                                <h4 class="title-signup text-center">¡Compra tus Boletos!</h4>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                    <label>Nombre Completo:</label>
                                    <input type="text" name="nombre" placeholder="Nombre Completo" class="form-control <?php echo (!empty($email_err)); ?>" value="<?php echo $email; ?>">
                                    <span class="invalid-feedback"><?php echo $email_err; ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label>Apellidos</label>
                                    <input type="text" name="apellido" placeholder="Apellidos" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label>Identidad</label>
                                    <input type="text" name="Identidad" placeholder="Numero de Identidad" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="dropdown">
                                    <button class="pink-button btn-secondary dropdown-toggle" type="button" id="comboPeliculas" data-bs-toggle="dropdown" aria-expanded="false">
                                        Elige tu pelicula
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="comboPeliculas">
                                        <li><a class="dropdown-item" href="#">Evangelion 3.0+1.0</a></li>
                                        <li><a class="dropdown-item" href="#">The Lighthouse</a></li>                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="dropdown">
                                    <button class="pink-button btn-secondary dropdown-toggle" type="button" id="comboPeliculas" data-bs-toggle="dropdown" aria-expanded="false" size="0">
                                        Elige tu silla
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="comboPeliculas">
                                        <li><a class="dropdown-item" href="#">1</a></li>
                                        <li><a class="dropdown-item" href="#">2</a></li>
                                        <li><a class="dropdown-item" href="#">3</a></li>
                                        <li><a class="dropdown-item" href="#">4</a></li>
                                        <li><a class="dropdown-item" href="#">5</a></li>
                                        <li><a class="dropdown-item" href="#">6</a></li>
                                        <li><a class="dropdown-item" href="#">7</a></li>
                                        <li><a class="dropdown-item" href="#">8</a></li>
                                        <li><a class="dropdown-item" href="#">9</a></li>
                                        <li><a class="dropdown-item" href="#">10</a></li>
                                        <li><a class="dropdown-item" href="#">11</a></li>
                                        <li><a class="dropdown-item" href="#">12</a></li>
                                        <li><a class="dropdown-item" href="#">13</a></li>
                                        <li><a class="dropdown-item" href="#">14</a></li>
                                        <li><a class="dropdown-item" href="#">15</a></li>
                                        <li><a class="dropdown-item" href="#">16</a></li>
                                        <li><a class="dropdown-item" href="#">17</a></li>
                                        <li><a class="dropdown-item" href="#">18</a></li>
                                        <li><a class="dropdown-item" href="#">19</a></li>
                                        <li><a class="dropdown-item" href="#">20</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label>Precio</label>
                                    <input type="text" name="precio" placeholder="Precio" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <div class="col-12">
                                    <label>Contraseña</label>
                                    <input type="password" name="password" placeholder="contraseña" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label>Confirmar Contraseña</label>
                                    <input type="password" name="confirm_password" placeholder="confirma tu contraseña" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                                    <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                                </div> -->
                            </div>
                            <div class="col-12 flex-center">
                                <button type="submit" class="btn pink-button" name="register">Compra tus Boletos</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>