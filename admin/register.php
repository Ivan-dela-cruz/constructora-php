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
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <!-- banner -->
                    <div class="inside-banner">
                        <div class="container">
                            <span class="pull-right"><a href="#">Inicio</a> / Registrar</span>
                            <h2>Registrar usuario</h2>
                        </div>
                    </div>
                    <!-- banner -->
                    <div class="container">
                        <div class="spacer">
                            <div class="row">
                                <form action="usuarios/guardarDatos.php" method="post">
                                    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
                                        <div class="form-group-lg">
                                            <label for="nombre" >Nombre usuario</label>
                                            <input type="text" class="form-control" placeholder="Nombre completo"
                                                   name="nombre">
                                            <br>
                                        </div>
                                        <div class="form-group-lg">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" placeholder="Ingresa email"
                                                   name="email">
                                            <br>
                                        </div>
                                        <div class="form-group-lg">
                                            <label for="pass">Contraseña</label>
                                            <input type="password" class="form-control" placeholder="contraseña"
                                                   name="clave" id="pass">
                                            <br>
                                        </div>
                                        <div class="form-group-lg">
                                            <label for="pass2" id="vale">Confirmar contraseña</label>
                                            <input type="password" class="form-control"
                                                   placeholder="Confirmar contraseña"
                                                   name="clave2" id="pass2">
                                            <br>
                                            <button type="submit" class="btn btn-info btn-lg" name="Submit" id="btnUser">Registrar
                                            </button>
                                            <br><br>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php'; ?>