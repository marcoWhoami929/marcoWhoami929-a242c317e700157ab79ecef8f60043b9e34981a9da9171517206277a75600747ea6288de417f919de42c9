<?php

/**CONTROLLERS */
require_once "controllers/template.controller.php";
require_once "controllers/admin.controller.php";
require_once "controllers/banner.controlador.php";
require_once "controllers/categorias.controlador.php";
require_once "controllers/subcategorias.controlador.php";
require_once "controllers/cabeceras.controlador.php";
require_once "controllers/comercio.controlador.php";
require_once "controllers/mensajes.controlador.php";
require_once "controllers/perfiles.controlador.php";
require_once "controllers/productos.controlador.php";
require_once "controllers/slide.controlador.php";
require_once "controllers/usuarios.controlador.php";
require_once "controllers/ventas.controlador.php";
require_once "controllers/visitas.controlador.php";
require_once "controllers/notificaciones.controlador.php";
/**MODELS */
require_once "models/admin.model.php";
require_once "models/rutas.php";
require_once "models/banner.modelo.php";
require_once "models/categorias.modelo.php";
require_once "models/subcategorias.modelo.php";
require_once "models/cabeceras.modelo.php";
require_once "models/comercio.modelo.php";
require_once "models/mensajes.modelo.php";
require_once "models/perfiles.modelo.php";
require_once "models/productos.modelo.php";
require_once "models/slide.modelo.php";
require_once "models/usuarios.modelo.php";
require_once "models/ventas.modelo.php";
require_once "models/visitas.modelo.php";
require_once "models/notificaciones.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla->plantilla();
