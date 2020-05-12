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
                <h3 class="page-title">Inmuebles en venta</h3>
                <div class="row">

                    <div class="col-md-12">
                        <!-- INPUT SIZING -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="">Editar registro de inmueble</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <?php
                                    if (isset($_GET['id'])) {

                                        require_once "conexion/connect.php";
                                        $id = $_GET['id'];

                                        $query = "SELECT * FROM venta WHERE id='$id'";
                                        $consulta1 = $mysqli->query($query);
                                        $fila = $consulta1->fetch_array(MYSQLI_ASSOC);
                                        echo '
                                            <form action="venta/editarDatos.php" enctype="multipart/form-data" method="POST">
                                                <div class="form-group col-lg-12">
                                                    <input class="form-control" type="hidden" name="id" value="' . $fila['id'] . '">
                                                    <label for="" class="">Título</label>
                                                    <input name="titulo" class="form-control input-lg" type="text" value="' . $fila['titulo'] . '">
                                                    <br>
                                                    <label for="" class="">Dirección</label>
                                                    <input name="direccion" class="form-control input-lg" type="text" value="' . $fila['direccion'] . '">
                                                    <br>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6">
                                                        <label for="" class="">Imagen 1</label>
                                                        <input name="file1" class="input-lg" type="file">
                                                        <br>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="" class="">Imagen 2</label>
                                                        <input name="file2" class="input-lg" type="file">
                                                        <br>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="" class="">Imagen 3</label>
                                                        <input name="file3" class="input-lg" type="file">
                                                        <br>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="" class="">Imagen 4</label>
                                                        <input name="file4" class="input-lg" type="file">
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="form-group">
        
                                                    <div class="col-lg-6">
                                                        <label for="" class="">Télefono</label>
                                                        <input class="form-control input-lg" name="telefono" type="text" value="' . $fila['telefono'] . '">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="" class="">Precio</label>
                                                        <input name="precio" class="form-control input-lg" type="text" value="' . $fila['precio'] . '">
                                                        <br>
                                                    </div>
        
                                                </div>
                                                <div class="col-lg-12">
                                                    <label for="" class="">Detalle propiedad</label>
                                                    <textarea name="detalle" id="inmventa" class="form-control" type="text">' . $fila['detalle'] . '</textarea>
                                                    <br>
                                                </div>
        
                                                <div class="form-group">
        
                                                    <div class="col-lg-3">
                                                        <label for="" class="">Dormitorios</label>
                                                        <input name="dormitorio" class="form-control input-lg" type="number" min="1" max="10" value="' . $fila['dormitorio'] . '">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="" class="">Cocinas</label>
                                                        <input name="cocina" class="form-control input-lg" type="number" min="1" max="10" value="' . $fila['cocina'] . '">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="" class="">Baños</label>
                                                        <input name="banio" class="form-control input-lg" type="number" min="1" max="10" value="' . $fila['banio'] . '">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="" class="">Parqueaderos</label>
                                                        <input name="parqueadero" class="form-control input-lg" type="number" min="0" max="5" value="' . $fila['parqueadero'] . '">
                                                        <br>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <input class="btn btn-success pull-right btn-lg" type="submit" value="Guardar">
                                                        <br>
                                                    </div>
                                                </div>
                                            </form>';
                                    }else {
                                        echo "Ocurrio un error inesperado";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- END INPUT SIZING -->
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php'; ?>