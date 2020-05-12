<?php include 'header.php'; ?>
    <!-- banner -->
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="#">Inicio</a> /<a href="proyectos.php">Proyectos</a> / Detalles</span>
            <h2>Proyectos</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="spacer blog">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    require_once "admin/conexion/connect.php";
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $query = "SELECT * FROM proyectos WHERE id='$id'";
                        $consulta3 = $mysqli->query($query);
                        while ($fila = $consulta3->fetch_array(MYSQLI_ASSOC)) {
                            echo '
                                    
                                               <!-- blog detail -->
                                <h2>' . $fila['titulo'] . '</h2>
                                <p class="info">Fecha: ' . $fila['fecha'] . '</p>
                                <p class="info">Contactos: ' . $fila['contactos'] . '</p>
                                <img src="admin/proyectos/' . $fila['file'] . '" class="thumbnail img-responsive" alt="blog title">
                                <p>' . $fila['ubicacion'] . '</p>
                                <h4>Caracteristicas</h4>
                                <p>' . $fila['contenido'] . ' </p>
                    <!-- blog detail --> 
                                    
                             ';

                        }


                    } else {
                        echo "Error no se pudo procesar la peticion";
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