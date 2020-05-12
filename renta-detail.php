<?php include 'header.php'; ?>
    <!-- banner -->
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="#">Inicio</a> / Rentar</span>
            <h2>Rentar inmueble detalles</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="properties-listing spacer">

            <div class="row">
                <div class="col-lg-3 col-sm-4 hidden-xs">

                    <div class="hot-properties hidden-xs">
                        <h4>Propiedades recientes</h4>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="images/properties/4.jpg"
                                                                class="img-responsive img-circle" alt="properties"/>
                            </div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="property-detail.php">Casa de campo amoblada</a></h5>
                                <p class="price">$300,000</p></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                                                class="img-responsive img-circle" alt="properties"/>
                            </div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="property-detail.php">Casa de campo amoblada</a></h5>
                                <p class="price">$300,000</p></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="images/properties/3.jpg"
                                                                class="img-responsive img-circle" alt="properties"/>
                            </div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="property-detail.php">Casa de campo amoblada</a></h5>
                                <p class="price">$300,000</p></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="images/properties/2.jpg"
                                                                class="img-responsive img-circle" alt="properties"/>
                            </div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="property-detail.php">Casa de campo amoblada</a></h5>
                                <p class="price">$300,000</p></div>
                        </div>

                    </div>


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
                <?php
                require_once "admin/conexion/connect.php";
                $id = $_GET['id'];
                $query = "SELECT * FROM renta WHERE id='$id'";
                $consulta1 = $mysqli->query($query);
                while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
                    echo '
                <div class="col-lg-9 col-sm-8 ">

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
                                        <div class="item active">
                                                <img src="admin/venta/' . $fila['file1'] . '" class="properties" alt="properties"/>
                                            </div>
                                            <!-- #Item 1 -->
    
                                            <!-- Item 2 -->
                                            <div class="item">
                                                <img src="admin/venta/' . $fila['file2'] . '" class="properties" alt="properties"/>
    
                                            </div>
                                            <!-- #Item 2 -->
    
                                            <!-- Item 3 -->
                                            <div class="item">
                                                <img src="admin/venta/' . $fila['file3'] . '" class="properties" alt="properties"/>
                                            </div>
                                            <!-- #Item 3 -->
    
                                            <!-- Item 4 -->
                                            <div class="item ">
                                                <img src="admin/venta/' . $fila['file4'] . '" class="properties" alt="properties"/>
    
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


                             <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Detalles del inmueble</h4>
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
                                    <div class="property-info">
    
                                        <p class="price">Pago mes $ ' . $fila['preciom'] . '</p>
                                        <p class="price">Garantía $ ' . $fila['preciog'] . '</p>
                                        <p class="area"><span class="glyphicon glyphicon-map-marker"></span> ' . $fila['direccion'] . '</p>
    
                                        <div class="profile">
                                            <span class="glyphicon glyphicon-user"></span> Dueño del inmueble
                                            <p>Valverde & Valverde<br>' . $fila['telefono'] . '</p>
                                        </div>
                                    </div>
    
                                    <h6><span class="glyphicon glyphicon-home"></span> Disponibilidad</h6>
                                    <div class="listing-detail">
                                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Dormitorios">' . $fila['dormitorio'] . '</span> 
                                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Baños disponibles">' . $fila['banio'] . '</span>
                                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parqueaderos">' . $fila['parqueadero'] . '</span> 
                                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Cocina disponibles">' . $fila['cocina'] . '</span>
                                    </div>
                                    <div class="property-info">
                                        <a name="Submit"  class="btn btn-primary" href="rentarInmueble.php?id=' . $fila['id'] . '" >Rentar ahora</a>
                                       
                                    </div>
    
                                </div>
                                <div class="col-lg-12 col-sm-6 ">
                                    <div class="enquiry">
                                        <h6><span class="glyphicon glyphicon-envelope"></span> Contacta con el vendedor</h6>
                                        <form role="form">
                                            <input type="text" class="form-control" placeholder="Nombres completos"/>
                                            <input type="text" class="form-control" placeholder="tu@email.com"/>
                                            <input type="text" class="form-control" placeholder="número telefónico"/>
                                            <textarea rows="6" class="form-control"
                                                      placeholder="Escribe una pregunta?"></textarea>
                                            <button type="submit" class="btn btn-primary" name="Submit">Enviar mensaje
                                            </button>
                                        </form>
    
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

<?php include 'footer.php'; ?>