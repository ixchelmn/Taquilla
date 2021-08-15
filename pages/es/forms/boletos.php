<!DOCTYPE html>
<html lang="en">


<?php
include("boleteria.php");
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
    <link rel="stylesheet" href="/Taquilla/src/style/boletos.css">
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
                                    <input type="text" name="nombre" placeholder="Nombre Completo" class="form-control <?php echo (!empty($nombre_err)); ?>" value="<?php echo $nombre; ?>">
                                    <span class="invalid-feedback"><?php echo $nombre_err; ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label>Apellidos</label>
                                    <input type="text" name="apellido" placeholder="Apellidos" class="form-control <?php echo (!empty($apellido_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $apellido; ?>">
                                    <span class="invalid-feedback"><?php echo $apellido_err; ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label>Identidad</label>
                                    <input type="text" name="identidad" placeholder="Numero de Identidad" class="form-control" value="<?php echo $identidad; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <p>Seleccione Una Pelicula del menu siguiente:</p>
                                <p>Peliculas:
                                    <select name="id_pelicula" class="form-control">
                                        <option value="0">Seleccione:</option>
                                        <?php
                                        $valor_pelicula = 0;
                                        $query = $link->query("SELECT * FROM peliculas");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores[id_pelicula] . '">' . $valores[nombre_pelicula] . $valores[valor_pelicula] . '</option>';
                                            $valor_pelicula = $valores[valor_pelicula];
                                        }

                                        ?>
                                    </select>
                            </div>
                            <div class="form-group">
                                <p>Seleccione asientos disponibles:</p>
                                <p>Asientos:
                                    <select name="id_silla" class="form-control">
                                        <option value="0">Seleccione:</option>
                                        <?php
                                        $query = $link->query("SELECT * FROM sillas WHERE status=1");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores[num_silla] . '">' . $valores[num_silla] . '</option>';
                                        }
                                        ?>
                                    </select>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label>Costo Total</label>
                                    <input type="text" name="precio" placeholder="Precio" class="form-control" value="100">
                                </div>
                            </div>

                    </div>
                    <div class="col-12 flex-center">
                        <button type="submit" class="btn pink-button" name="register">Compra tus Boletos</button>
                    </div>
                    </form>
                    <?php
                    function rebajas($precio)
                    {
                        $descuento = ($precio * 0.15);
                        $total = $precio + $descuento;
                        return array($descuento, $total);
                    }
                    $precio = $_POST['precio'];
                    $descuento = $_POST['descuento'];
                    list($rebaja, $precioFinal) = rebajas($precio, $descuento);
                    echo "Precio inicial: $precio. <br/>";
                    echo "Este artículo está rebajado en $descuento L. <br/>";
                    echo "Precio final del artículo: $total L.";
                    ?>
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


                        <a href="/Taquilla/pages/es/forms/boletos.php" button class="btn btn-outline-success no-border pink-button" type="submit">BOLETOS</button></a>


                    </div>
                </div>
            </nav>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>