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
                                <h3 class="">Detalle proyecto</h3>
                            </div>
                            <div class="panel-body no-padding">
                                <!-- blog list -->
                                <?php
                                    require_once "conexion/connect.php";
                                        $id = $_GET['id'];
                                        $query = "SELECT * FROM proyectos WHERE id='$id'";
                                        $consulta1 = $mysqli->query($query);
                                    while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
                                        echo '
                                             <div class="col-lg-12">
                                                 <div class="col-lg-12">
                                                       <h2>' . $fila['titulo'] . '</h2>
                                                        <p class="info">Fecha: ' . $fila['fecha'] . '</p>
                                                        <p class="info">Contactos: ' . $fila['contactos'] . '</p>
                                                 </div>
                                                 <div class="col-lg-10">
                                                        <img width="100%" src="proyectos/' . $fila['file'] . '" class="thumbnail img-responsive" alt="blog title">
                                                 </div>
                                                 <div class="col-lg-12">
                                                    <p>' . $fila['ubicacion'] . '</p>
                                                 </div>
                                                    
                                                 <div class="col-lg-12">
                                                     <h3>Caracteristicas</h3>
                                                        <p>' . $fila['contenido'] . ' </p>
                                                 </div>
                                               
                                                 <div class="col-lg-4 pull-right">
                                                        <a href="" class="btn btn-info btn-lg"><i class="lnr lnr-pencil"></i></a>   
                                                        <a href="showProyectos.php" class="btn btn-success btn-lg"><i class="lnr lnr-home"></i></a>
                                                 </div> 
                                              </div>
                                                  
                                       ';
                                    }

                                ?>
                                <h1><?php echo " .";?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>