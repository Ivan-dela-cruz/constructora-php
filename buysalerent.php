<?php include 'header.php'; ?>
    <!-- banner -->
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="index.php">Inicio</a> / Ventas</span>
            <h2> Ventas de Inmuebles</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="properties-listing spacer">

            <div class="row">
                <div class="col-lg-3 col-sm-4 ">

                    <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Buscar por</h4>
                        <input type="text" class="form-control" placeholder="Busquéda de propiedades">
                        <div class="row">
                            <div class="col-lg-5">
                                <select class="form-control">
                                    <option>Nuevas</option>
                                    <option>Remate</option>
                                    <option>Viejas</option>
                                </select>
                            </div>
                            <div class="col-lg-7">
                                <select class="form-control">
                                    <option>Precio</option>
                                    <option>$150,000 - $200,000</option>
                                    <option>$200,000 - $250,000</option>
                                    <option>$250,000 - $300,000</option>
                                    <option>$300,000 - adelante</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <select class="form-control">
                                    <option>Tipo de propiedad</option>
                                    <option>Apartmento</option>
                                    <option>edificio</option>
                                    <option>casa</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary">Buscar</button>

                    </div>


                    <div class="hot-properties hidden-xs">
                        <h4>Propiedades recientes</h4>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                                                class="img-responsive img-circle" alt="properties">
                            </div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="property-detail.php">Inmueble nuevo con finos acabados</a></h5>
                                <p class="price">$300,000</p></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                                                class="img-responsive img-circle" alt="properties">
                            </div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="property-detail.php">Inmueble nuevo con finos acabados</a></h5>
                                <p class="price">$300,000</p></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                                                class="img-responsive img-circle" alt="properties">
                            </div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="property-detail.php">Inmueble nuevo con finos acabados</a></h5>
                                <p class="price">$300,000</p></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                                                class="img-responsive img-circle" alt="properties">
                            </div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="property-detail.php">Inmueble nuevo con finos acabados</a></h5>
                                <p class="price">$300,000</p></div>
                        </div>

                    </div>


                </div>

                <div class="col-lg-9 col-sm-8">
                    <div class="sortby clearfix">
                        <div class="pull-left result">Mostrando: 12 de 100</div>
                        <div class="pull-right">
                            <select class="form-control">
                                <option>Ordenar por</option>
                                <option>Precio: de barato a caro</option>
                                <option>Precio: de caro a barato</option>
                            </select></div>

                    </div>
                    <div class="row">

                        <!-- properties -->
                        <?php
                            require_once "admin/conexion/connect.php";
                            $query = "SELECT * FROM venta WHERE estado='En venta'";
                            $consulta1 = $mysqli->query($query);
                            while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
                                echo '<div class="col-lg-4 col-sm-6">
                                        <div class="properties">
                                            <div class="image-holder">
                                                <img src="admin/venta/' . $fila['file1'] . '" class="img-responsive" alt="properties">
                                                <div class="status sold">' . $fila['estado'] . '</div>
                                            </div>
                                            <h4><a href="property-detail.php">' . $fila['titulo'] . '</a></h4>
                                            <p class="price">$' . $fila['precio'] . '</p>
                                            <div class="listing-detail">
                                                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Dormitorio">' . $fila['dormitorio'] . '</span>
                                                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Baños">' . $fila['banio'] . '</span> 
                                                <span data-toggle="tooltip" data-placement="bottom"  data-original-title="Parqueadero">' . $fila['parqueadero'] . '</span>
                                                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Cocina">' . $fila['cocina'] . '</span>
                                            </div>
                                            <a class="btn btn-primary" href="property-detail.php?id=' . $fila['id'] . '">Ver detalles</a>
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