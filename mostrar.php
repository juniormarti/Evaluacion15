<?php
  require_once("conexion.php");
  require_once("enviar.php");
  require_once("cargar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>NOMINA</h1>
    <br><br>

    <div class="card-body">

                <?php
                  cargarDatos();
                ?>

              </div>
        
</body>
    </html>