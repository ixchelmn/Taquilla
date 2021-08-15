<?php 


// Include config file
include("/xampp/htdocs/Taquilla/app/con_db.php");


// Define variables and initialize with empty values
$nombre = "";
$nombre_err = "";
$apellido = "";
$apellido_err = ""; 
$identidad = "";
$identidad_err = "";
$id_pelicula = "";
$id_silla = " ";
$precio = "";
$descuento = "";
$total = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

 // Validar nombre
    if(empty(trim($_POST["nombre"]))){
        $nombre_err = "por favor ingrese su nombre.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM compras WHERE nombre = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_nombre);
            
            // Set parameters
            $param_nombre = trim($_POST["nombre"]);            
                     
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

     // Validar apellido
        if(empty(trim($_POST["apellido"]))){
            $apellido_err = "por favor ingrese sus apellidos.";
        } else{
            // Prepare a select statement
            $sql = "SELECT id FROM compras WHERE apellido = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_apellido);
                
                // Set parameters
                $param_apellido = trim($_POST["apellido"]);            
                         
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }

         // Validar identidad
            if(empty(trim($_POST["identidad"]))){
                $identidad_err = "por favor ingrese su identidad.";
            } else{
                // Prepare a select statement
                $sql = "SELECT id FROM compras WHERE identidad = ?";
                
                if($stmt = mysqli_prepare($link, $sql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_identidad);
                    
                    // Set parameters
                    $param_identidad = trim($_POST["identidad"]);            
                             
                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }
 
    
    
    // Check input errors before inserting in database
             //calculo impuesto
    $impuesto = $param_precio * 0.15;
    $total = $param_precio - $impuesto;
        // Prepare an insert statement
        $sql = "INSERT INTO compras (nombre, apellido, identidad, id_pelicula, id_silla) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_nombre, $param_apellido, $param_identidad, $param_id_pelicula, $param_id_silla);
            
            // Set parameters
            $param_nombre = $nombre;
            $param_apellido = $apellido;
            $param_identidad = $identidad;
            $param_id_pelicula = $id_pelicula;
            $param_id_silla = $id_silla;

                //Actualizar sillas
    $sqlu = "UPDATE sillas SET status=0 WHERE id_silla=$id_silla";

    if ($link->query($sqlu) === TRUE) {
        echo "compra completada";
      } else {
        echo "Error en la compra: " . $link->error;
      }
        
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header('location: boletos.php');
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    
    
    // Close connection
    mysqli_close($link);
}
