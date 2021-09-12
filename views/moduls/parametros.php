<?php

if ($_SESSION["perfil"] != "administrador") {

  echo '<script>

  window.location = "inicio";

</script>';

  return;
}

?>

<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Gestor Empresa
    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Gestor Empresa</li>

    </ol>

  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-6 col-xs-12">

        <!--=====================================
      BLOQUE 1
      ======================================-->

        <?php

        /*=============================================
        ADMINISTRACIÓN DE LOGOTIPO E ICONO
        =============================================*/

        include "parametros/logotipo.php";

        ?>

      </div>
      <div class="col-md-6 col-xs-12">

        <!--=====================================
      BLOQUE 1
      ======================================-->

        <?php


        /*=====================================
        ADMINISTRAR REDES SOCIALES
        ======================================*/

        include "parametros/redSocial.php";

        ?>

      </div>


    </div>

  </section>

</div>