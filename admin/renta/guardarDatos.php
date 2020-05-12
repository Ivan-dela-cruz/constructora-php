<?php
require_once "../conexion/connect.php";
$titulo = $_POST['titulo'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$preciom = $_POST['preciom'];
$preciog = $_POST['preciog'];
$detalle = $_POST['detalle'];
$dormitorio = $_POST['dormitorio'];
$cocina = $_POST['cocina'];
$banio = $_POST['banio'];
$parqueadero = $_POST['parqueadero'];
$estado = $_POST['estado'];
$tipo = $_POST['tipo'];

    if ($_FILES["file1"]["error"] > 0) {
    } else {
        if ($_FILES["file2"]["error"] > 0) {
        }else {
            if ($_FILES["file3"]["error"] > 0) {
            }else {
                if ($_FILES["file4"]["error"] > 0) {
                }else {

                    $nom_archivo = $_FILES['file1']['name']; // Para conocer el nombre del archivo
                    $ruta = "../images/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
                    $archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
                    $subir = move_uploaded_file($archivo, $ruta); //se sube el archivo

                    $nom_archivo2 = $_FILES['file2']['name']; // Para conocer el nombre del archivo
                    $ruta2 = "../images/" . $nom_archivo2;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
                    $archivo2 = $_FILES['file2']['tmp_name']; //el arhivo a subir
                    $subir2 = move_uploaded_file($archivo2, $ruta2); //se sube el archivo

                    $nom_archivo3 = $_FILES['file3']['name']; // Para conocer el nombre del archivo
                    $ruta3 = "../images/" . $nom_archivo3;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
                    $archivo3 = $_FILES['file3']['tmp_name']; //el arhivo a subir
                    $subir3 = move_uploaded_file($archivo3, $ruta3); //se sube el archivo

                    $nom_archivo4 = $_FILES['file4']['name']; // Para conocer el nombre del archivo
                    $ruta4 = "../images/" . $nom_archivo4;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
                    $archivo4 = $_FILES['file4']['tmp_name']; //el arhivo a subir
                    $subir4 = move_uploaded_file($archivo4, $ruta4); //se sube el archivo

                    // $sentencia_img = "UPDATE informacion SET logotipo='$ruta' WHERE id='1' ";
                    $query = "INSERT INTO renta(titulo,direccion,file1,file2,file3,file4,telefono,preciom,preciog,detalle,tipo,dormitorio,cocina,banio,parqueadero,estado) VALUES('$titulo','$direccion','$ruta','$ruta2','$ruta3','$ruta4','$telefono','$preciom','$preciog','$detalle','$tipo','$dormitorio','$cocina','$banio','$parqueadero','$estado')";
                    if ($mysqli->query($query)) {
                        header("Location: ../rentas.php");
                    } else {
                        echo "<br>Ocurrio un error";
                        echo $query;
                        echo "<br>" . mysqli_error($mysqli);
                        //$mysqli->query($query) or die ("Error al actualizar datos" . mysqli_error($mysqli));
                    }
                }
            }
        }

    }
    //header("Location: ../showUser.php");

