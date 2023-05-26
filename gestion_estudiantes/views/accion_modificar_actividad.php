<?php
require '../models/Estudiante.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/EstudianteController.php';
require '../models/Actividades.php';
require '../controllers/ActividadBaseController.php';
require '../controllers/ActividadController.php';


use actividad\Actividad;
use actividadController\ActividadController;

$actividad = new Actividad();
$id = $_GET['id'];
$codigo = $_POST['codigo'];
$nombres = $_GET['nombres'];
$actividad->setDescripcion($_POST['descripcion']);
$actividad->setNota($_POST['nota']);


$ActividadController = new ActividadController();
$resultado = $ActividadController->updateActividad($id,$actividad);
if ($resultado) {
    echo '<h1>Actividad modificada</h1>';
} else {
    echo '<h1>No se pudo modificar la actividad</h1>';
}
echo '<a href="notas_estudiante.php?codigo='.$codigo.'&nombres='.$nombres.'.">Volver al inicio</a>'
?>



