<?php include 'header.php'; ?>
    <!-- banner -->
<?php
require_once "admin/conexion/connect.php";

$query = "SELECT * FROM informacion WHERE id='1'";
$consulta1 = $mysqli->query($query);
$fila = $consulta1->fetch_array(MYSQLI_ASSOC);
echo '<div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="#">Inicio</a> / Información</span>
            <h2>Información</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="spacer">
            <div class="row">
                <div class="col-lg-8  col-lg-offset-2">
                    <img src="admin/informacion/' . $fila['logotipo'] . '" class="img-responsive thumbnail" alt="realestate">
                    <h3>' . $fila['nombre'] . '</h3>
                    <span>' . $fila['ubicacion'] . '</span><br><br>
                    <span>Contactanos: ' . $fila['telefono'] . '</span><br><br>
                    <h3 class="text-center">Misión</h3>
                    <p>' . $fila['mision'] . '</p>

                    <h3 class="text-center">Visión</h3>
                    <p>' . $fila['vision'] . '</p>
                    
                     <h3 class="text-center">Objetivo</h3>
                    <p>' . $fila['objetivo'] . '</p>
                    
                    <h3>Nuestros servicios</h3>
                    <p>' . $fila['contenido'] . '</p>
                </div>

            </div>
        </div>
    </div>'
?>

<?php include 'footer.php'; ?>