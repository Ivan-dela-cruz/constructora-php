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
                <h3 class="page-title">Inmuebles en renta</h3>
                <div class="row">
                    <div class="col-md-12">
                        <!-- INPUT SIZING -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="">Registro de inmuebles en renta</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <form action="renta/guardarDatos.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group col-lg-12">
                                            <label for="" class="">Título</label>
                                            <input name="titulo" class="form-control input-lg" placeholder="agrega un titulo"
                                                   type="text">
                                            <br>
                                            <label for="" class="">Dirección</label>
                                            <input name="direccion" class="form-control input-lg" placeholder="agrega dirección"
                                                   type="text">
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <label for="" class="">Imagen 1</label>
                                                <input name="file1" class="input-lg" type="file">
                                                <br>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="" class="">Imagen 2</label>
                                                <input name="file2" class="input-lg" type="file">
                                                <br>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="" class="">Imagen 3</label>
                                                <input name="file3" class="input-lg" type="file">
                                                <br>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="" class="">Imagen 4</label>
                                                <input name="file4" class="input-lg" type="file">
                                                <br>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="col-lg-4">
                                                <label for="" class="">Télefono</label>
                                                <input name="telefono" class="form-control input-lg"
                                                       placeholder="agrega un numero de contacto"
                                                       type="text">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="" class="">Precio mensual</label>
                                                <input name="preciom" class="form-control input-lg" placeholder="agrega el costo mensual"
                                                       type="text">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="" class="">Precio garantía</label>
                                                <input name="preciog" class="form-control input-lg" placeholder="agrega precio garantia"
                                                       type="text">
                                                <br>
                                            </div>

                                        </div>
                                        <div class="col-lg-12">
                                            <label for="" class="">Detalle propiedad</label>
                                            <textarea name="detalle" id="inmventa" class="form-control"
                                                      placeholder="agrega una descripción" type="text"></textarea>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <label for="" class="">Tipo</label>
                                                <select class="form-control input-lg" name="tipo" id="tipo">
                                                    <option value="Apartamento">Apartamento</option>
                                                    <option value="Casa completa">Casa completa</option>
                                                    <option value="Edifico">Habitación</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="" class="">Estado actual</label>
                                                <select class="form-control input-lg" name="estado" id="estado">
                                                    <option value="En renta">En renta</option>
                                                    <option value="Rentada">Rentada</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <div class="col-lg-3">
                                                <label for="" class="">Dormitorios</label>
                                                <input name="dormitorio" class="form-control input-lg" type="number" min="1" max="10"
                                                       value="1">
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="" class="">Cocinas</label>
                                                <input name="cocina" class="form-control input-lg" type="number" min="1" max="10"
                                                       value="1">
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="" class="">Baños</label>
                                                <input name="banio" class="form-control input-lg" type="number" min="1" max="10"
                                                       value="1">
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="" class="">Parqueaderos</label>
                                                <input name="parqueadero" class="form-control input-lg" type="number" min="0" max="5"
                                                       value="0">
                                                <br>
                                            </div>
                                            <div class="col-lg-12">
                                                <input class="btn btn-success pull-right btn-lg" type="submit" value="Guardar">
                                                <br>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END INPUT SIZING -->
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php'; ?>