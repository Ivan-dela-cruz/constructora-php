<?php
require_once "../conexion/connect.php";
$id = $_POST['id'];
$idrenta = $_POST['idrenta'];
$estado = $_POST['estados'];

$query = "UPDATE solicitudrenta SET estado='$estado' WHERE id='$id'";
if ($mysqli->query($query)) {
    if ($estado == 'Cancelado') {
        $query2 = "UPDATE renta SET estado='Rentada' WHERE id='$idrenta'";
        if ($mysqli->query($query2)) {
            header("Location: ../rentas.php");
        } else {
            echo "Error no se pudo actualizar los datos";
        }
    } else if ($estado == 'Reprobado') {
        $query2 = "UPDATE renta SET estado='En renta' WHERE id='$idrenta'";
        if ($mysqli->query($query2)) {
            header("Location: ../rentas.php");
        } else {
            echo "Error no se pudo actualizar los datos";
        }
    }else if ($estado == 'Pendiente') {
        $query2 = "UPDATE renta SET estado='En renta' WHERE id='$idrenta'";
        if ($mysqli->query($query2)) {
            header("Location: ../rentas.php");
        } else {
            echo "Error no se pudo actualizar los datos";
        }
    } else {
        header("Location: ../rentas.php");
    }


} else {
    echo "Error no se pudo actualizar los datos";
}