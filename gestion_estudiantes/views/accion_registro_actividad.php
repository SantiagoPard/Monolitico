<?php
require '../models/Estudiante.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/EstudianteController.php';
require '../models/Actividades.php';

use Estudiante\Estudiante;
use EstudianteController\EstudianteController;
use actividad\Actividad;

$Actividad = new Actividad();
$codigo = $_POST['codigo'];
$Actividad->setDescripcion($_POST['descripcion']);
$Actividad->setNota($_POST['nota']);

$EstudianteController = new EstudianteController();
$resultado = $EstudianteController->createActividad($Actividad, $codigo);
if ($resultado) {
    echo '<h1>Actividad Registrada</h1>';
} else {
    echo '<h1>No se pudo registrar la actividad</h1>';
}