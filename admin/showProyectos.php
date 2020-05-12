<?php include 'header.php'; ?>

    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">Proyectos</h3>
                <div class="row">
                    <div class="col-md-12">
                        <!-- INPUT SIZING -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="">Nuevo proyecto</h3>
                            </div>
                            <div class="panel-body no-padding">
                                <!-- blog list -->
                                <?php
                                    require_once "conexion/connect.php";
                                    $query = "SELECT * FROM proyectos";
                                    $consulta1 = $mysqli->query($query);
                                    while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
                                        echo '
                                                <div class="col-lg-12">
                                                
                                                    <div class="col-lg-3">
                                                        <a href="proyectosdetalle.php" class="img-thumbnail">
                                                            <img width="250px" height="200px" src="proyectos/' . $fila['file'] . '" alt="realestate">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <h3><a href="proyectosdetalle.php">' . $fila['titulo'] . '</a></h3>
                                                        <p>' . $fila['ubicacion'] . ' </p>
                                                        <p>Contactos: ' . $fila['contactos'] . ' </p>
                                                        <p>Fecha de inicio: ' . $fila['fecha'] . '</p>
                                                        <a href="detalleProyectos.php?id=' . $fila['id'] . '" class="btn btn-info"><i class="lnr lnr-eye"></i></a>
                                                        <a href="actualizarProyectos.php?id=' . $fila['id'] . '" class="btn btn-warning"><i class="lnr lnr-pencil"></i></a>
                                                        <a href="proyectos/eliminar.php?id=' . $fila['id'] . '" class="btn btn-danger"><i class="lnr lnr-trash"></i></a>
                                                    </div>
                                                    <br><p></p><br>
                                                </div>
                                                  
                                        ';
                                    }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>