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
                                <table class="table text-center table-responsive">
                                    <thead>
                                    <tr class="text-center">
                                        <th class="text-center">Orden No.</th>
                                        <th class="text-center">Cliente</th>
                                        <th width="120px" class="text-center">Inmueble</th>
                                        <th class="text-center">Precio</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Estado</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require_once "conexion/connect.php";
                                    $query2 = "SELECT solicitudventa.id,usuario.Nombre,solicitudventa.id_venta,venta.titulo,venta.precio,solicitudventa.fecha,solicitudventa.estado FROM venta,solicitudventa,usuario WHERE solicitudventa.id_venta=venta.id AND solicitudventa.id_usuario = usuario.id";
                                    $consulta12 = $mysqli->query($query2);
                                    while ($fila2 = $consulta12->fetch_array(MYSQLI_ASSOC)) {
                                        echo '
                                    <tr>
                                        <td>' . $fila2['id'] . '</td>
                                        <td>' . $fila2['Nombre'] . '</td>
                                        <td>' . $fila2['titulo'] . '</td>
                                        <td>' . $fila2['precio'] . '</td>
                                        <td>' . $fila2['fecha'] . '</td>
                                        <td>' . $fila2['estado'] . '</td>
                                        <td>
                                            <form action="solicitudes/editarDatosVenta.php" enctype="multipart/form-data" method="POST">
                                                <input class="form-control"  type="hidden" name="id" value="' . $fila2['id'] . '"> 
                                                <input class="form-control"  type="hidden" name="idventas" value="' . $fila2['id_venta'] . '"> 
                                                <select name="estados" class="">
                                                    <option value="Pendiente">Pendiente</option>
                                                    <option value="Cancelado">Cancelado</option>
                                                    <option value="Reprobado">Reprobado</option>
                                                </select>
                                                <button class="btn btn-primary" type="submit">aplicar</button>
                                                <a class="btn btn-danger" href="solicitudes/eliminarVenta.php?id=' . $fila2['id'] . '">eliminar</a>
                                            </form>
                                            
                                        </td>
                                    </tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
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
                        <h3 class="panel-title">Inmuebles en venta</h3>
                    </div>
                    <!-- properties -->

                    <?php
                    require_once "conexion/connect.php";
                    $query = "SELECT * FROM venta";
                    $consulta1 = $mysqli->query($query);
                    while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
                        echo '<div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder">
                                                <img width="250px" height="200px" src="venta/' . $fila['file1'] . '" alt="realestate">
                                                <p class="">Estado: ' . $fila['estado'] . '</p>
                                            </div>
                                            <h4><a href="showInmueblesVenta.php?id=' . $fila['id'] . '">Título: ' . $fila['titulo'] . '</a></h4>
                                            <p class="price">Precio: $ ' . $fila['precio'] . '</p>
                
                                            <a class="btn btn-success" href="showInmueblesVenta.php?id=' . $fila['id'] . '">Ver</a>
                                            <a class="btn btn-warning" href="editInmueblesVenta.php?id=' . $fila['id'] . '">Editar</a>
                                            <a class="btn btn-danger" href="venta/eliminar.php?id=' . $fila['id'] . '">Eliminar</a>
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