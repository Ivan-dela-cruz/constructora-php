<?php include 'header.php'; ?>

    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">Detalle de inmuebles en venta</h3>
                <div class="row">
                    <?php
                    require_once "conexion/connect.php";
                    $id = $_GET['id'];
                    $query = "SELECT * FROM venta WHERE id='$id'";
                    $consulta1 = $mysqli->query($query);
                    while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
                        echo '
                    <div class="col-md-12">
                        <h2>' . $fila['titulo'] . '</h2>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="property-images">
                                    <!-- Slider Starts -->
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators hidden-xs">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <!-- Item 1 -->
                                            <div class="item active">
                                                <img src="venta/' . $fila['file1'] . '" class="properties" alt="properties"/>
                                            </div>
                                            <!-- #Item 1 -->
    
                                            <!-- Item 2 -->
                                            <div class="item">
                                                <img src="venta/' . $fila['file2'] . '" class="properties" alt="properties"/>
    
                                            </div>
                                            <!-- #Item 2 -->
    
                                            <!-- Item 3 -->
                                            <div class="item">
                                                <img src="venta/' . $fila['file3'] . '" class="properties" alt="properties"/>
                                            </div>
                                            <!-- #Item 3 -->
    
                                            <!-- Item 4 -->
                                            <div class="item ">
                                                <img src="venta/' . $fila['file4'] . '" class="properties" alt="properties"/>
    
                                            </div>
                                            <!-- # Item 4 -->
                                        </div>
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
                                                    class="glyphicon glyphicon-chevron-left"></span></a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span
                                                    class="glyphicon glyphicon-chevron-right"></span></a>
                                    </div>
                                    <!-- #Slider Ends -->

                                </div>


                                <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Detalles de la propiedad</h4>
                                    ' . $fila['detalle'] . '
                                </div>
                                <div><h4><span class="glyphicon glyphicon-map-marker"></span> Ubicación</h4>
                                    <div class="well">
                                         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31914.39814323281!2d-78.6480066!3d-0.9237663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4604b05977bed%3A0x19dd803ba8e3fd7a!2sSan+Felipe%2C+Latacunga!5e0!3m2!1ses!2sec!4v1547834846237" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="col-lg-12  col-sm-6">
                                    <h4><span class="glyphicon glyphicon-user"></span> Dirección & Precio & Contacto</h4>
                                    <div class="listing-detail">
                                        <div class="table-responsive">
                                            <table class="table text-center table-responsive table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th> Dirección </th>
                                                        <th> Precio </th>
                                                        <th> Télefono </th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>' . $fila['direccion'] . '</td>
                                                        <td>' . $fila['precio'] . '</td>
                                                        <td>' . $fila['telefono'] . '</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                    </div>

                                    <h4><span class="glyphicon glyphicon-home"></span> Disponibilidad</h4>
                                    <div class="listing-detail">
                                        <div class="table-responsive">
                                            <table class="table text-center table-responsive table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th> Dormitorios </th>
                                                        <th> Baños </th>
                                                        <th> Cocinas </th>
                                                        <th> Parqueaderos </th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>' . $fila['dormitorio'] . '</td>
                                                        <td>' . $fila['banio'] . '</td>
                                                        <td>' . $fila['cocina'] . '</td>
                                                        <td>' . $fila['parqueadero'] . '</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        <div class="property-info">
                                            
                                                <a class="btn btn-primary" href="editInmueblesVenta.php?id=' . $fila['id'] . '">Editar</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>


<?php include 'footer.php'; ?>