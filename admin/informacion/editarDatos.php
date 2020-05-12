<?php
require_once "../conexion/connect.php";
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$telefono = $_POST['telefono'];
$apertura = $_POST['apertura'];
$mision = $_POST['mision'];
$vision = $_POST['vision'];
$objetivo = $_POST['objetivo'];
$contenido = $_POST['contenido'];

$campos = "nombre='$nombre',ubicacion='$ubicacion',telefono='$telefono',apertura='$apertura',mision='$mision',vision='$vision',objetivo='$objetivo',contenido='$contenido'";

$query = "UPDATE informacion SET $campos WHERE id='1'";
if ($mysqli->query($query)) {
    if ($_FILES["file1"]["error"] > 0) {
    } else {

        $nom_archivo = $_FILES['file1']['name']; // Para conocer el nombre del archivo
        $ruta = "../images/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
        $archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
        $subir = move_uploaded_file($archivo, $ruta); //se sube el archivo
        $sentencia_img = "UPDATE informacion SET logotipo='$ruta' WHERE id='1' ";
        echo $sentencia_img;
        $mysqli->query($sentencia_img) or die ("Error al actualizar datos" . mysqli_error($mysqli));

    }
    header("Location: ../showUser.php");
} else {
    echo "Error no se pudo actualizar los datos";
}