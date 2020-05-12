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
                <h3 class="page-title">Proyectos</h3>
                <div class="row">
                    <div class="col-md-12">
                        <!-- INPUT SIZING -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="">Nuevo proyecto</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <form action="proyectos/guardarDatos.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group col-lg-12">
                                            <label for="" class="">Título</label>
                                            <input name="titulo" class="form-control input-lg" placeholder="agrega un titulo"
                                                   type="text">
                                            <br>
                                            <label for="" class="">Ubicación</label>
                                            <input name="ubicacion" class="form-control input-lg" placeholder="agrega dirección"
                                                   type="text">
                                            <br>

                                            <label for="" class="">Contactos</label>
                                            <input name="contacto" class="form-control input-lg"
                                                   placeholder="agrega un numero de contacto"
                                                   type="text">
                                            <br>

                                            <div class="col-lg-6">
                                                <label for="" class="">Imagen</label>
                                                <input name="file1" class="form-control input-lg" type="file">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="" class="">Fecha inicio</label>
                                                <input name="fecha" class="form-control input-lg" type="date">
                                            </div>
                                        </div>

                                </div>
                                <div class="col-lg-12">
                                    <label for="" class="">Contenido/ características</label>
                                    <textarea name="contenido" id="inmventa" class="form-control"
                                              placeholder="agrega una descripción" type="text"></textarea>
                                    <br>
                                </div>
                                <div class="col-lg-12">
                                    <input class="btn btn-info pull-right btn-lg" type="submit" value="Guardar">
                                    <br>
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