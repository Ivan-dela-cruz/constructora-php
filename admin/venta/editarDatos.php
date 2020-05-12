<?php
require_once "../conexion/connect.php";
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$precio = $_POST['precio'];
$detalle = $_POST['detalle'];
$dormitorio = $_POST['dormitorio'];
$cocina = $_POST['cocina'];
$banio = $_POST['banio'];
$parqueadero = $_POST['parqueadero'];
$estado = "En venta";

$campos = "titulo='$titulo',direccion='$direccion',telefono='$telefono',precio='$precio',detalle='$detalle',dormitorio='$dormitorio',cocina='$cocina',banio='$banio',parqueadero='$parqueadero'";

$query = "UPDATE venta SET $campos WHERE id='$id'";
if ($mysqli->query($query)) {
    if (($_FILES["file1"]["error"] > 0)) {
    } else {
        $nom_archivo = $_FILES['file1']['name']; // Para conocer el nombre del archivo
        $ruta = "../images/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
        $archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
        $subir = move_uploaded_file($archivo, $ruta); //se sube el archivo
        $sentencia_img = "UPDATE venta SET file1='$ruta' WHERE id='$id' ";
        $mysqli->query($sentencia_img) or die ("Error al actualizar datos" . mysqli_error($mysqli));
    }
    if (($_FILES["file2"]["error"] > 0)) {
    } else {
        $nom_archivo2 = $_FILES['file2']['name']; // Para conocer el nombre del archivo
        $ruta2 = "../images/" . $nom_archivo2;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
        $archivo2 = $_FILES['file2']['tmp_name']; //el arhivo a subir
        $subir2 = move_uploaded_file($archivo2, $ruta2); //se sube el archivo
        $sentencia_img = "UPDATE venta SET file2='$rut' WHERE id='$id' ";
        $mysqli->query($sentencia_img) or die ("Error al actualizar datos" . mysqli_error($mysqli));
    }
    if (($_FILES["file3"]["error"] > 0)) {
    } else {
        $nom_archivo3 = $_FILES['file3']['name']; // Para conocer el nombre del archivo
        $ruta3 = "../images/" . $nom_archivo3;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
        $archivo3 = $_FILES['file3']['tmp_name']; //el arhivo a subir
        $subir3 = move_uploaded_file($archivo3, $ruta3); //se sube el archivo
        $sentencia_img = "UPDATE venta SET file3='$ruta3' WHERE id='$id' ";
        $mysqli->query($sentencia_img) or die ("Error al actualizar datos" . mysqli_error($mysqli));

    }
    if (($_FILES["file4"]["error"] > 0)) {
    } else {
        $nom_archivo4 = $_FILES['file4']['name']; // Para conocer el nombre del archivo
        $ruta4 = "../images/" . $nom_archivo4;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
        $archivo4 = $_FILES['file4']['tmp_name']; //el arhivo a subir
        $subir4 = move_uploaded_file($archivo4, $ruta4); //se sube el archivo
        $sentencia_img = "UPDATE venta SET file4='$ruta4' WHERE id='$id' ";
        $mysqli->query($sentencia_img) or die ("Error al actualizar datos" . mysqli_error($mysqli));

    }
    header("Location: ../ventas.php");
} else {
    echo "Error no se pudo actualizar los datos";
}