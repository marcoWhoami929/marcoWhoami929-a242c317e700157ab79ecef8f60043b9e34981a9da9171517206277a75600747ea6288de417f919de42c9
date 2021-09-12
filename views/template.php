<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amesa | Aceros Maquilados | Techos | Vigas IPR | Placa | Perfiles</title>

    <link rel="icon" href="views/img/plantilla/icono.png">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!--=====================================
  PLUGINS DE CSS
  ======================================-->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="views/dist/css/AdminLTE.css">

    <link rel="stylesheet" href="views/dist/css/skins/skin-red-light.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="views/plugins/iCheck/square/blue.css">

    <!-- Morris chart -->
    <link rel="stylesheet" href="views/bower_components/morris.js/morris.css">

    <!-- jvectormap -->
    <link rel="stylesheet" href="views/bower_components/jvectormap/jquery-jvectormap.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="views/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">

    <!-- bootstrap slider -->
    <link rel="stylesheet" href="views/plugins/bootstrap-slider/slider.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

    <!-- bootstrap tags input -->
    <link rel="stylesheet" href="views/plugins/tags/bootstrap-tagsinput.css">

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="views/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <!-- Dropzone -->
    <link rel="stylesheet" href="views/plugins/dropzone/dropzone.css">

    <!--=====================================
  CSS PERSONALIZADO
  ======================================-->

    <link rel="stylesheet" href="views/css/plantilla.css">

    <link rel="stylesheet" href="views/css/slide.css">


    <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

    <!-- jQuery 3 -->
    <script src="views/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="views/bower_components/jquery-ui/jquery-ui.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- AdminLTE App -->
    <script src="views/dist/js/adminlte.min.js"></script>

    <!-- iCheck http://icheck.fronteed.com/-->
    <script src="views/plugins/iCheck/icheck.min.js"></script>

    <!-- Morris.js charts -->
    <script src="views/bower_components/raphael/raphael.min.js"></script>

    <script src="views/bower_components/morris.js/morris.min.js"></script>

    <!-- jQuery Knob Chart -->
    <script src="views/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

    <!-- jvectormap -->
    <script src="views/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>

    <script src="views/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- ChartJS -->
    <script src="views/bower_components/Chart.js/Chart.js"></script>

    <!-- SweetAlert 2 https://sweetalert2.github.io/-->
    <script src="views/plugins/sweetalert2/sweetalert2.all.js"></script>

    <!-- bootstrap color picker https://farbelous.github.io/bootstrap-colorpicker/v2/-->
    <script src="views/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>

    <!-- Bootstrap slider http://seiyria.com/bootstrap-slider/-->
    <script src="views/plugins/bootstrap-slider/bootstrap-slider.js"></script>

    <!-- DataTables https://datatables.net/-->
    <script src="views/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

    <!-- bootstrap tags input https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/-->
    <script src="views/plugins/tags/bootstrap-tagsinput.min.js"></script>

    <!-- bootstrap datetimepicker http://bootstrap-datepicker.readthedocs.io-->
    <script src="views/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- Dropzone http://www.dropzonejs.com/-->
    <script src="views/plugins/dropzone/dropzone.js"></script>

</head>

<body class="hold-transition skin-red-light sidebar-collapse sidebar-mini login-page">

    <?php

    if (isset($_SESSION["validarSesionBackend"]) && $_SESSION["validarSesionBackend"] === "ok") {

        echo '<div class="wrapper">';

        /*=============================================
     CABEZOTE
     =============================================*/

        include "moduls/cabezote.php";

        /*=============================================
     LATERAL
     =============================================*/

        include "moduls/lateral.php";

        /*=============================================
     CONTENIDO
     =============================================*/


        if (isset($_GET["ruta"])) {

            $carpeta = "views/moduls/";
            $class  = $carpeta . $_GET["ruta"] . '.php';

            if (!file_exists($class)) {
                include "moduls/404.php";
            } else {
                include $class;
            }
        } else {

            include "moduls/inicio.php";
        }

        /*=============================================
     FOOTER
     =============================================*/

        include "moduls/footer.php";


        echo '</div>';
    } else {

        include "moduls/login.php";
    }


    ?>

    <!--=====================================
JS PERSONALIZADO
======================================-->

    <script src="views/js/plantilla.js"></script>

    <script src="views/js/gestorComercio.js"></script>
    <script src="views/js/gestorSlide.js"></script>
    <script src="views/js/gestorCategorias.js"></script>
    <script src="views/js/gestorSubCategorias.js"></script>
    <script src="views/js/gestorProductos.js"></script>
    <script src="views/js/gestorBanner.js"></script>
    <script src="views/js/gestorVentas.js"></script>
    <script src="views/js/gestorVisitas.js"></script>
    <script src="views/js/gestorUsuarios.js"></script>
    <script src="views/js/gestorAdministradores.js"></script>
    <script src="views/js/gestorNotificaciones.js"></script>


</body>

</html>