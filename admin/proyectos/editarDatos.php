<?php
require_once "../conexion/connect.php";
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$ubicacion = $_POST['ubicacion'];
$contactos = $_POST['contacto'];
$fecha = $_POST['fecha'];
$contenido = $_POST['contenido'];

$campos = "titulo='$titulo',ubicacion='$ubicacion',contactos='$contactos',fecha='$fecha',contenido='$contenido'";

$query = "UPDATE proyectos SET $campos WHERE id='$id'";
if ($mysqli->query($query)) {
    if ($_FILES["file1"]["error"] > 0) {
    } else {

        $nom_archivo = $_FILES['file1']['name']; // Para conocer el nombre del archivo
        $ruta = "../images/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
        $archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
        $subir = move_uploaded_file($archivo, $ruta); //se sube el archivo
        $sentencia_img = "UPDATE proyectos SET file='$ruta' WHERE id='$id' ";
        echo $sentencia_img;
        $mysqli->query($sentencia_img) or die ("Error al actualizar datos" . mysqli_error($mysqli));

    }
    header("Location: ../showProyectos.php");
} else {
    echo "Error no se pudo actualizar los datos";
}