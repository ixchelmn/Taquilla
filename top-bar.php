<?php
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Taquilla">
    <meta name="author" content="Ixchel y Maureen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/Taquilla/src/img/favicon" type="image/x-icon">
    <title>App Taquilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/Taquilla/src/style/home.css">
    <link rel="stylesheet" href="/Taquilla/src/style/fontawesome-free-5.15.3-web/css/all.css">

</head>

<nav class="navbar navbar-expand-lg navbar-light navbar-color">
    <!-- Inicia codigo para la barra de navegacion -->
    <div class="container-fluid nav-bar-brand-container">
        <!-- contenedor del logo y su respectivo enlace asi como de todo el navbar-->
        <a class="navbar-brand" href="/Taquilla/index.php">
            <img src="/Taquilla/src/img/logo2.png" alt="" width="100" height="110" class="d-inline-block align-text-center">
            Taquilla
        </a>

        <h4 class="text-justify navbar-brand">¡COMPRA BOLETOS PARA TUS PELICULAS FAVORITAS!</h4>

        <div class="collapse navbar-collapse normal-link" id="navbarSupportedContent">
            <!-- contenedor de log in / Registrate -->
            <ul class="navbar-nav mb-2 mb-lg-0"></ul>


            <a href="/Taquilla/pages/es/forms/boletos.php" button class="btn btn-outline-success no-border pink-button" type="submit">BOLETOS</button></a>


        </div>
    </div>
</nav>