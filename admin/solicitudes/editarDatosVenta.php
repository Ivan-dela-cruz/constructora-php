<?php
require_once "../conexion/connect.php";
$id = $_POST['id'];
$idventa = $_POST['idventas'];
$estado = $_POST['estados'];

$query = "UPDATE solicitudventa SET estado='$estado' WHERE id='$id'";
if ($mysqli->query($query)) {
    if ($estado == 'Cancelado') {
        $query2 = "UPDATE venta SET estado='vendido' WHERE id='$idventa'";
        if ($mysqli->query($query2)) {
            header("Location: ../ventas.php");
        } else {
            echo "Error no se pudo actualizar los datos";
        }
    } else if ($estado == 'Reprobado') {
        $query2 = "UPDATE venta SET estado='En venta' WHERE id='$idventa'";
        if ($mysqli->query($query2)) {
            header("Location: ../ventas.php");
        } else {
            echo "Error no se pudo actualizar los datos";
        }
    }else if ($estado == 'Pendiente') {
        $query2 = "UPDATE venta SET estado='En venta' WHERE id='$idventa'";
        if ($mysqli->query($query2)) {
            header("Location: ../ventas.php");
        } else {
            echo "Error no se pudo actualizar los datos";
        }
    } else {
        header("Location: ../ventas.php");
    }


} else {
    echo "Error no se pudo actualizar los datos";
}