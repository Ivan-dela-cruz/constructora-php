<?php
require_once "../admin/conexion/connect.php";
$iduser = $_POST['iduser'];
$idrenta = $_POST['idrenta'];
$fechas = new DateTime('now', new DateTimeZone('America/Guayaquil'));
$fecha = $fechas->format('Y-m-d');
$estado = 'Pendiente';


// $sentencia_img = "UPDATE informacion SET logotipo='$ruta' WHERE id='1' ";
$query = "INSERT INTO solicitudrenta(id_renta,id_usuario,fecha,estado) VALUES('$idrenta','$iduser','$fecha','$estado')";
if ($mysqli->query($query)) {

    header("Location: ../rentas.php");
} else {
    echo "<br>Ocurrio un error";
    echo $query;
    echo "<br>" . mysqli_error($mysqli);
    //$mysqli->query($query) or die ("Error al actualizar datos" . mysqli_error($mysqli));
}



//header("Location: ../showUser.php");

