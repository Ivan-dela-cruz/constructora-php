<?php include 'header.php'; ?>
    <div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <h3 class="panel-title">Usuarios del sistema</h3><br>
                                    </div>
                                    <div class="col-lg-6">
                                        <a class="btn btn-info pull-right" href="register.php"><i class="lnr lnr-plus-circle"></i> Añadir</a><br>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr style="background-color: #0d69af; color: #ffffff;">
                                        <th class="text-center">id</th>
                                        <th class="text-center">Nombre</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center" colspan="2">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require_once "conexion/connect.php";
                                    $query = "SELECT * FROM usuario";
                                    $consulta1 = $mysqli->query($query);
                                    while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
                                        echo "<tr>
                                                <td width='10px'>" . $fila['id'] . "</td>
                                                <td>" . $fila['Nombre'] . "</td>
                                                <td>" . $fila['Email'] . "</td>
                                                <td width='15px'><a class='btn btn-warning' href='actualizarUser.php?id=" . $fila['id'] . "'>
                                                <i class=\"lnr lnr-pencil\"></i></a></td>
                                                <td width='10px'><a class='btn btn-danger' href='usuarios/eliminar.php?id=" . $fila['id'] . "'>
                                                <i class=\"lnr lnr-trash\"></i></a></td>
                                            </tr>";
                                    }

                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END BASIC TABLE -->
                    </div><!-- /.row -->
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>