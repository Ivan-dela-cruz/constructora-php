<?php
	require_once "../conexion/connect.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$query="DELETE FROM usuario WHERE id='$id'";
		if($mysqli->query($query)){
            header("Location: ../showUser.php");
		}else{
			echo "Error no se pudo eliminar el registro";
		}
	}else{
		echo "Error no se pudo procesar la peticion";
	}