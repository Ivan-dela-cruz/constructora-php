<?php include 'header.php'; ?>
<?php
require_once "admin/conexion/connect.php";
$name = $_SESSION['user'];
$queryuser = "SELECT * FROM usuario WHERE Nombre='$name'";
$consultauser = $mysqli->query($queryuser);
$filauser = $consultauser->fetch_array(MYSQLI_ASSOC);

?>
<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="#">Inicio</a> / Rentar</span>
        <h2>Solicitud de renta</h2>
    </div>
</div>
<!-- banner -->

<div class="container">
    <div class="spacer">
        <div class="row register">
            <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
                <div class="form-group">
                    <?php
                    if (isset($_GET['id'])) {

                        require_once "admin/conexion/connect.php";
                        $id = $_GET['id'];

                        $query = "SELECT * FROM renta WHERE id='$id'";
                        $consulta1 = $mysqli->query($query);
                        $fila = $consulta1->fetch_array(MYSQLI_ASSOC);
                        echo '
                            <div class="col-lg-12">
                                <h2>' . $fila['titulo'] . '</h2>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="property-images">
                                              <img style="margin-bottom: 2em;" width="100%" height="300px" src="admin/venta/' . $fila['file1'] . '" alt="properties"/>
                                               <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <form action="solicitud/guardarDatos.php" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <hr>
                                <input class="form-control" type="hidden" name="idrenta" value="' . $fila['id'] . '">
                                <input class="form-control" type="hidden" name="iduser" value="' . $filauser['id'] . '">
                                
                                <button type="submit" class="btn btn-success" name="Submit">Enviar solicitud</button>
                            </div>

                        </form>';
                    }
                    ?>
                </div>


            </div>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>