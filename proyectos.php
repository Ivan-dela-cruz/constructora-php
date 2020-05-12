<?php include 'header.php'; ?>
    <!-- banner -->
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="#">Inicio</a> / Proyectos</span>
            <h2>Proyectos</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="spacer blog">
            <div class="row">
                <div class="col-lg-8 col-sm-12 ">
                    <?php
                            require_once "admin/conexion/connect.php";
                            $query = "SELECT * FROM proyectos";
                            $consulta1 = $mysqli->query($query);
                            while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
                                echo '
                
                                    <!-- blog list -->
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4 ">
                                            <a href="proyectosdetalle.php" class="thumbnail">
                                                <img src="admin/proyectos/' . $fila['file'] . '" alt="blog title">
                                            </a>
                                        </div>
                                        <div class="col-lg-8 col-sm-8 ">
                                            <h3><a href="">' . $fila['titulo'] . '</a></h3>
                                            <div class="info">Fecha: ' . $fila['fecha'] . '</div>
                                            <p>' . $fila['ubicacion'] . '</p>
                                            <p>' . $fila['contactos'] . '</p>
                                            
                                            <a href="proyectosdetalle.php?id=' . $fila['id'] . '" class="more">Leer más</a>
                                        </div>
                                    </div>
                                    <!-- blog list -->
                                ';
                            }

                        ?>

                </div>
                <div class="col-lg-4 visible-lg">

                    <!-- tabs -->
                    <h4>Propiedades recientes</h4>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                                            class="img-responsive img-circle" alt="properties">
                        </div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.php">Casa dos pisos 400 metros</a></h5>
                            <p class="price">$300,000</p></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                                            class="img-responsive img-circle" alt="properties">
                        </div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.php">Casa dos pisos 400 metros</a></h5>
                            <p class="price">$300,000</p></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                                            class="img-responsive img-circle" alt="properties">
                        </div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.php">Casa dos pisos 400 metros</a></h5>
                            <p class="price">$300,000</p></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                                            class="img-responsive img-circle" alt="properties">
                        </div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.php">Casa dos pisos 400 metros</a></h5>
                            <p class="price">$300,000</p></div>
                    </div>

                    <!-- tabs -->
                    <h3>Propiedades Recomendadas</h3>
                    <div id="myCarousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-lg-4"><img src="images/properties/1.jpg" class="img-responsive"
                                                               alt="properties"/></div>
                                    <div class="col-lg-8">
                                        <h5><a href="property-detail.php">Hermosa casa a un precio super cómodo</a></h5>
                                        <p class="price">$300,000</p>
                                        <a href="property-detail.php" class="more">más detalles</a></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-4"><img src="images/properties/2.jpg" class="img-responsive"
                                                               alt="properties"/></div>
                                    <div class="col-lg-8">
                                        <h5><a href="property-detail.php">Hermosa casa a un precio super cómodo</a></h5>
                                        <p class="price">$300,000</p>
                                        <a href="property-detail.php" class="more">más detalles</a></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-4"><img src="images/properties/3.jpg" class="img-responsive"
                                                               alt="properties"/></div>
                                    <div class="col-lg-8">
                                        <h5><a href="property-detail.php">Hermosa casa a un precio super cómodo</a></h5>
                                        <p class="price">$300,000</p>
                                        <a href="property-detail.php" class="more">más detalles</a></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-4"><img src="images/properties/4.jpg" class="img-responsive"
                                                               alt="properties"/></div>
                                    <div class="col-lg-8">
                                        <h5><a href="property-detail.php">Hermosa casa a un precio super cómodo</a></h5>
                                        <p class="price">$300,000</p>
                                        <a href="property-detail.php" class="more">más detalles</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php'; ?>