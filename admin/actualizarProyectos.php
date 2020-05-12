<?php
session_start();
if (!$_SESSION['verificar']) {
    header("Location: login.php");
}
echo $_SESSION['user'];
?>

<?php include 'header.php'; ?>
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BASIC TABLE -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Actualizar proyectos de la empresa</h3>
                                </div>
                                <div class="panel-body">
                                    <?php
                                    if (isset($_GET['id'])) {

                                        require_once "conexion/connect.php";
                                        $id = $_GET['id'];

                                        $query = "SELECT * FROM proyectos WHERE id='$id'";
                                        $consulta1 = $mysqli->query($query);
                                        $fila = $consulta1->fetch_array(MYSQLI_ASSOC);
                                        echo '<form action="proyectos/editarDatos.php" enctype="multipart/form-data" method="POST">
                                                      <div class="col-lg-10 col-lg-offset-1 col-sm-10  col-xs-12 ">
                                                            <div class="form-group-lg">
                                                                <input class="form-control" type="hidden" name="id" value="' . $fila['id'] . '">
                                                                <label for="" class="">Título</label>
                                                                <input value="' . $fila['titulo'] . '" name="titulo" class="form-control input-lg" placeholder="agrega un titulo" type="text">
                                                                <br>
                                                            </div>
                                                             <div class="form-group-lg">
                                                                <label for="" class="">Ubicación</label>
                                                                <input value="' . $fila['ubicacion'] . '" name="ubicacion" class="form-control input-lg" placeholder="agrega dirección"type="text">
                                                                <br>
                                                             </div>
                                                             <div class="form-group-lg">
                                                                <label for="" class="">Contactos</label>
                                                                <input value="' . $fila['contactos'] . '" name="contacto" class="form-control input-lg" placeholder="agrega un numero de contacto"
                                                                       type="text">
                                                                <br>
                                                             </div>
                                                             <div class="form-group-lg col-lg-5">
                                                                <label for="" class="">Fecha</label>
                                                                <input value="' . $fila['fecha'] . '" name="fecha" class="form-control input-lg" type="date">
                                                                <br>
                                                             </div>
                                                             <div class="form-group-lg col-lg-7">
                                                                <label for="" class="">Imagen</label>
                                                                <input id="file1" name="file1" class="form-control input-lg" type="file"><br>
                                                             </div>
                                                             <div class="form-group-lg">
                                                                <label for="" class="">Contenido/ características</label>
                                                                <textarea name="contenido" id="inmventa" class="form-control">' . $fila['contenido'] . '</textarea>
                                                                <br>
                                                                 <input class="btn btn-info" type="submit" value="Actualizar">
                                                             </div>
                                                        </div>
                                                </form>';

                                    } else {
                                        echo "Ocurrio un error inesperado";
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>