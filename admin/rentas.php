<?php
session_start();
if (!$_SESSION['verificar']) {
    header("Location: login.php");
}
echo $_SESSION['user'];
?>

<?php include 'header.php'; ?>
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- RECENT PURCHASES -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Solicitudes de ventas recientes</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i>
                                    </button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead>
                                        <tr class="text-center">
                                            <th width="15px" class="text-center">Orden No.</th>
                                            <th class="text-center">Cliente</th>
                                            <th width="120px" class="text-center">Inmueble</th>
                                            <th class="text-center">Pago mes</th>
                                            <th width="15px" class="text-center">Garantía</th>
                                            <th class="text-center">Fecha</th>
                                            <th class="text-center">Estado</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        require_once "conexion/connect.php";
                                        $query2 = "SELECT solicitudrenta.id,usuario.Nombre,solicitudrenta.id_renta,renta.titulo,renta.preciom, renta.preciog,solicitudrenta.fecha,solicitudrenta.estado FROM renta,solicitudrenta,usuario WHERE solicitudrenta.id_renta=renta.id AND solicitudrenta.id_usuario = usuario.id";
                                        $consulta12 = $mysqli->query($query2);
                                        while ($fila2 = $consulta12->fetch_array(MYSQLI_ASSOC)) {
                                            echo '
                                    <tr>
                                        <td>' . $fila2['id'] . '</td>
                                        <td>' . $fila2['Nombre'] . '</td>
                                        <td>' . $fila2['titulo'] . '</td>
                                        <td>' . $fila2['preciom'] . '</td>
                                        <td>' . $fila2['preciog'] . '</td>
                                        <td>' . $fila2['fecha'] . '</td>
                                        <td>' . $fila2['estado'] . '</td>
                                        <td>
                                            <form action="solicitudes/editarDatos.php" enctype="multipart/form-data" method="POST">
                                                <input class="form-control" type="hidden" name="id" value="' . $fila2['id'] . '"> 
                                                <input class="form-control" type="hidden" name="idrenta" value="' . $fila2['id_renta'] . '"> 
                                                <select name="estados" class="">
                                                    <option value="Pendiente">Pendiente</option>
                                                    <option value="Cancelado">Cancelado</option>
                                                    <option value="Reprobado">Reprobado</option>
                                                </select>
                                                <button class="btn btn-primary" type="submit">aplicar</button>
                                                <a class="btn btn-danger" href="solicitudes/eliminar.php?id=' . $fila2['id'] . '">eliminar</a>
                                            </form>
                                            
                                        </td>
                                    </tr>';
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6"><span class="panel-note"><i
                                                    class="fa fa-clock-o"></i> Hoy</span>
                                    </div>
                                    <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Ver todo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END RECENT PURCHASES -->
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inmuebles en renta</h3>
                    </div>
                    <!-- properties -->

                    <?php
                    require_once "conexion/connect.php";
                    $query = "SELECT * FROM renta";
                    $consulta1 = $mysqli->query($query);
                    while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
                        echo '<div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder">
                                                <img width="250px" height="200px" src="renta/' . $fila['file1'] . '" alt="realestate">
                                                <p class="">Estado: ' . $fila['estado'] . '</p>
                                            </div>
                                            <h4><a href="showInmueblesVenta.php?id=' . $fila['id'] . '">Título: ' . $fila['titulo'] . '</a></h4>
                                            <p class="price">Pago mensual: $ ' . $fila['preciom'] . '</p>
                                            <p class="price">Pago garantia: $ ' . $fila['preciog'] . '</p>
                
                                            <a class="btn btn-success" href="showInmueblesRenta.php?id=' . $fila['id'] . '">Ver</a>
                                            <a class="btn btn-warning" href="editInmueblesRenta.php?id=' . $fila['id'] . '">Editar</a>
                                            <a class="btn btn-danger" href="renta/eliminar.php?id=' . $fila['id'] . '">Eliminar</a>
                                            <hr>
                                        </div>
                                     </div>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
<?php include 'footer.php'; ?>