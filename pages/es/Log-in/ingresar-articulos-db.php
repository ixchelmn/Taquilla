<?php

// Include config file
include("/xampp/htdocs/Taquilla/app/con_db.php");


// Define variables and initialize with empty values
$nombre = "";
$idcategoria = "";
$iddiseño = "";
$QTY_EA = "";
$Precio_Unitario = " ";
$Imagen = "";
$nombre_err = "";
$idcategori_err = "";
$iddiseño_err = "";
$QTY_EA_err = "";
$Precio_Unitario_err = " ";
$Imagen_err = "";


// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    

    // Validar nombre
    if (empty(trim($_POST["nombre"]))) {
        $nombre_err = "Por favor ingrese nombre del articulo.";
    } else {
        // Prepare a select statement
        $sql = "SELECT idproducto FROM producto WHERE nombre = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_nombre);

            // Set parameters
            $param_nombre = trim($_POST["nombre"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $nombre_err = "El nombre ya esta en uso.";
                } else {
                    $nombre = trim($_POST["nombre"]);
                }
            } else {
                echo "Oops! Algo salio mal, por favor intentelo de nuevo mas tarde.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validar categoria
    if (empty(trim($_POST["idcategoria"]))) {
        $idcategoria_err = "Por favor ingrese el id de categoria del articulo.";
    } else {
        // Prepare a select statement
        $sql = "SELECT idproducto FROM producto WHERE idcategoria = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_idcategoria);

            // Set parameters
            $param_idcategoria = trim($_POST["idcategoria"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $idcategoria = trim($_POST["idcategoria"]);
            } else {
                echo "Oops! Algo salio mal, por favor intentelo de nuevo mas tarde.";
            }
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validar iddiseño
    if (empty(trim($_POST["iddiseño"]))) {
        $iddiseño_err = "Por favor ingrese el id del diseño articulo.";
    } else {
        // Prepare a select statement
        $sql = "SELECT idproducto FROM producto WHERE iddiseño = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_iddiseño);

            // Set parameters
            $param_iddiseño = trim($_POST["iddiseño"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_execute($stmt)) {
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    $iddiseño = trim($_POST["iddiseño"]);
                } else {
                    echo "Oops! Algo salio mal, por favor intentelo de nuevo mas tarde.";
                }
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
    }

    // Validar QTY_EA
    if (empty(trim($_POST["QTY_EA"]))) {
        $QTY_EA_err = "Por favor ingrese la cantidad de articulos a insertar.";
    } else {
        // Prepare a select statement
        $sql = "SELECT idproducto FROM producto WHERE QTY_EA = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_QTY_EA);

            // Set parameters
            $param_QTY_EA = trim($_POST["QTY_EA"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_execute($stmt)) {
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    $QTY_EA = trim($_POST["QTY_EA"]);
                } else {
                    echo "Oops! Algo salio mal, por favor intentelo de nuevo mas tarde.";
                }
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
    }

    // Validar Precio_Unitario
    if (empty(trim($_POST["Precio_Unitario"]))) {
        $Precio_Unitario_err = "Por favor ingrese el precio unitario del articulo.";
    } else {
        // Prepare a select statement
        $sql = "SELECT idproducto FROM producto WHERE Precio_Unitario = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_Precio_Unitario);

            // Set parameters
            $param_Precio_Unitario = trim($_POST["Precio_Unitario"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_execute($stmt)) {
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    $Precio_Unitario = trim($_POST["Precio_Unitario"]);
                } else {
                    echo "Oops! Algo salio mal, por favor intentelo de nuevo mas tarde.";
                }
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
    }

    // Validar Imagen 
    if (empty(trim($_POST["Imagen"]))) {
        $Imagen_err = "Por favor ingrese el URL de la imagen del articulo.";
    } else {
        // Prepare a select statement
        $sql = "SELECT idproducto FROM producto WHERE Imagen = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_Imagen);

            // Set parameters
            $param_Imagen = trim($_POST["Imagen"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_execute($stmt)) {
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    $Imagen = trim($_POST["Imagen"]);
                } else {
                    echo "Oops! Algo salio mal, por favor intentelo de nuevo mas tarde.";
                }
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
    }

    // Check input errors before inserting in database
    if (empty($nombre_err) && empty($idcategori_err) && empty($iddiseño_err) && empty($QTY_EA_err) && empty($Precio_Unitario_err) && empty($Precio_Unitario_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO producto (nombre, idcategoria, iddiseño, QTY_EA, Precio_Unitario, Imagen) VALUES (?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_nombre, $param_idcategoria, $param_iddiseño, $param_QTY_EA, $param_Precio_Unitario, $param_Imagen);

            // Set parameters
            $param_nombre = $nombre;
            $param_idcategoria = $idcategoria;
            $param_iddiseño = $iddiseño;
            $param_QTY_EA = $QTY_EA;
            $param_Precio_Unitario = $Precio_Unitario;
            $param_Imagen = $Imagen;


            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header('location: admin-dashboard.php');
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
