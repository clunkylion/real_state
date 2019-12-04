<?php
$setup = "/wamp/www/real_estate/funciones/setup.php";
include($setup);

switch ($_POST['accion2']){

	case "Registrar": registrar();
	break;
}
   function registrar(){

	$sql1="select * from gestor where rut = '".$_POST['rut_propi']."'";
	$resulta=mysqli_query( conecta(),$sql1);
	$cants=mysqli_num_rows($resulta);
	
	$sql2="select * from propietario where rut = '".$_POST['rut_propi']."'";
	$resulte=mysqli_query( conecta(),$sql2);
	$cante=mysqli_num_rows($resulte);

	if($cants==0){
		if ($cante==0) {
			$rut = $_POST['rut_propi']; 
			$nomG = $_POST['nom_propi']; 
			$apeG = $_POST['ape_propi']; 
			$fecha = $_POST['fecha_nac_propi']; 
			$mailG = $_POST['mail_prop']; 
			$passG = md5($_POST['pass_prop']);
			$sexG = $_POST['sexo_prop']; 
			$telefonoG = $_POST['telefono_prop']; 
			$nBienRaiz = $_POST['n_prop']; 
	
			 $sql="INSERT INTO propietario (rut, nombre, apellido, fecha_nacimiento, correo_prop, clave, sexo, telefono, num_bien_raiz)
			VALUES ('".$rut."', '".$nomG."', '".$apeG."', '".$fecha."', '".$mailG."', '".$passG."', '".$sexG."', '".$telefonoG."', '".$nBienRaiz."')";

			mysqli_query(conecta(), $sql);
			mysqli_close(conecta());
            echo "1";
			//header('Location: ../index.php?uploadsuccess');
		}else{
			echo "2";
		}
	}else{
		echo "3";
	}
  }

  //actualizar propietario (para activarlo)


 if(isset($_GET['rutPA'])){
	if($_GET['rutPA']){
		$update="UPDATE propietario SET aceptado = 1 WHERE rut = '".$_GET['rutPA']."'";
		mysqli_query(conecta(),$update);
		header('Location: ../principal_admin.php?PropietarioActualizado');	
	}
}

//eliminar propietario porque no lo autorizan

if(isset($_GET['rutEP'])){
	if($_GET['rutEP']){
		$delete = "DELETE FROM propietario WHERE rut = '".$_GET['rutEP']."'";
		mysqli_query(conecta(),$delete);
		header('Location: ../principal_admin.php?PropietarioEliminado');
	}
}
    
 ?>   
