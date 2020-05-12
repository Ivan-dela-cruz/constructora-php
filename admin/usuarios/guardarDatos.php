<?php
require_once "../conexion/connect.php";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$clave = md5($_POST['clave']);
$clave2 = md5($_POST['clave2']);

if ($nombre != '' && $email != '' && $clave != '') {
    if ($clave == $clave2) {
        $query = "INSERT INTO usuario(Nombre,Email,Clave) VALUES('$nombre','$email','$clave')";
        if ($mysqli->query($query)) {
            header("Location: ../showUser.php");
        } else {
            echo "Ocurrio un error";
        }
    }
}
