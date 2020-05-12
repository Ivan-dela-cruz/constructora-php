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
                                    <h3 class="panel-title">Actualizar datos del Usuario</h3>
                                </div>
                                <div class="panel-body">
                                    <?php

                                        require_once "conexion/connect.php";

                                        $query = "SELECT * FROM informacion WHERE id='1'";
                                        $consulta1 = $mysqli->query($query);
                                        $fila = $consulta1->fetch_array(MYSQLI_ASSOC);
                                        echo '<form action="informacion/editarDatos.php" enctype="multipart/form-data" method="POST">
                                                      <div class="col-lg-10 col-lg-offset-1 col-sm-10  col-xs-12 ">
                                                            <div class="form-group-lg">
                                                                <input class="form-control" type="hidden" name="id" value="' . $fila['id'] . '">
                                                                <label>Nombre</label>
                                                                <input class="form-control" type="text" name="nombre" value="' . $fila['nombre'] . '"><br>
                                                            </div>
                                                             <div class="form-group-lg">
                                                                <label>Ubicacion</label>
                                                                <input class="form-control" type="text" name="ubicacion" value="' . $fila['ubicacion'] . '"><br>
                                                             </div>
                                                             <div class="form-group-lg">
                                                                <label>Teléfono</label>
                                                                <input class="form-control" type="text" name="telefono" value="' . $fila['telefono'] . '"><br>
                                                             </div>
                                                             <div class="form-group-lg">
                                                                <label>Fecha de apertura</label>
                                                                <input class="form-control" type="date" name="apertura" value="' . $fila['apertura'] . '"><br>
                                                             </div>
                                                             <div class="form-group-lg">
                                                                <label>Logotipo</label>
                                                               <input class="form-control" type="file" name="file1" id="file1" value=""><br>
                                                             </div>
                                                             <div class="form-group-lg">
                                                                <label>Misión</label>
                                                                <textarea class="form-control"  name="mision" >' . $fila['mision'] . '</textarea><br>
                                                             </div>
                                                             <div class="form-group-lg">
                                                                <label>Visión</label>
                                                                <textarea class="form-control"  name="vision">' . $fila['vision'] . '</textarea><br>
                                                             </div>
                                                             <div class="form-group-lg">
                                                                <label>Objetivo</label>
                                                                <textarea class="form-control"  name="objetivo">' . $fila['objetivo'] . '</textarea><br>
                                                             </div>
                                                             <div class="form-group-lg">
                                                                <label>Contenido</label>
                                                                <textarea name="contenido" id="inmventa" class="form-control"
                                                                            placeholder="agrega una descripción">' . $fila['contenido'] . '</textarea><br>
                                                                <input class="btn btn-info" type="submit" value="Actualizar"><br>
                                                            </div>
                                                        </div>
                                                </form>';

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