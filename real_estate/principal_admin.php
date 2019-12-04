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
    <title>Administrador</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <body>
    <!-- Barra Donde esta el superior de botones para salir y otros... -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Bienvenido : <?php echo $_SESSION['nombre']." ".$_SESSION["apellido"]; ?> </a>
      <a href="cerrar_sesion.php"><img src="img/logout.png"/></a> 
    </nav>

    <section class="container py-4">
     <ul id="clothing-nav" class="nav nav-tabs" role="tablist">
        <!-- Dropdown -->
       <li class="nav-item dropdown" id="tab_user_espera">
           <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Usuarios en espera
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#dropdown-G" role="tab" id="dropdown-ges-tab" data-toggle="tab" aria-controls="dropdownG">Gestores</a>
            <a class="dropdown-item" href="#dropdown-P" role="tab" id="dropdown-prop-tab" data-toggle="tab" aria-controls="dropdownP">Propietarios</a>
           </div>
        </li>
       <li class="nav-item dropdown" id="tab_user_activos">
           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Usuarios Activos
          </a>
          <div class="dropdown-menu" >
            <a class="dropdown-item" href="#dropdown-Gestor" role="tab" id="dropdown-ges-tab" data-toggle="tab" aria-controls="dropdownGes">Gestores</a>
            <a class="dropdown-item" href="#dropdown-Propietario" role="tab" id="dropdown-prop-tab" data-toggle="tab" aria-controls="dropdownProp">Propietarios</a>
           </div>
        </li>
     </ul>
  
  <!-- Content Panel -->

 <div id="clothing-nav-content" class="tab-content">
  <div role="tabpanel" class="tab-pane fade" id="dropdown-G" aria-labelledby="dropdown-G-tab">
    <!-- Acá va la tabla para para los gestores inactivos -->
    <br><h3>Gestores En Espera</h3>
      <div class="table-responsive">
        <table class="table">
           <tr>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Acción</th>
           </tr>
          <?php  
               $sql = "SELECT * FROM gestor WHERE aceptado=0"; 
               $result = mysqli_query(conecta(), $sql);
               while($mostrar=mysqli_fetch_array($result)){ 
          ?>
           <tr>
             <td><?php echo $mostrar['rut'];?></td>
             <td><?php echo $mostrar['nombre'];?></td>
             <td><?php echo $mostrar['apellido'];?></td>
             <td><?php echo $mostrar['telefono'];?> </td>
             <td><?php echo $mostrar['correo_gestor'];?> </td>
             <td>
             <a href="funciones/procesa_gestor.php?rutGA=<?php echo $mostrar['rut'];?>" ><img src="img/checked.png"></a>
               <a href="funciones/procesa_gestor.php?rutEG=<?php echo $mostrar['rut'];?>"><img src="img/uncheked.png"></a>
             </td>
           </tr>
               <?php 
                }
               ?>
      </table>
      </div>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="dropdown-P" aria-labelledby="dropdown-P-tab">
     <!-- Acá va la tabla para para los propietarios inactivos -->
        <br><h3>Propietarios En Espera</h3>
        <div class="table-responsive">
        <table class="table">
           <tr>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Acción</th>
           </tr>
          <?php  
               $sql = "SELECT * FROM propietario WHERE aceptado=0"; 
               $result = mysqli_query(conecta(), $sql);
               while($mostrar=mysqli_fetch_array($result)){ 
          ?>
           <tr>
             <td><?php echo $mostrar['rut'];?></td>
             <td><?php echo $mostrar['nombre'];?></td>
             <td><?php echo $mostrar['apellido'];?></td>
             <td><?php echo $mostrar['telefono'];?> </td>
             <td><?php echo $mostrar['correo_prop'];?> </td>
             <td>
               <a href="funciones/procesa_prop.php?rutPA=<?php echo $mostrar['rut'];?>"><img src="img/checked.png"></a>
               <a href="funciones/procesa_prop.php?rutEP=<?php echo $mostrar['rut'];?>"><img src="img/uncheked.png"></a>
             </td>
           </tr>
               <?php 
                }
               ?>
      </table>
      </div>
    </div>
   </div>

  <div id="clothing-nav-content" class="tab-content">
    <!--Tabs de usuarios activos  -->
    <div role="tabpane2" class="tab-pane fade" id="dropdown-Gestor" aria-labelledby="dropdownGes">
     
      <br><h3>Gestores Activos</h3>
      <div class="table-responsive">
        <table class="table">
           <tr>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Correo</th>
           </tr>
          <?php  
               $sql = "SELECT * FROM gestor WHERE aceptado=1"; 
               $result = mysqli_query(conecta(), $sql);
               while($mostrar=mysqli_fetch_array($result)){ 
          ?>
           <tr>
             <td><?php echo $mostrar['rut'];?></td>
             <td><?php echo $mostrar['nombre'];?></td>
             <td><?php echo $mostrar['apellido'];?></td>
             <td><?php echo $mostrar['telefono'];?> </td>
             <td><?php echo $mostrar['correo_gestor'];?> </td>
           </tr>
               <?php 
                }
               ?>
      </table>
     </div>
   </div>
    <div role="tabpane2" class="tab-pane fade" id="dropdown-Propietario" aria-labelledby="dropdownProp">
    <br><h3>Propietarios Activos</h3>
        <div class="table-responsive">
        <table class="table">
           <tr>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Correo</th>
           </tr>
          <?php  
               $sql = "SELECT * FROM propietario WHERE aceptado=1"; 
               $result = mysqli_query(conecta(), $sql);
               while($mostrar=mysqli_fetch_array($result)){ 
          ?>
           <tr>
             <td><?php echo $mostrar['rut'];?></td>
             <td><?php echo $mostrar['nombre'];?></td>
             <td><?php echo $mostrar['apellido'];?></td>
             <td><?php echo $mostrar['telefono'];?> </td>
             <td><?php echo $mostrar['correo_prop'];?> </td>
           </tr>
               <?php 
                }
               ?>
      </table>
      </div>
   </div>
 </div> 
 
  
  
    </section>
    
    <!--SCRIPTS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="js\admin_page.js"></script>
    <?php 
  }else{
    header('Location: ../index.php');
  }
    ?>
  </body>
</html>

