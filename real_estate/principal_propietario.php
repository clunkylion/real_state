<?php
include('funciones/setup.php');
session_start();

if(isset($_SESSION['nombre']) && isset($_SESSION['apellido'])){
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Propietario</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Bienvenido : <?php echo $_SESSION['nombre']." ".$_SESSION["apellido"]; ?> </a>
      <a href="cerrar_sesion.php"><img src="img/logout.png"/></a> 
    </nav>
<?php }; ?>    