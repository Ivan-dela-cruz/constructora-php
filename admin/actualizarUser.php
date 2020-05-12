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
                <div class="panel panel-headline col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BASIC TABLE -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Actualizar datos del Usuario</h3>
                                </div>
                                <div class="panel-body">
                                    <?php
                                    if (isset($_GET['id'])) {
                                        require_once "conexion/connect.php";
                                        $id = $_GET['id'];
                                        $query = "SELECT * FROM usuario WHERE id='$id'";
                                        $consulta1 = $mysqli->query($query);
                                        $fila = $consulta1->fetch_array(MYSQLI_ASSOC);
                                        echo '<form action="usuarios/editarDatos.php" method="POST">
                                                      <div class="col-lg-9 col-lg-offset-1 col-sm-9  col-xs-12 ">
                                                            <div class="form-group-lg">
                                                                <input class="form-control" type="hidden" name="id" value="' . $fila['id'] . '">
                                                                <label>Nombre</label>
                                                                <input class="form-control" type="text" name="nombre" value="' . $fila['Nombre'] . '"><br>
                                                            </div>
                                                             <div class="form-group-lg">
                                                                <label>Email</label>
                                                                <input class="form-control" type="email" name="email" value="' . $fila['Email'] . '"><br>
                                                             </div>
                                                             <div class="form-group-lg">
                                                                <br>
                                                                <p><span>
                                                                 Si quieres actualizar tu clave escribe la clave antigua y escribe y repite la clave nueva
                                                                 </span></p>
                                                             </div>
                                                            <div class="form-group-lg">
                                                                <label>Clave original</label>
                                                                <input class="form-control" type="password" name="clave1"><br>
                                                            </div>
                                                            <div class="form-group-lg">
                                                                <label>Clave nueva</label>
                                                                <input class="form-control" type="password" name="clave2"><br>
                                                            </div>
                                                            <div class="form-group-lg">
                                                                <label>Repetir clave nueva</label>
                                                                <input class="form-control" type="password" name="clave3"><br>
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