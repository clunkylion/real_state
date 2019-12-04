<?php
$setup = "/wamp/www/real_estate/funciones/setup.php";
include($setup);

switch ($_POST['accion']){

	case "Registrar": registrar();
	break;
	/*case "checkRUTGestor" : alert();
	break;*/
}
/*function alert(){
	 $rut=$_POST['rut'];

	 $sql1="select * from gestor where rut = '".$rut."'";
	$resulta=mysqli_query( conecta(),$sql1);
	$cants=mysqli_num_rows($resulta);
	if ($cants==0){
		echo "No";
	}else{
		echo "Si";
	}
 }*/


   function registrar(){

	$sql1="select * from gestor where rut = '".$_POST['rut_gestor']."'";
	$resulta=mysqli_query( conecta(),$sql1);
	$cants=mysqli_num_rows($resulta);
	
	$sql2="select * from propietario where rut = '".$_POST['rut_gestor']."'";
	$resulte=mysqli_query( conecta(),$sql2);
	$cante=mysqli_num_rows($resulte);

	   if($cants==0){
		   if($cante==0){
			$rut = $_POST['rut_gestor']; 
			$nomG = $_POST['nombre_corr']; 
			$apeG = $_POST['apellido_corr']; 
			$fecha = $_POST['fecha_nac_corr']; 
			$mailG = $_POST['mail_gestor']; 
			$passG = md5($_POST['pass_corr']);
			$sexG = $_POST['sexo_corredor']; 
			$telefonoG = $_POST['telefono_corredor']; 
			//nombre del archivo
			$archivo = $_FILES['certificado']['name'];
			//como va a ser guardado en archivo
			$guardado = $_FILES['certificado']['tmp_name'];
			//el destino donde se guaradara el archivo
			$destino = '../documentos/'.$archivo;
			//Query para registrar un gestor
			 $sql="INSERT INTO gestor (rut, nombre, apellido, fecha_nacimiento, correo_gestor, clave, sexo, telefono, certificado)
			VALUES ('".$rut."', '".$nomG."', '".$apeG."', '".$fecha."', '".$mailG."', '".$passG."', '".$sexG."', '".$telefonoG."', '".$archivo."')";
			//mueve el archivo al lugar asignado.
			move_uploaded_file($guardado, $destino);
			mysqli_query(conecta(), $sql);
	     	/*if(!$result){
			echo "<br> error al registrarse   <br>".$sql; 
			}
			mysqli_close(conecta());
			print_r($archivo);
			echo "<br>";
			print_r($sql);*/

			//colocar echo 1 para mandar la respuesta
			echo "1";
		    //header('Location: ../index.php?uploadsuccess');
		   }else{
			echo "4";
		   }
	   }else{
		echo "3";
	   } 
 }
//actualizar gestor (para activarlo)

 if(isset($_GET['rutGA'])){
	if($_GET['rutGA']){
		$update="UPDATE gestor SET aceptado = 1 WHERE rut = '".$_GET['rutGA']."'";
		mysqli_query(conecta(),$update);
		header('Location: ../principal_admin.php?GestorActualizado');	
	}
}

//eliminar gestor porque no lo autorizan

if(isset($_GET['rutEG'])){
	if($_GET['rutEG']){
		$delete = "DELETE FROM gestor WHERE rut = '".$_GET['rutEG']."'";
		mysqli_query(conecta(),$delete);
		header('Location: ../principal_admin.php?GestorEliminado');
	}
}

 /*function validaUsuario($rut){
 	$sqlu="select * from gestor where rut ='".$rut;
 	$result=mysqli_query(conecta(),$sqlu);
 	$cont=mysqli_num_rows($result);
 	return $cont;
 }*/
