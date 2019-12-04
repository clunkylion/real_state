<?php
$setup = "/wamp/www/real_estate/funciones/setup.php";
include($setup);

$sql="select * from administrador where rut='".$_POST['rut_login']."' and clave='".md5($_POST['clave_login'])."'";
$result=mysqli_query( conecta(),$sql);
$cant=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);
//var_dump($datos);
//var_dump($gestor);
//var_dump($propi);
if($cant!=0){
   //login admin
   session_start();
   $_SESSION['rut']=$datos['rut'];
   $_SESSION['nombre']=$datos['nombre'];
   $_SESSION['apellido']=$datos['apellido'];
   //echo "Se Ingreso";
   echo "2";
   //header('Location: ../principal_admin.php');
}else{
   //login con gestor
   $sqla="select * from gestor where rut='".$_POST['rut_login']."' and clave='".md5($_POST['clave_login'])."'";
   $resulta=mysqli_query( conecta(),$sqla);
   $gestor=mysqli_num_rows($resulta);
   $datosg=mysqli_fetch_array($resulta);
   
   if($gestor!=0){
      session_start();
      $_SESSION['rut']=$datosg['rut'];
      $_SESSION['nombre']=$datosg['nombre'];
      $_SESSION['apellido']=$datosg['apellido'];
      //var_dump($sqla);
      //echo "Se Ingreso";
     //header('Location: ../principal_gestor.php');
     echo "3";
   }else{
      //login de propietario
      $sqlad="select * from propietario where rut='".$_POST['rut_login']."' and clave='".md5($_POST['clave_login'])."'";
      $resultad=mysqli_query( conecta(),$sqlad);
      $propi=mysqli_num_rows($resultad);
      $datosp=mysqli_fetch_array($resultad);
      if($propi!=0){
         session_start();
         $_SESSION['rut']=$datosp['rut'];
         $_SESSION['nombre']=$datosp['nombre'];
         $_SESSION['apellido']=$datosp['apellido'];
         //echo "Se Ingreso";
        //header('Location: ../principal_propietario.php');
        echo "4";
      }else{
        // header('Location: /real_estate/index.php');
         //echo "Error a el Ingresar <br>";
         echo "1";
      }
   }
}


?>