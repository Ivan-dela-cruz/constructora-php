
<!doctype html>
<html lang="en">

<head>
    <title>Admin | Valverde & Valverde</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
<?php
session_start();
if (!$_SESSION['verificar']) {
    header("Location: login.php");
}
echo $_SESSION['user'];

?>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="index.php"><img style="height: 33px;" src="assets/img/logoGris.png" alt="Klorofil Logo"
                                     class="img-responsive logo"></a>
        </div>
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
            </div>

            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="lnr lnr-question-circle"></i> <span>Ayuda</span> <i
                                    class="icon-submenu lnr lnr-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Basic Use</a></li>
                            <li><a href="#">Working With Data</a></li>
                            <li><a href="#">Security</a></li>
                            <li><a href="#">Troubleshooting</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png"
                                                                                        class="img-circle" alt="Avatar">
                            <span><?php echo $_SESSION['user']; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                            <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                            <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                            <li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Administrador</span></a>
                    </li>
                    <li>
                        <a href="#subPagesRenta" data-toggle="collapse" class="collapsed"><i
                                    class="lnr lnr-file-empty"></i>
                            <span>Rentas</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagesRenta" class="collapse ">
                            <ul class="nav">
                                <li><a href="registroInmueblesRenta.php" class="">Nuevo</a></li>
                                <li><a href="rentas.php" class="">Archivos</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPagesVenta" data-toggle="collapse" class="collapsed"><i
                                    class="lnr lnr-file-empty"></i>
                            <span>Ventas</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagesVenta" class="collapse ">
                            <ul class="nav">
                                <li><a href="registroInmueblesVenta.php" class="">Nuevo</a></li>
                                <li><a href="ventas.php" class="">Archivos</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPagesProyecto" data-toggle="collapse" class="collapsed"><i
                                    class="lnr lnr-file-empty"></i>
                            <span>Proyectos</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagesProyecto" class="collapse ">
                            <ul class="nav">
                                <li><a href="registroProyectos.php" class="">Nuevo</a></li>
                                <li><a href="showProyectos.php" class="">Archivos</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPagesInfor" data-toggle="collapse" class="collapsed"><i
                                    class="lnr lnr-file-empty"></i>
                            <span>Información</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagesInfor" class="collapse ">
                            <ul class="nav">
                                <li><a href="actualizarInformacion.php" class="">Actualizar</a></li>
                                <li><a href="ventas.php" class="">Revisar</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPagesUser" data-toggle="collapse" class="collapsed"><i
                                    class="lnr lnr-file-empty"></i>
                            <span>Usuarios</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagesUser" class="collapse ">
                            <ul class="nav">
                                <li><a href="Register.php" class="">Administradores</a></li>
                                
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="logout.php"><i class="lnr lnr-exit-up"></i>Cerrar sesión</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
