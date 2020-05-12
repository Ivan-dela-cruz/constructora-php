<?php
require_once "../conexion/connect.php";
$titulo = $_POST['titulo'];
$ubicacion = $_POST['ubicacion'];
$contacto = $_POST['contacto'];
$fecha = $_POST['fecha'];
$contenido = $_POST['contenido'];

    if ($_FILES["file1"]["error"] > 0) {
    } else {

        $nom_archivo = $_FILES['file1']['name']; // Para conocer el nombre del archivo
        $ruta = "../images/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
        $archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
        $subir = move_uploaded_file($archivo, $ruta); //se sube el archivo

       // $sentencia_img = "UPDATE informacion SET logotipo='$ruta' WHERE id='1' ";
        $query = "INSERT INTO proyectos(titulo,ubicacion,contactos,fecha,file,contenido) VALUES('$titulo','$ubicacion','$contacto','$fecha','$ruta','$contenido')";
        if ($mysqli->query($query)) {
            header("Location: ../showProyectos.php");
        } else {
            echo "<br>Ocurrio un error";
            echo $query;
            echo "<br>".mysqli_error($mysqli);
            //$mysqli->query($query) or die ("Error al actualizar datos" . mysqli_error($mysqli));
        }


    }
    //header("Location: ../showUser.php");

