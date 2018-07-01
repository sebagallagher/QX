<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/medicos.controlador.php";
require_once "controladores/tens.controlador.php";
require_once "controladores/pacientes.controlador.php";
require_once "controladores/codigos.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/tablaqx.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/medicos.modelo.php";
require_once "modelos/tens.modelo.php";
require_once "modelos/pacientes.modelo.php";
require_once "modelos/codigos.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/tablaqx.modelo.php";



$plantilla = new ControladorPlantilla();
$plantilla-> ctrPlantilla();


?>